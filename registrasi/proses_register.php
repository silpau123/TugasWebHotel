<?php
include "koneksipembayaran.php"; // Pastikan ini file koneksi database kamu

// Ambil data dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];

// Enkripsi password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query simpan data ke database
$query = "INSERT INTO registrasi (id, username, password, level) VALUES ('$id', '$username', '$hashed_password', '$level')";

if (mysqli_query($conn, $query)) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
