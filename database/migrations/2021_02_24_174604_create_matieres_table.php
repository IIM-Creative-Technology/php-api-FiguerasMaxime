<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('date_start');
            $table->integer('date_end');

            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('prof_id');

            $table->foreign('classe_id')
                ->references('id')
                ->on('classes');

            $table->foreign('prof_id')
                ->references('id')
                ->on('profs');

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
        Schema::dropIfExists('matieres');
    }
}
