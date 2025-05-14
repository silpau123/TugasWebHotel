<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Cinta Kasih</title>
    <link rel="stylesheet" href="pembayaran.css">
</head>
<body>
    <form action="prosespembayaran.php" method="post">
        <label for="id_pembayaran">ID Kamar : </label>
        <input type="text" id="id_pembayaran" name="id_pembayaran" placeholder="Masukan ID Pembayaran"><br>
        <label for="id_kamar">ID Kamar : </label>
        <input type="text" id="id_kamar" name="id_kamar" placeholder="Masukan ID kamar"><br>
        <label for="harga">Harga : </label>
        <input type="text" id="harga" name="harga" placeholder="Masukan Harga Pembayaran"><br>
        <label for="total_harga">Total Harga : </label>
        <input type="text" id="total_harga" name="total_harga" placeholder="Masukan Total Harga Pembayaran"><br>
        <label for="cek_in">Tanggal cek in:</label>
        <input type="date" id="cek_in" name="cek_in" required><br>
        <label for="cek_out">Tanggal Check-out:</label>
        <input type="date" id="cek_out" name="cek_out" required><br><br>
        <label for="no_kamar">No Kamar : </label>
        <input type="text" id="no_kamar" name="no_kamar" placeholder="Masukan No Kamar"><br>

            <button type="submit">Pesan</button>
</body>
</html>