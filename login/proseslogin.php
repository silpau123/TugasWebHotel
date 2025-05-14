<?php
include "koneksilogin.php";  // Pastikan koneksi sudah benar

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Menyimpan data ke dalam tabel login
$queryuser = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

// Menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $queryuser)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $queryuser . "<br>" . mysqli_error($conn);  // Perbaiki nama fungsi mysqli_error
}

// Menutup koneksi
mysqli_close($conn);
?>
