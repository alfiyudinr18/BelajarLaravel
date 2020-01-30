<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center>
    @foreach($tabungan as $value)
        Nis : {{ $value->nis }}<br>
        Nama : {{ $value->nama }}<br>
        Kelas : {{ $value->kelas }}<br>
        Jumlah : {{ $value->jml }}
        <hr>
    @endforeach
</body>
</html>