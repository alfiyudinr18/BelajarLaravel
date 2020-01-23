<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
            ['nama'=>'Angsam', 'nis'=>'0672368932', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Rancamnyar',
             'tgl_lahir'=>'2002-12-27', 'umur'=>17],
            ['nama'=>'Adit', 'nis'=>'067823489327', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bojong',
             'tgl_lahir'=>'2003-02-07', 'umur'=>16],
            ['nama'=>'Lukman', 'nis'=>'7397954787', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bojong',
             'tgl_lahir'=>'2003-06-15', 'umur'=>16],
            ['nama'=>'Jay', 'nis'=>'72847583', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Kamboja',
             'tgl_lahir'=>'2003-05-15', 'umur'=>16],
            ['nama'=>'Roms', 'nis'=>'76284572', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Situtarate',
             'tgl_lahir'=>'2002-12-30', 'umur'=>17]
        ];
        // masukkan data ke database
        DB::table('students')->insert($data);
    }
}
