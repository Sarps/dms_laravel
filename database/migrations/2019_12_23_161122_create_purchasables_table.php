<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("part_id");
            $table->morphs("purchasable");
            $table->foreign("part_id")->references("id")->on("parts");
            $table->bigInteger("quantity")->nullable();
            $table->double("price")->nullable();
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
        Schema::dropIfExists('order_parts');
    }
}
