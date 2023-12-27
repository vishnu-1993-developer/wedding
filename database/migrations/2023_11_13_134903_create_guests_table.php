<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address")->nullable();
            $table->unsignedBigInteger('address_city_id');
            $table->unsignedBigInteger('caste_id');
            $table->unsignedBigInteger('reference_id');
            $table->foreign('address_city_id')->references('id')->on('address_cities');
            $table->foreign('caste_id')->references('id')->on('castes');
            $table->foreign('reference_id')->references('id')->on('references');  
            $table->boolean('active');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
