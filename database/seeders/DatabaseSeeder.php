<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create departments
        $departments = ['HR', 'Finance', 'IT', 'Operations'];
        foreach ($departments as $dept) {
            Department::create(['name' => $dept]);
        }

        // Create users (employees and supervisors)
        User::factory()->count(20)->create();

        // Make some users supervisors
        User::whereIn('id', [2, 5, 8, 11])->update(['is_supervisor' => true]);

        // Create some clearance requests
        ClearanceRequest::factory()->count(30)->create();
    }
}
