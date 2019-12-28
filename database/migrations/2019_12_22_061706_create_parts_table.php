<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("number");
            $table->string("name");
            $table->double("retail_price");
            $table->double("cost_price");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("manufacturer_id");
            $table->unsignedBigInteger("model_id");
            $table->unsignedBigInteger("franchise_id")->nullable();
            $table->unsignedBigInteger("supplier_id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("manufacturer_id")->references("id")->on("part_manufacturers");
            $table->foreign("model_id")->references("id")->on("part_models");
            $table->foreign("franchise_id")->references("id")->on("part_franchises");
            $table->foreign("supplier_id")->references("id")->on("suppliers");
            $table->bigInteger("quantity");
            $table->bigInteger("reorder")->nullable();
            $table->string("description")->nullable();
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
        Schema::dropIfExists('parts');
    }
}
