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
        Schema::create('apparel_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("age_group",["Infant","Toddler","Child","Teen","Adult","Middle age adult","Senior adult"]);
            $table->integer("min_budget");
            $table->integer("max_budget");
            $table->enum("gender",["male","female"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apparel_types');
    }
};
