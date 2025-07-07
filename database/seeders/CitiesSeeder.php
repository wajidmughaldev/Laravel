<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['cid' => 1, 'name' => 'Lahore', 'state' => 'Punjab', 'country' => 'Pakistan', 'zip_code' => '54000', 'created_at' => now(), 'updated_at' => now()],
            ['cid' => 2, 'name' => 'Karachi', 'state' => 'Sindh', 'country' => 'Pakistan', 'zip_code' => '74000', 'created_at' => now(), 'updated_at' => now()],
            ['cid' => 3, 'name' => 'Islamabad', 'state' => 'Capital Territory', 'country' => 'Pakistan', 'zip_code' => '44000', 'created_at' => now(), 'updated_at' => now()],
            ['cid' => 4, 'name' => 'Peshawar', 'state' => 'KPK', 'country' => 'Pakistan', 'zip_code' => '25000', 'created_at' => now(), 'updated_at' => now()],
            ['cid' => 5, 'name' => 'Quetta', 'state' => 'Balochistan', 'country' => 'Pakistan', 'zip_code' => '87300', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
