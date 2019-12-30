<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("type");
            $table->string("status")->default("UNCONFIRMED");
            $table->timestamp("due_date")->nullable();
            $table->unsignedBigInteger("supplier_id");
            $table->unsignedBigInteger("user_id");
            $table->foreign("supplier_id")->references("id")->on("suppliers");
            $table->foreign("user_id")->references("id")->on("users");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
