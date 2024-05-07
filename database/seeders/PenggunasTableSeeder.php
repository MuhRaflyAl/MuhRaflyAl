<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Rafly'],
            ['nama'=>'Hardy'],
            ['nama'=>'Marshall'],
            ['nama'=>'Rizki'],
            ['nama'=>'Zidan'],
        ];
        //memasukan data ke dalam database
        DB::table('penggunas')->insert($penggunas);

    }
}
