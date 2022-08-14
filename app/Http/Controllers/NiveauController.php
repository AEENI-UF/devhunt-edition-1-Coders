<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::with('configurations')->get();
        return response()->json($niveaux, 200);
    }
    public function ByLevel()
    {
        return response()->json(Niveau::with('etudiants')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $niveau = Validator::make($request->all(), [
            "design_niveau" => "required",

        ]);
        $niveau->validate();
        $niveau = new Niveau($request->all());
        $niveau->save();

        return response()->json($niveau, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveau = Niveau::find($id);

        return response()->json($niveau, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $niveau = Niveau::find($id);
        $niveau->update($request->all());

        return response()->json($niveau, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $niveau = Niveau::find($id);
        $niveau->delete();

        return response()->json($niveau, 200);
    }
}
