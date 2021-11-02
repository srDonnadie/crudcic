<?php

namespace App\Http\Controllers;

use App\Models\EquiposUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Equipo;

/**
 * Class EquiposUsuarioController
 * @package App\Http\Controllers
 */
class EquiposUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consulta=trim($request->get('consulta'));
        $equiposUsuarios=DB::table('equipos_usuarios')
                        ->select('id', 'fecha_entrega', 'estado_entrega', 'ubicacion', 'fecha_devolucion', 'observacion_devolucion', 'cc_id', 'serial_id')
                            ->where('cc_id', 'like', '%'.$consulta.'%')
                                ->orWhere('serial_id', 'like', '%'.$consulta.'%')
                                    ->paginate(100);

        $equipoYusuario = EquiposUsuario::paginate();
        return view('equipos-usuario.index', compact('equiposUsuarios', 'equipoYusuario', 'consulta'))
            ->with('i', (request()->input('page', 1) - 1) * $equiposUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equiposUsuario = new EquiposUsuario();
        $equipos=Equipo::pluck('serial','serial');
        $usuarios=Usuario::pluck('cc','cc');
        return view('equipos-usuario.create', compact('equiposUsuario', 'equipos', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EquiposUsuario::$rules);

        $equiposUsuario = EquiposUsuario::create($request->all());

        return redirect()->route('equipos-usuarios.index')
            ->with('success', '¡Usuario & equipo registrados exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equiposUsuario = EquiposUsuario::find($id);

        return view('equipos-usuario.show', compact('equiposUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equiposUsuario = EquiposUsuario::find($id);
        $equipos=Equipo::pluck('serial','serial');
        $usuarios=Usuario::pluck('cc','cc');
        return view('equipos-usuario.edit', compact('equiposUsuario', 'equipos', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EquiposUsuario $equiposUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EquiposUsuario $equiposUsuario)
    {
        request()->validate(EquiposUsuario::$rules);

        $equiposUsuario->update($request->all());

        return redirect()->route('equipos-usuarios.index')
            ->with('success', '¡Usuario & equipo actualizados exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equiposUsuario = EquiposUsuario::find($id)->delete();

        return redirect()->route('equipos-usuarios.index')
            ->with('success', '¡Usuario & equipo eliminados exitosamente!');
    }
}
