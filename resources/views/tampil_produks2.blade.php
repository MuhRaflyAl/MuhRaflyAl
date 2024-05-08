<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = 1>
            <tr>
                <td>ID</td>
                <td>NAMA_PRODUK</td>
                <td>JUMLAH</td>
                <td>MERK_ID</td>
            </tr>
            @foreach ($produks as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_produk}}</td>
                <td>{{$data->jumlah}}</td>
                <td>{{$data->merk_id}}</td>
            </tr>
            @endforeach
        </table>

</body>
</html>