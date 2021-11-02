<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Equipo;

/**
 * Class AccesorioController
 * @package App\Http\Controllers
 */
class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consulta=trim($request->get('consulta'));
        $accesorios=DB::table('accesorios')
                        ->select('id', 'accesorios_computo', 'cables_extras', 'extras', 'serial_id')
                            ->where('serial_id', 'like', '%'.$consulta.'%')
                                ->paginate(100);

        $acc = Accesorio::paginate();
        return view('accesorio.index', compact('accesorios', 'acc', 'consulta'))
            ->with('i', (request()->input('page', 1) - 1) * $accesorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accesorio = new Accesorio();
        $equipos=Equipo::pluck('serial','serial');
        return view('accesorio.create', compact('accesorio','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Accesorio::$rules);
        $accesorio = Accesorio::create($request->all());
        return redirect()->route('accesorios.index')
            ->with('success', '¡Accesorios agregados exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accesorio = Accesorio::find($id);
        return view('accesorio.show', compact('accesorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accesorio = Accesorio::find($id);
        $equipos=Equipo::pluck('serial','serial');
        return view('accesorio.edit', compact('accesorio','equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Accesorio $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesorio $accesorio)
    {
        request()->validate(Accesorio::$rules);
        $accesorio->update($request->all());
        return redirect()->route('accesorios.index')
            ->with('success', '¡Accesorios actualizados exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $accesorio = Accesorio::find($id)->delete();
        return redirect()->route('accesorios.index')
            ->with('success', '¡Accesorios retirados exitosamente!');
    }
}
