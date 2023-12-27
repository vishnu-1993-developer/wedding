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
        Schema::table('shaadi_expenses', function (Blueprint $table) {
            $table->unsignedBigInteger('expense_type_id')->nullable()  ;
            $table->foreign('expense_type_id')->references('id')->on('expense_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shaadi_expenses', function (Blueprint $table) {
            //
        });
    }
};
