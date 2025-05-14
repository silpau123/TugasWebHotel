<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengunjung</title>
    <link rel="stylesheet" href="pengunjung.css">

</head>
<body>
    <h2>Form Data Pengunjung</h2>fgf
    <form action="proses_pengunjung.php" method="post">
        <label for="id_pengunjung">ID Pengunjung:</label><br>
        <input type="text" id="id_pengunjung" name="id_pengunjung" required><br>

        <label for="nama_pengunjung">Nama Pengunjung:</label><br>
        <input type="text" id="nama_pengunjung" name="nama_pengunjung" required><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br>

        <label for="no_telp">No. Telepon:</label><br>
        <input type="text" id="no_telp" name="no_telp" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
