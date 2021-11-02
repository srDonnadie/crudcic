<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Support\Facades\DB;
use App\Models\Equipo;
use Illuminate\Http\Request;

/**
 * Class MantenimientoController
 * @package App\Http\Controllers
 */
class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consulta=trim($request->get('consulta'));
        $mantenimientos=DB::table('mantenimientos')
                        ->select('id', 'fecha_mantenimiento', 'estado_mantenimiento', 'tipo_mantenimiento', 'realizado_por', 'observaciones_mantenimiento', 'serial_id')
                            ->where('serial_id', 'like', '%'.$consulta.'%')
                                ->paginate(100);

        $mant = Mantenimiento::paginate();
        return view('mantenimiento.index', compact('mantenimientos', 'mant', 'consulta'))
            ->with('i', (request()->input('page', 1) - 1) * $mantenimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mantenimiento = new Mantenimiento();
        $equipos=Equipo::pluck('serial','serial');
        return view('mantenimiento.create', compact('mantenimiento', 'equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mantenimiento::$rules);
        $mantenimiento = Mantenimiento::create($request->all());
        return redirect()->route('mantenimientos.index')
            ->with('success', '¡Registro de mantenimiento agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.show', compact('mantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mantenimiento = Mantenimiento::find($id);
        $equipos=Equipo::pluck('serial','serial');
        return view('mantenimiento.edit', compact('mantenimiento', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        request()->validate(Mantenimiento::$rules);
        $mantenimiento->update($request->all());
        return redirect()->route('mantenimientos.index')
            ->with('success', '¡Registro de mantenimiento actualizado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mantenimiento = Mantenimiento::find($id)->delete();
        return redirect()->route('mantenimientos.index')
            ->with('success', '¡Registro de mantenimiento eliminado exitosamente!');
    }
}
