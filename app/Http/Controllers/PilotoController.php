<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PilotoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pilotos = Piloto::paginate();

        return view('piloto.index', compact('pilotos'))
            ->with('i', ($request->input('page', 1) - 1) * $pilotos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $piloto = new Piloto();

        return view('piloto.create', compact('piloto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PilotoRequest $request): RedirectResponse
    {
        Piloto::create($request->validated());

        return Redirect::route('pilotos.index')
            ->with('success', 'Piloto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $piloto = Piloto::find($id);

        return view('piloto.show', compact('piloto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $piloto = Piloto::find($id);

        return view('piloto.edit', compact('piloto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PilotoRequest $request, Piloto $piloto): RedirectResponse
    {
        $piloto->update($request->validated());

        return Redirect::route('pilotos.index')
            ->with('success', 'Piloto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Piloto::find($id)->delete();

        return Redirect::route('pilotos.index')
            ->with('success', 'Piloto deleted successfully');
    }
}
