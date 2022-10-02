<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('department');
            $table->string('passing_year');
            $table->string('tshirt_size');
            $table->string('home_district');
            $table->string('dropping_point');
            $table->string('account_transaction_number');
            $table->string('payment_type');
            $table->string('guest_money')->nullable();
            $table->string('driver')->nullable();
            $table->string('payable_amount');                        
            $table->string('invitation_code')->default('0');
            $table->tinyInteger('approval_status')->default('0');                   
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
        Schema::dropIfExists('registrations');
    }
}
