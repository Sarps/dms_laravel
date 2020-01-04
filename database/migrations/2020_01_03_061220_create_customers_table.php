<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name');
            $table->unsignedBigInteger('contact_person');
            $table->string('address');
            $table->string('mobile');
            $table->string('telephone');
            $table->string('account_type');
            $table->double('credit_limit');
            $table->string('tax_type');
            $table->double('tax_perc');
            $table->string('status');
            $table->string('comments');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('contact_person')->references('id')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
