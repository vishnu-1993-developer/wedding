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
            $table->string("expense_added_by")->default("Shailbala");
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
