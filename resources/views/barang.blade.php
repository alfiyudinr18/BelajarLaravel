<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Daftar Barang</h1></center>
    @foreach($barang as $data)
    Nama Barang : {{$data->nama_barang}}<br>
    kode Barang : {{$data->kode_barang}}<br>
    Jumlah Barang : {{$data->jumlah_barang}}<br>
    Harga Barang : {{$data->harga_barang}}<br>
    Jenis Barang : {{$data->jenis_barang}}<br>
    Merk Barang : {{$data->merk_barang}}<br>
    Deskripsi Barang : {{$data->deskripsi_barang}}<hr>
    @endforeach
    
</body>
</html>