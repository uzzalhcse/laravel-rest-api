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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('type')->default('user');
            $table->string('avatar')->nullable();
            $table->string('occupation')->nullable();
            $table->string('job_title')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->text('address');
            $table->foreignId('country_id')->default(1)->constrained('countries');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('device_key')->nullable();
            $table->foreignId('status_id')->default(1)->constrained('statuses');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
