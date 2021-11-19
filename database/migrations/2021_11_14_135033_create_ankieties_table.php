<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnkietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ankieties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nazwa_ankiety");

            $table->string("pytanie1");
            $table->string("pytanie2");
            $table->string("pytanie3");
            $table->string("pytanie4");
            $table->string("pytanie5");
            $table->string("pytanie6");

            $table->string("p1_odp");
            $table->string("p2_odp");
            $table->string("p3_odp");
            $table->string("p4_odp");
            $table->string("p5_odp");
            $table->string("p6_odp");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ankieties');
    }
}
