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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();

            $table->string('seo_description')->nullable();
            $table->string('seo_keywords',500)->nullable();
            $table->string('seo_abstraction',100)->nullable();

            $table->integer('subscribers')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);

            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);

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
        Schema::dropIfExists('categories');
    }
};
