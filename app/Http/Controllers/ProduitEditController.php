<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitEditController extends Controller
{
    public function index(Request $req)
    {
        $pdt = Produit::where("id", $req->id)->first();
        return view('produit.edit', [ "produit" => json_decode($pdt) ]);
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
        ]);

        Produit::where("id", $req->id)->update([
            'designation' => $req->des ,
            'prix'        => $req->prix,
            'qte'         => $req->qte ,
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
