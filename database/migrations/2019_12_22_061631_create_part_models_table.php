<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->unsignedBigInteger("manufacturer_id")->nullable();
            $table->foreign("manufacturer_id")->references("id")->on("part_manufacturers");
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
        Schema::dropIfExists('part_models');
    }
}
