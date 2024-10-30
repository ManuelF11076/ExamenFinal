<?php

namespace App\Http\Controllers;

use App\Models\PilotoSede;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PilotoSedeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PilotoSedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pilotoSedes = PilotoSede::paginate();

        return view('piloto-sede.index', compact('pilotoSedes'))
            ->with('i', ($request->input('page', 1) - 1) * $pilotoSedes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pilotoSede = new PilotoSede();

        return view('piloto-sede.create', compact('pilotoSede'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PilotoSedeRequest $request): RedirectResponse
    {
        PilotoSede::create($request->validated());

        return Redirect::route('piloto-sedes.index')
            ->with('success', 'PilotoSede created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pilotoSede = PilotoSede::find($id);

        return view('piloto-sede.show', compact('pilotoSede'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pilotoSede = PilotoSede::find($id);

        return view('piloto-sede.edit', compact('pilotoSede'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PilotoSedeRequest $request, PilotoSede $pilotoSede): RedirectResponse
    {
        $pilotoSede->update($request->validated());

        return Redirect::route('piloto-sedes.index')
            ->with('success', 'PilotoSede updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PilotoSede::find($id)->delete();

        return Redirect::route('piloto-sedes.index')
            ->with('success', 'PilotoSede deleted successfully');
    }
}
