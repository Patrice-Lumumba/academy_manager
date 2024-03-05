<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $etudiant = Etudiant::orderBy('updated_at' , 'DESC')->get();
        $etudiant = Etudiant::latest()->paginate(5);
        return view('etudiant.list', compact('etudiant'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.inscription');
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
            DB::commit();//Appliquer les changements
            return redirect('/etudiant')->with('success', "Opération réussie");

        }catch (\Throwable $th){
            return redirect("/",)->with("error", "Echec de l'opération");
//            dd($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * @param int $code_etud
     * Show the form for editing the specified resource.
     * @return Application|Factory|View
     */
    public function edit($code_etud)
    {
        $etudiant = Etudiant::findOrFail($code_etud);
        return view('etudiant.edit', compact('etudiant'));
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $code_etud
     * @return RedirectResponse
     */
    public function update(Request $request,  $code_etud)
    {
        //
        $product = Etudiant::findOrFail($code_etud);

        $product->update($request->all());

        return redirect()->route('etudiant')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code_etud)
    {
        //
        $etudiant = Etudiant::findOrFail($code_etud);

        $etudiant->delete();

        return redirect()->route('etudiant')->with('success', 'Student deleted successfully');
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
