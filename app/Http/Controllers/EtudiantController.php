<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('etudiant.inscription');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
//     * @throws ValidationException
     */
    public function store(Request $request)
    {
        //
//        $this->validate($request,[
//           'nom_etud' => 'required|max:5',
//            'tel_etud' => 'requiered|unique:etudiant',
//            'mail_etud' => 'requierd|email|unique:etudiant',
//            'annee_etud' => 'requierd'
//        ]);
        try {
            DB::beginTransaction();;
            $mat = $this->generate_matricule();
            Etudiant::create(array_merge($request->all(), ['code_etud'=>$mat]));//ou create
            DB::commit();
        }catch (\Throwable $th){
            DB::rollBack();
            dd($th);
        }
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
    public function destroy(string $id)
    {
        //
    }

    public function generate_matricule(){
        $mat = Str::random(10);
        $exit = Etudiant::find($mat);
        if ($exit != null)
            $this->generate_matricule();
        else
            return $mat;

    }
}
