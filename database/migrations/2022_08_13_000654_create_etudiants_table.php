<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('matricule');
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('date_naiss')->nullable();
            $table->string('lieu_naiss')->nullable();
            $table->string('sexe')->nullable();

            $table->string('adresse')->nullable();
            $table->string('cin')->nullable();
            $table->string('tel')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('id_niveau')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
