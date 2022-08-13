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
            $table->string('nom');
            $table->string('prenoms');
            $table->string('date_naiss');
            $table->string('lieu_naiss');
            $table->string('sexe')->nullable();
            $table->string('adresse');
            $table->string('cin');
            $table->string('tel');
            $table->string('password');
            $table->string('email');
            $table->string('id_niveau');
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
