<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdpowiedzisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odpowiedzis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->integer("user_id");
            $table->integer("ankieta_id");

            $table->string("odp1");
            $table->string("odp2");
            $table->string("odp3");
            $table->string("odp4");
            $table->string("odp5");
            $table->string("odp6");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odpowiedzis');
    }
}
