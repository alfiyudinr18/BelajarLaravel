<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        return view('tampil-barang', compact('barang'));
    }
}
