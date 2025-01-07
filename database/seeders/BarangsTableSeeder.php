<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'mascara', 'merk'=>'wardah', 'harga'=>80000],
            ['nama_barang'=>'cushion', 'merk'=>'wardah', 'harga'=>140000],
            ['nama_barang'=>'micellar water', 'merk'=>'wardah', 'harga'=>50000],
            ['nama_barang'=>'lip glasting', 'merk'=>'wardah', 'harga'=>88000],
            ['nama_barang'=>'moisturizer', 'merk'=>'wardah', 'harga'=>90000]
        ];
         // masukkan data ke database
         DB::table('barangs')->insert($barangs);
    }
}
