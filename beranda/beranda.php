<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Cinta Kasih</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .btn-pesan-sekarang {
            background-color: #f44336; /* Warna merah terang */
            color: white;
            padding: 12px 20px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn-pesan-sekarang:hover {
            background-color: #e53935; /* Warna merah gelap ketika hover */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Hotel Cinta Kasih</h1>
            <p>Tempat di mana cinta dan kenyamanan bertemu!</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="../pengunjung/pengunjung.php">Pengunjung</a></li>
                <li><a href="../kamar/kamar.php">Kamar</a></li>
                <li><a href="../pembayaran/pembayaran.php">Pembayaran</a></li>
                <li><a href="../registrasi/registrasi.php">Registrasi</a></li>
                <li><a href="../login/login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Selamat Datang di Hotel Cinta Kasih</h2>
        <p>Tempat terbaik untuk menginap, beristirahat, dan bersenang-senang!</p>
        <a href="#services" class="btn">Lihat Layanan Kami</a>
        <a href="../pengunjung/pengunjung.php" class="btn-pesan-sekarang">Pesan Sekarang</a>
    </section>

    <section id="services" class="services">
        <h2>Layanan Kami</h2>
        <div class="service-item">
            <img src="kamar hotel.jpg" alt="Kamar Hotel">
            <h3>Kamar Super Nyaman</h3>
            <p>Rasakan kenyamanan tidur yang luar biasa, seperti tidur di awan!</p>
        </div>
        <div class="service-item">
            <img src="restaurant.jpg" alt="Restoran">
            <h3>Restoran Lezat</h3>
            <p>Nikmati hidangan luar biasa yang bisa bikin kamu tersenyum lebar!</p>
        </div>
        <div class="service-item">
            <img src="kolamRenang.jfif" alt="Kolam Renang">
            <h3>Kolam Renang Seru</h3>
            <p>Berenang dan tertawa bersama teman-teman atau keluarga di kolam renang kami!</p>
        </div>
    </section>

    <section id="kamar" class="kamar">
        <h2>Kamar yang Bikin Betah</h2>
        <div class="kamar-images">
            <div class="kamar-item">
                <img src="singgle room.jfif" alt="Single Room">
                <h3>Single Room</h3>
                <p>Untuk kamu yang suka ketenangan!</p>
            </div>
            <div class="kamar-item">
                <img src="double room.jfif" alt="Double Room">
                <h3>Double Room</h3>
                <p>Teman tidur terbaik untuk dua orang yang penuh cinta!</p>
            </div>
            <div class="kamar-item">
                <img src="deluxe room.jfif" alt="Deluxe Room">
                <h3>Deluxe Room</h3>
                <p>Tempat tidur terbaik untuk memanjakan diri sepuasnya!</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Hotel Cinta Kasih | Semua Hak Dilindungi | Kami cinta kamu!</p>
    </footer>
</body>
</html>
/*/