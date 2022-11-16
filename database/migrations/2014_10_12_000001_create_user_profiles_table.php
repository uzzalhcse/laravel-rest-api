<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('company_name')->nullable();
            $table->string('company_size')->nullable();
            $table->string('company_info')->nullable();
            $table->string('industry')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('no_of_employee')->nullable();
            $table->integer('avg_call_receive_day')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('annual_budget')->nullable();
            $table->string('mobile_service_provider')->nullable();
            $table->string('phone_model')->nullable();
            $table->string('personality')->nullable();
            $table->string('no_of_handset')->nullable();
            $table->string('payment_period')->nullable();
            $table->string('ad_line_interest')->nullable();
            $table->string('intend_countries')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
};
