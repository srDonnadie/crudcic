<?php

namespace App\Http\Controllers;

use App\Models\SoftwareInstalado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Equipo;

/**
 * Class SoftwareInstaladoController
 * @package App\Http\Controllers
 */
class SoftwareInstaladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consulta=trim($request->get('consulta'));
        $softwareInstalados=DB::table('software_instalados')
                        ->select('id', 'tipo_software', 'nombre_software', 'version_software', 'fecha_instalacion', 'serial_id')
                            ->where('serial_id', 'like', '%'.$consulta.'%')
                                ->paginate(100);

        $software = SoftwareInstalado::paginate();
        return view('software-instalado.index', compact('softwareInstalados', 'software', 'consulta'))
            ->with('i', (request()->input('page', 1) - 1) * $softwareInstalados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $softwareInstalado = new SoftwareInstalado();
        $equipos=Equipo::pluck('serial','serial');
        return view('software-instalado.create', compact('softwareInstalado','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SoftwareInstalado::$rules);
        $softwareInstalado = SoftwareInstalado::create($request->all());
        return redirect()->route('software-instalados.index')
            ->with('success', '¡Registro de software agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $softwareInstalado = SoftwareInstalado::find($id);
        return view('software-instalado.show', compact('softwareInstalado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $softwareInstalado = SoftwareInstalado::find($id);
        $equipos=Equipo::pluck('serial','serial');
        return view('software-instalado.edit', compact('softwareInstalado','equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SoftwareInstalado $softwareInstalado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SoftwareInstalado $softwareInstalado)
    {
        request()->validate(SoftwareInstalado::$rules);
        $softwareInstalado->update($request->all());
        return redirect()->route('software-instalados.index')
            ->with('success', '¡Registro de software actualizado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $softwareInstalado = SoftwareInstalado::find($id)->delete();
        return redirect()->route('software-instalados.index')
            ->with('success', '¡Registro de software eliminado exitosamente!');
    }
}
