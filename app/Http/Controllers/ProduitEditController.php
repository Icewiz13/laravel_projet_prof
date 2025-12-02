<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitEditController extends Controller
{
    public function index(Request $req)
    {
        $ctgr = Categorie::all();
        $pdt  = Produit::where("id", $req->id)->first();
        return view('produit.edit', [
            "produit" => json_decode($pdt),
            "categories" => json_decode($ctgr)
        ]);
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
            'des'  => 'required',
            'prix' => 'required|numeric',
            'qte'  => 'required|numeric',
            'c_id' => 'required',
        ]);

        Produit::where("id", $req->id)->update([
            'designation' => $req->des ,
            'prix'        => $req->prix,
            'qte'         => $req->qte ,
            'c_id'        => $req->c_id ,
        ]);

        return redirect("/liste-produit");
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
