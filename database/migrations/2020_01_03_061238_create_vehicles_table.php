<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("staff_id");
            $table->string('reg_no');
            $table->unsignedBigInteger("part_model_id");
            $table->unsignedBigInteger('part_franchise_id');
            $table->string('chasis_no');
            $table->string('origin');
            $table->string('engine_no');
            $table->string('colour');
            $table->string('odometer_unit');
            $table->string('note');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
