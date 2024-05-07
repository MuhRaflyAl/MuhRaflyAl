<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon'=>'0874123414','pengguna_id'=> 1],
            ['nomor_telepon'=>'0859422977','pengguna_id'=> 2],
            ['nomor_telepon'=>'0865573211','pengguna_id'=> 3],
            ['nomor_telepon'=>'0821924735','pengguna_id'=> 4],
            ['nomor_telepon'=>'0813210321','pengguna_id'=> 5],
        ];
        //memasukan data kedalam database
        DB::table('telepons')->insert($telepons);
    }
}
