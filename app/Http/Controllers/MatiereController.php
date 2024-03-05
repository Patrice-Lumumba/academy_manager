<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matiere = Matiere::orderBy('updated_at', 'ASC')->get();
        return view('matiere.index', compact('matiere'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('matiere.add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //
        Matiere::create($request->all());
        return redirect()->route('matiere')->with('success', 'La matière a été ajoutéé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code_mat)
    {
        //
        $matiere = Matiere::findOrFail($code_mat);

        $matiere->delete();

        return redirect()->route('matiere')->with('success', 'La matière a été supprimée');
    }
}
