<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->integer('survey_id')->onDelete('cascade');
            // $table->integer('user_id');
            $table->string('titolo');
            $table->string('descrizione')->nullable();
            $table->string('tipo');
            $table->string('opzione')->nullable();
            // $table->string('opzione1')->nullable();
            // $table->string('opzione2')->nullable();
            // $table->string('opzione3')->nullable();
            // $table->string('opzione4')->nullable();
            // $table->string('opzione5')->nullable();
            // $table->string('opzione6')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
