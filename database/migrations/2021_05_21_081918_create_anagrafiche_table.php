<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnagraficheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anagrafiche', function (Blueprint $table) {
            $table->id();
            $table->integer('survey_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('nominativo_struttura');
            $table->string('percentuale_cessione');
            $table->string('interlocutore');
            $table->string('specializzazione');
            $table->string('profilo');
            $table->string('mezzi_diagnostici');
            $table->string('stato');
            $table->enum('tipo', ['off', 'on'])->default('off');

            $table->text('note')->nullable();

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
        Schema::dropIfExists('anagrafiche');
    }
}
