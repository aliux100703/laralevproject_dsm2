<?php

namespace App\Http\Controllers;

use App\Models\Turnos;
use Illuminate\Http\Request;

/**
 * Class TurnoController
 * @package App\Http\Controllers
 */
class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turnos::paginate();

        return view('turno.index', compact('turnos'))
            ->with('i', (request()->input('page', 1) - 1) * $turnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turno = new Turnos();
        return view('turno.create', compact('turno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Turnos::$rules);

        $turno = Turnos::create($request->all());

        return redirect()->route('turnos.index')
            ->with('success', 'Turno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turno = Turnos::find($id);

        return view('turno.show', compact('turno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turno = Turnos::find($id);

        return view('turno.edit', compact('turno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Turno $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turnos $turno)
    {
        request()->validate(Turnos::$rules);

        $turno->update($request->all());

        return redirect()->route('turnos.index')
            ->with('success', 'Turno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $turno = Turnos::find($id)->delete();

        return redirect()->route('turnos.index')
            ->with('success', 'Turno deleted successfully');
    }
}
