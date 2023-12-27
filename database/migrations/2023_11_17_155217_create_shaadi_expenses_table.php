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
        Schema::create('shaadi_expenses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("total");
            $table->integer("advance")->nullable();
            $table->integer("dues")->nullable();
            $table->string("paid_person")->nullable();
            $table->string("contact_no")->nullable();
            $table->boolean("fully_paid")->default(0);
            $table->text("comment")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shaadi_expenses');
    }
};
