<?php
include "koneksipengunjung.php";

//form kamar
$id_pengunjung = $_POST['id_pengunjung'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


//data di kirim ke database/tabel
$querypengunjung = "INSERT INTO pengunjung (id_pengunjung, nama_pengunjung, alamat, no_telp) VALUES ('$id_pengunjung', '$nama_pengunjung', '$alamat', '$no_telp')";
//menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querypengunjung)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Eror: " . $querypengunjung . "<br>" . mysqli_eror($conn);
}

//menutup koneksi
mysqli_close($conn);

?>
