//sebagai contah untuk index obsi ke-2

<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk</title>
</head>
<body>

<h1>Daftar Produk</h1>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Harga</th>
</tr>

@foreach($produk as $index => $item)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $item['nama'] }}</td>
    <td>Rp {{ number_format($item['harga'],0,',','.') }}</td>
</tr>
@endforeach

</table>

</body>
</html>