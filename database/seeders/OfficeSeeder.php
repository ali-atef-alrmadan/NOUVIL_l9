<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'admin_id' => 1,
            'location_id' => 1,
            'name' => 'Nouvil',
            'email' => 'ContactNouvil@Nouvil.com',
            'phone_number' => '0789456123',
            'description' => 'marka',
        ]);
    }
}
