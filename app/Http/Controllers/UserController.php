<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('created_at', 'DESC')->get();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::create($request->all());
        return redirect()->route('user')->with('success', "L'utilisateur a été ajouté avec succès");
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
        $users = Etudiant::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $users = User::findOrFail($id);

        $users -> update($request->all());

        return redirect()->route('user')->with('success', 'User update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('user')->with('success', "L'utilisateur a été supprimé");
    }
}
