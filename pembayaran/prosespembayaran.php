<?php
include "koneksipembayaran.php";

//form kamar
$id_pembayaran= $_POST['id_pembayaran'];
$id_kamar= $_POST['id_kamar'];
$harga= $_POST['harga'];
$total_harga= $_POST['total_harga'];
$cek_in= $_POST['cek_in'];
$cek_out= $_POST['cek_out'];
$no_kamar= $_POST['no_kamar'];

//data di kirim ke database/tabel
$querypembayaran = "INSERT INTO pembayaran (id_pembayaran, id_kamar, harga, total_harga, cek_in, cek_out, no_kamar) VALUES ('$id_pembayaran', '$id_kamar', '$harga', '$total_harga', '$cek_in', '$cek_out', '$no_kamar')";

//menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querypembayaran)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Eror: " . $querypembayaran . "<br>" . mysqli_eror($conn);
}

//menutup koneksi
mysqli_close($conn);

?>