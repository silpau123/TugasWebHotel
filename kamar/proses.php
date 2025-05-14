<?php
include "koneksi.php";

//form kamar
$idkamar= $_POST['idkamar'];
$nokamar= $_POST['nomorkamar'];
$type= $_POST['typekamar'];
$lantai= $_POST['lantai'];
$fasilitas= $_POST['fasilitas'];

//data di kirim ke database/tabel
$querykamar = "INSERT INTO kamar (id_kamar, no_kamar, type, lantai, fasilitas) VALUES ('$idkamar','$nokamar','$type','$lantai','$fasilitas')";

//menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querykamar)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Eror: " . $querykamar . "<br>" . mysqli_eror($conn);
}

//menutup koneksi
mysqli_close($conn);

?>