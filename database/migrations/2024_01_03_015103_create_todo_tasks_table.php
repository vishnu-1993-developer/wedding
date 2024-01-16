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
        Schema::create('todo_tasks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description")->nullable();
            $table->unsignedBigInteger("assigned_to")->nullable();
            $table->date("assigned_date");
            $table->date("due_date")->nullable();
            $table->enum("status",["ready","in_progress","pending","overdue","completed","cancelled"]);
            $table->enum("priority",["high","low","medium"]);
            $table->foreign("assigned_to")->references("id")->on("references");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_tasks');
    }
};
