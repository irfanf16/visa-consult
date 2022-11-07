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
            $table->string('name')->nullable();

            // EMAIL
            $table->string('email')->nullable();
            $table->boolean('is_email_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_confirmation_code')->nullable();

            // MOBILE-NUMBER
            $table->string('country_code',5)->nullable();
            $table->string('mobile_no',15)->nullable();
            $table->boolean('is_mobile_verified')->default(false);
            $table->string('mobile_verified_at')->nullable();

            $table->string('profile_image')->nullable();

            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();

            $table->integer('likes')->default(0);
            $table->integer('followers')->default(0);
            $table->integer('following')->default(0);

            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);

            $table->string('password');
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
