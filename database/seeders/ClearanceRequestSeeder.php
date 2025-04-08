<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClearanceRequest;
use App\Models\User;
use App\Models\Department;

class ClearanceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get a supervisor (must exist)
        $supervisor = User::where('is_supervisor', true)->first();

        // Get a regular user
        $user = User::where('is_supervisor', false)->first();

        // Get a department
        $department = Department::first();

        ClearanceRequest::create([
            'user_id' => $user->id,
            'supervisor_id' => $supervisor->id,
            'department_id' => $department->id,
            'date_submitted' => now()->format('Y-m-d'),
        ]);
    }
}
