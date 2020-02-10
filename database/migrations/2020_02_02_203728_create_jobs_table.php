<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('status')->default('TODO');

            // Request Info
            $table->unsignedBigInteger('job_type_id');
            $table->unsignedBigInteger('intake_id')->nullable();
            $table->unsignedBigInteger('payment_type_id')->nullable();
            $table->boolean('warranty')->nullable();
            $table->boolean('repeat_repair')->nullable();
            $table->boolean('internal_job')->nullable();
            $table->string('est_time')->nullable();
            $table->string('request_details')->nullable();

            // Appointment
            $table->timestamp('appt_at')->nullable();
            $table->unsignedBigInteger('appt_by')->nullable();
            $table->string('resch')->nullable();
            $table->boolean('appt_confirmed')->nullable();

            // Delivery
            $table->timestamp('received_at')->nullable();
            $table->double('odometer_in')->nullable();
            $table->unsignedBigInteger('received_by')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->double('odometer_out')->nullable();
            $table->unsignedBigInteger('delivered_by')->nullable();

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
        Schema::dropIfExists('jobs');
    }
}
