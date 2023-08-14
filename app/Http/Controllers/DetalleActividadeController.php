<?php

namespace App\Http\Controllers;

use App\Models\DetalleActividade;
use Illuminate\Http\Request;

/**
 * Class DetalleActividadeController
 * @package App\Http\Controllers
 */
class DetalleActividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleActividades = DetalleActividade::paginate();

        return view('detalle-actividade.index', compact('detalleActividades'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleActividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleActividade = new DetalleActividade();
        return view('detalle-actividade.create', compact('detalleActividade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleActividade::$rules);

        $detalleActividade = DetalleActividade::create($request->all());

        return redirect()->route('detalle-actividades.index')
            ->with('success', 'DetalleActividade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleActividade = DetalleActividade::find($id);

        return view('detalle-actividade.show', compact('detalleActividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleActividade = DetalleActividade::find($id);

        return view('detalle-actividade.edit', compact('detalleActividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleActividade $detalleActividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleActividade $detalleActividade)
    {
        request()->validate(DetalleActividade::$rules);

        $detalleActividade->update($request->all());

        return redirect()->route('detalle-actividades.index')
            ->with('success', 'DetalleActividade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleActividade = DetalleActividade::find($id)->delete();

        return redirect()->route('detalle-actividades.index')
            ->with('success', 'DetalleActividade deleted successfully');
    }
}
