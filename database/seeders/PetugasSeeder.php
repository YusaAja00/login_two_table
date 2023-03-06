<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into petugas (nama, username, password) values 
        ('admin', 'admin@gmail.com', '".bcrypt('12345')."'),
        ('admin1', 'admin1@gmail.com', '".bcrypt('12345')."')
        ");
    }
}
