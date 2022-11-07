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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');

            $table->string('slug');
            $table->string('title');
            $table->string('app_icon')->nullable();
            $table->string('splash_screen')->nullable();
            $table->string('android_link')->nullable();
            $table->string('ios_link')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('detailed_description')->nullable();
            $table->longText('seo_description')->nullable();
            $table->longText('seo_abstraction')->nullable();
            $table->longText('seo_keywords')->nullable();
            $table->longText('policies')->nullable();
            $table->string('clicks')->default(0);
            $table->string('downloads')->default(0);
            $table->dateTime('release_date')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
};
