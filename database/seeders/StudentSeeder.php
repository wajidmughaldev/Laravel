<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('students')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'Ali Khan',
        //         'email' => 'ali.khan@example.com',
        //         'phone' => '03001234567',
        //         'date_of_birth' => '2000-03-15',
        //         'address' => '123 Street, Lahore',
        //         'city' => 1, // Must exist in cities table
        //         'state' => 'Punjab',
        //         'zip_code' => '54000',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Sara Ahmed',
        //         'email' => 'sara.ahmed@example.com',
        //         'phone' => '03011234567',
        //         'date_of_birth' => '1999-07-21',
        //         'address' => 'Garden Road, Karachi',
        //         'city' => 2,
        //         'state' => 'Sindh',
        //         'zip_code' => '74000',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Usman Tariq',
        //         'email' => 'usman.tariq@example.com',
        //         'phone' => '03021234567',
        //         'date_of_birth' => '1998-04-10',
        //         'address' => 'F-10, Islamabad',
        //         'city' => 3,
        //         'state' => 'Capital Territory',
        //         'zip_code' => '44000',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Hira Yousaf',
        //         'email' => 'hira.yousaf@example.com',
        //         'phone' => '03031234567',
        //         'date_of_birth' => '2001-01-25',
        //         'address' => 'Saddar, Peshawar',
        //         'city' => 4,
        //         'state' => 'KPK',
        //         'zip_code' => '25000',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'Zainab Rafiq',
        //         'email' => 'zainab.rafiq@example.com',
        //         'phone' => '03041234567',
        //         'date_of_birth' => '2002-10-30',
        //         'address' => 'Quetta Cantt',
        //         'city' => 5,
        //         'state' => 'Balochistan',
        //         'zip_code' => '87300',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // adding fake data using fake() method
        for($i=1;$i<=100;$i++) {
            Student::create([
                'id'=> $i,
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->phoneNumber(),
                'date_of_birth' => fake()->date(),
                'address' => fake()->address(),
                'city' => rand(1, 5), // Assuming cities with IDs 1 to 5 exist
                'state' => fake()->state(),
                'zip_code' => fake()->postcode(),
            ]);
        }

    }
}
