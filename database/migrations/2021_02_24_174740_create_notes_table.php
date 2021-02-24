<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('result');

            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('matiere_id');

            $table->foreign('student_id')
                ->references('id')
                ->on('students');

            $table->foreign('matiere_id')
                ->references('id')
                ->on('matieres');

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
        Schema::dropIfExists('notes');
    }
}
