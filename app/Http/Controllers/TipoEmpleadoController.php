<?php

namespace App\Http\Controllers;

use App\Models\TipoEmpleados;
use Illuminate\Http\Request;

/**
 * Class TipoEmpleadoController
 * @package App\Http\Controllers
 */
class TipoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoEmpleados = TipoEmpleados::paginate();

        return view('tipo-empleado.index', compact('tipoEmpleados'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoEmpleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEmpleado = new TipoEmpleados();
        return view('tipo-empleado.create', compact('tipoEmpleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoEmpleados::$rules);

        $tipoEmpleado = TipoEmpleados::create($request->all());

        return redirect()->route('tipo-empleados.index')
            ->with('success', 'TipoEmpleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoEmpleado = TipoEmpleados::find($id);

        return view('tipo-empleado.show', compact('tipoEmpleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoEmpleado = TipoEmpleados::find($id);

        return view('tipo-empleado.edit', compact('tipoEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoEmpleado $tipoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEmpleados $tipoEmpleado)
    {
        request()->validate(TipoEmpleados::$rules);

        $tipoEmpleado->update($request->all());

        return redirect()->route('tipo-empleados.index')
            ->with('success', 'TipoEmpleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoEmpleado = TipoEmpleados::find($id)->delete();

        return redirect()->route('tipo-empleados.index')
            ->with('success', 'TipoEmpleado deleted successfully');
    }
}
