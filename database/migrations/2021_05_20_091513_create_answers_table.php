<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('survey_id');
            $table->integer('question_id');
            $table->integer('anagrafica_id');
            $table->string('titolo');
            $table->string('descrizione')->nullable();;
            $table->string('tipo')->nullable();
            $table->string('risposte')->nullable();
            // $table->string('risposta1');
            // $table->string('risposta2');
            // $table->string('risposta3');
            // $table->string('risposta4');
            // $table->string('risposta5');
            // $table->string('risposta6');
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
        Schema::dropIfExists('answers');
    }
}
