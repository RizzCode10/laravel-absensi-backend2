<?php

namespace Database\Seeders;

use App\Http\Controllers\AttendanceController;
use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Data dummy for attendance auto generate
        Attendance::factory(10)->create();

    }
}
