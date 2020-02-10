<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_costings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('job_status_id');
            $table->unsignedBigInteger('vat_type_id')->nullable();
            $table->double('rate')->nullable();
            $table->string('description')->nullable();

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
        Schema::dropIfExists('service_costings');
    }
}
