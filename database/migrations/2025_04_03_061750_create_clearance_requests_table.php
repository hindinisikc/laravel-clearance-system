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
        Schema::create('clearance_requests', function (Blueprint $table) {

            // Primary key (auto-incrementing ID)
            $table->id();

            // Foreign key to the users table (employee)
            // This assumes you have a users table with an id column
            // and that the employee_id column in this table references it
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('supervisor_id')->nullable()->constrained('users');
            $table->foreignId('department_id')->constrained('departments');

            // Date Fields
            $table->date('date_submitted');

            // Time stamps
            $table->timestamps();

            // Optional Indexes for better performance
            $table->index('user_id');
            $table->index('supervisor_id');
            $table->index('department_id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clearance_requests');
    }
};
