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
            $table->morphs("purchasable");
            $table->unsignedBigInteger("part_id");
            $table->bigInteger("quantity")->default(0);
            $table->bigInteger("delivered")->default(0);
            $table->double("price")->nullable();
            $table->timestamps();

            $table->foreign("part_id")->references("id")->on("parts");

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
