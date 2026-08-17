<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->json('hero')->nullable();
            $table->json('overview')->nullable();
            $table->json('benefits_header')->nullable();
            $table->json('benefits')->nullable();
            $table->json('process_header')->nullable();
            $table->json('process')->nullable();
            $table->json('pricing_header')->nullable();
            $table->json('pricing')->nullable();
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
        Schema::dropIfExists('services');
    }
}
