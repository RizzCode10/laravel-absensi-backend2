<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Faisha',
            'email' => 'faisha@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        Company::create([
            'name' => 'PT. Nexgen',
            'email' => 'izza@gmail.com',
            'address' => 'JL. Harapan 1 No. 71, Kota Saranjana',
            'latitude' => '-11.000000',
            'longitude' => '-11.000000',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '16:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
        ]);

        $this->call([
            PermissionSeeder::class,
        ]);
    }
}
