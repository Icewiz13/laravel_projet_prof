<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieEditController extends Controller
{
    public function index(Request $req)
    {
        $pdt = Categorie::where("id", $req->id)->first();
        return view('categorie.edit', [ "categorie" => json_decode($pdt) ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $req)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([
            'nom'  => 'required'
        ]);

        Categorie::where("id", $req->id)->update([
            'nom' => $req->nom
        ]);

        return redirect("/liste-categorie");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
