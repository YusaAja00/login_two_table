<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into masyarakats (nama, username, password) values 
        ('yusa', 'yusa@gmail.com', '".bcrypt('12345')."'),
        ('eka', 'eka@gmail.com', '".bcrypt('12345')."')
        ");
    }
}
