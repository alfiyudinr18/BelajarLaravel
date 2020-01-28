<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function halo(){
        return  'Hallo!!';
    }

    public function pertambahan($a=null, $b=null){
        if(!$a){
            echo 'Masukan Bilangan pertama dan kedua';
        }
        elseif(!$b){
            echo 'Bilangan Pertama : ' . $a . '<br>Masukan Bilangan kedua ';
        }
        elseif(isset($a) && isset($b)){
            $hasil = $a+$b;
            return "Hasil dari $a + $b = $hasil";
        }
        
    }

    public function pengurangan($a=null, $b=null){
        if(!$a){
            echo 'Masukan Bilangan pertama dan kedua';
        }
        elseif(!$b){
            echo 'Bilangan Pertama : ' . $a . '<br>Masukan Bilangan kedua ';
        }
        elseif(isset($a) && isset($b)){
            $hasil = $a-$b;
            return "Hasil dari $a - $b = $hasil";
        }
    }

    public function perkalian($a=null, $b=null){
        if(!$a){
            echo 'Masukan Bilangan pertama dan kedua';
        }
        elseif(!$b){
            echo 'Bilangan Pertama : ' . $a . '<br>Masukan Bilangan kedua ';
        }
        elseif(isset($a) && isset($b)){
            $hasil = $a*$b;
            return "Hasil dari $a x $b = $hasil";
        }
    }

    public function pembagian($a=null, $b=null){
        if(!$a){
            echo 'Masukan Bilangan pertama dan kedua';
        }
        elseif(!$b){
            echo 'Bilangan Pertama : ' . $a . '<br>Masukan Bilangan kedua ';
        }
        elseif(isset($a) && isset($b)){
            $hasil = $a/$b;
            return "Hasil dari $a : $b = $hasil";
        }
    }

    public function loop(){
        $data = [
            ['Nama'=>'Hari','Kelas'=>'RPL 1','Uang Jajan'=>50000],
            ['Nama'=>'Memet','Kelas'=>'RPL 2','Uang Jajan'=>5000],
            ['Nama'=>'Restu','Kelas'=>'RPL 3','Uang Jajan'=>25000],
            ['Nama'=>'David','Kelas'=>'RPL 4','Uang Jajan'=>10000],
            ['Nama'=>'Kabur','Kelas'=>'RPL 5','Uang Jajan'=>30000]
        ];
        foreach($data as $val => $key){
            if($key['Uang Jajan']>=50000){
                $tabungan = "25%";
                $tabung = $key['Uang Jajan']*25/100;
                $sisa = $key['Uang Jajan'] - $tabung;
            }
            elseif($key['Uang Jajan']>=25000){
                $tabungan = "15%";
                $tabung = $key['Uang Jajan']*15/100;
                $sisa = $key['Uang Jajan'] - $tabung;
            }
            elseif($key['Uang Jajan']>=10000){
                $tabungan = "10%";
                $tabung = $key['Uang Jajan']*10/100;
                $sisa = $key['Uang Jajan'] - $tabung;
            }
            else{
                $tabungan = "0%";
                $tabung = $key['Uang Jajan']*0;
                $sisa = $key['Uang Jajan'];
            }
            echo "Nama : " . $key['Nama'] .
            "<br>Kelas : " . $key['Kelas'] .
            "<br>Uang Jajan : " . $key['Uang Jajan'] .
            "<br>Tabungan : ". $tabungan . ' => ' . $tabung . 
            "<br>Sisa Uang : ". $sisa .'<hr>';
        }
    }

    public function loop2(){
        $data = [
            ['Nama'=>'Angsam','Agama'=>'Hindhu','Alamat'=>'Rancamanyar','JK'=>'Laki-laki','Jabatan'=>'Manager','Jamkerja'=>200],
            ['Nama'=>'Jay Pro','Agama'=>'Islam','Alamat'=>'Bojong','JK'=>'Laki-laki','Jabatan'=>'Staff','Jamkerja'=>250],
            ['Nama'=>'Restu','Agama'=>'Islam','Alamat'=>'Jakarta','JK'=>'Perempuan','Jabatan'=>'Sekretaris','Jamkerja'=>150],
            ['Nama'=>'David','Agama'=>'Kristen','Alamat'=>'Medan','JK'=>'Laki-laki','Jabatan'=>'Staff','Jamkerja'=>300],
            ['Nama'=>'Kabur','Agama'=>'Budha','Alamat'=>'Bogor','JK'=>'Perempuan','Jabatan'=>'Manager','Jamkerja'=>100]
        ];
        foreach($data as $val => $key){
            if($key['Jabatan'] == 'Manager'){
                $gaji = 5000000;
                if($key['Jamkerja']>=250){
                    $jamker = $gaji*10/100;
                }
                elseif($key['Jamkerja']>=200){
                    $jamker = $gaji*5/100;
                }
                else{
                    $jamker = 0;
                }
                
            }
            elseif($key['Jabatan'] == 'Sekretaris'){
                $gaji = 3500000;
                if($key['Jamkerja']>=250){
                    $jamker = $gaji*10/100;
                }
                elseif($key['Jamkerja']>=200){
                    $jamker = $gaji*5/100;
                }
                else{
                    $jamker = 0;
                }
                
            }
            elseif($key['Jabatan'] == 'Staff'){
                $gaji = 2500000;
                if($key['Jamkerja']>=250){
                    $jamker = $gaji*10/100;
                }
                elseif($key['Jamkerja']>=200){
                    $jamker = $gaji*5/100;
                }
                else{
                    $jamker = 0;
                }
                
            }
            $gajibersih = $gaji+$jamker;
            $potongangaji = $gajibersih*2.5/100;
            $gajitotal = $gajibersih - $potongangaji;
            echo "Nama : " . $key['Nama'] .
            "<br>Agama : " . $key['Agama'] .
            "<br>Alamat : " . $key['Alamat'] .
            "<br>Jenis Kelamin : " . $key['JK'] .
            "<br>Jabatan : " . $key['Jabatan'] .
            "<br>Gaji Total : ". $gajitotal .'<hr>';
        }
    }
}
