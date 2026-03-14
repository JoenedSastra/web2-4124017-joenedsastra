<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>

<h1>Detail Produk</h1>

<p>ID Produk: {{ $id }}</p>
<p>Nama Produk: {{ $nama }}</p>
<p>Harga: Rp {{ number_format($harga,0,',','.') }}</p>

<a href="/katalog">Kembali ke katalog</a>

</body>
</html>