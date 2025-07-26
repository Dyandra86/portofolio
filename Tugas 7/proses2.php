<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan sanitasi data dari form
    $nama      = htmlspecialchars($_POST['nama']);
    $harga     = floatval($_POST['harga']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    // Validasi harga
    if ($harga <= 0) {
        echo "Harga harus lebih dari 0.";
        exit;
    }

    // Tampilkan hasil
    echo "<h2>Data Produk:</h2>";
    echo "Nama Produk: " . $nama . "<br>";
    echo "Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>";
    echo "Deskripsi: " . nl2br($deskripsi) . "<br>";
} else {
    echo "Akses tidak sah.";
}
?>
