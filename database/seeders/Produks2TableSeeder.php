<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Produks2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks2 = [
            ['nama_produk'=>'Vario 170', 'jumlah'=>50, 'merk_id'=> 1],
            ['nama_produk'=>'Beat Street', 'jumlah'=>60, 'merk_id'=> 1],
            ['nama_produk'=>'Beat Pop', 'jumlah'=>55, 'merk_id'=> 1],
            ['nama_produk'=>'Beat Deluxe', 'jumlah'=>70, 'merk_id'=> 1],
            ['nama_produk'=>'Satria FU', 'jumlah'=>40, 'merk_id'=> 2],
            ['nama_produk'=>'Ninja R', 'jumlah'=>20, 'merk_id'=> 3],
        ];
        // memasukan data ke database
        DB::table('produk2s')->insert($produks2);

    }
}
