<?php

namespace App\Http\Controllers;
use App\Tabungan;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){
        $data = "Maman";
        $data2 = "<h1>Selow</h1>";
        return view('latihan', compact('data','data2'));
    }
    public function pass1(){
        $siswa = [
            ['Nama'=>'Casmat','Kelas'=>'XI RPL 1'],
            ['Nama'=>'Tismat','Kelas'=>'XI RPL 2']
        ];
        return view('latihan1', [
            'data'=>$siswa
        ]);
    }
    public function pass2(){
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2', compact('tabungan'));
    }
}
