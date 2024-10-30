<?php

namespace App\Http\Controllers;

use App\Models\PilotoViaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PilotoViajeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PilotoViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pilotoViajes = PilotoViaje::paginate();

        return view('piloto-viaje.index', compact('pilotoViajes'))
            ->with('i', ($request->input('page', 1) - 1) * $pilotoViajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pilotoViaje = new PilotoViaje();

        return view('piloto-viaje.create', compact('pilotoViaje'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PilotoViajeRequest $request): RedirectResponse
    {
        PilotoViaje::create($request->validated());

        return Redirect::route('piloto-viajes.index')
            ->with('success', 'PilotoViaje created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pilotoViaje = PilotoViaje::find($id);

        return view('piloto-viaje.show', compact('pilotoViaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pilotoViaje = PilotoViaje::find($id);

        return view('piloto-viaje.edit', compact('pilotoViaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PilotoViajeRequest $request, PilotoViaje $pilotoViaje): RedirectResponse
    {
        $pilotoViaje->update($request->validated());

        return Redirect::route('piloto-viajes.index')
            ->with('success', 'PilotoViaje updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PilotoViaje::find($id)->delete();

        return Redirect::route('piloto-viajes.index')
            ->with('success', 'PilotoViaje deleted successfully');
    }
}
