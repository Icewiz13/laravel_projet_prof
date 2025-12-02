<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produit extends Migration
{
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('prix');
            $table->string('qte');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
