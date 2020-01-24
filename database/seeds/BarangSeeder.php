<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama_barang'=>'Redmi note 5', 'kode_barang'=>'00001', 'jumlah_barang'=>5, 'harga_barang'=>2000000,
             'jenis_barang'=>'Handphone', 'merk_barang'=>'Redmi', 'deskripsi_barang'=>'Mantap'],
            ['nama_barang'=>'JBL T100', 'kode_barang'=>'00002', 'jumlah_barang'=>20, 'harga_barang'=>50000,
             'jenis_barang'=>'Earphone', 'merk_barang'=>'JBL', 'deskripsi_barang'=>'Bagus'],
            ['nama_barang'=>'ROG Phone 2', 'kode_barang'=>'00003', 'jumlah_barang'=>8, 'harga_barang'=>3000000,
             'jenis_barang'=>'Handphone', 'merk_barang'=>'Asus', 'deskripsi_barang'=>'WOW'],
            ['nama_barang'=>'Asus 504', 'kode_barang'=>'00004', 'jumlah_barang'=>9, 'harga_barang'=>2500000,
             'jenis_barang'=>'Laptop', 'merk_barang'=>'Asus', 'deskripsi_barang'=>'Mengguanakan Processor yang lancar'],
            ['nama_barang'=>'Angsam', 'kode_barang'=>'00005', 'jumlah_barang'=>3, 'harga_barang'=>250000,
             'jenis_barang'=>'Baju', 'merk_barang'=>'Angsam', 'deskripsi_barang'=>'Bahan bagus'],
            ['nama_barang'=>'Remax 610d', 'kode_barang'=>'00006', 'jumlah_barang'=>25, 'harga_barang'=>100000,
             'jenis_barang'=>'Earphone', 'merk_barang'=>'Remax', 'deskripsi_barang'=>'Bass mantap'],
            ['nama_barang'=>'Vans OS', 'kode_barang'=>'00007', 'jumlah_barang'=>2, 'harga_barang'=>250000,
             'jenis_barang'=>'Sepatu', 'merk_barang'=>'Vans', 'deskripsi_barang'=>'Bagus'],
            ['nama_barang'=>'Yamaha FG-255', 'kode_barang'=>'00008', 'jumlah_barang'=>8, 'harga_barang'=>3000000,
             'jenis_barang'=>'Gitar', 'merk_barang'=>'Yamaha', 'deskripsi_barang'=>'Suara yang joss'],
            ['nama_barang'=>'Clothing b345', 'kode_barang'=>'00009', 'jumlah_barang'=>9, 'harga_barang'=>75000,
             'jenis_barang'=>'Baju', 'merk_barang'=>'Clothing', 'deskripsi_barang'=>'Mengguanakan bahan yang lembut'],
            ['nama_barang'=>'Swallow', 'kode_barang'=>'00010', 'jumlah_barang'=>45, 'harga_barang'=>25000,
             'jenis_barang'=>'Sendal', 'merk_barang'=>'Swallow', 'deskripsi_barang'=>'Bahan bagus']
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($data);
    }
}
