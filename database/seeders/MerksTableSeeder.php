<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merk'=>'Honda'],
            ['nama_merk'=>'Suzuki'],
            ['nama_merk'=>'Kawasaki'],
        ];
        //memasukan data ke dalam database
        DB::table('merks')->insert($merks);
    }
}
