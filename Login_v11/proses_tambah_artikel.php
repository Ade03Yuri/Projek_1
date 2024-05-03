<?php
// Menghubungkan ke file koneksi
require_once "koneksi.php";

// Ambil data yang dikirimkan melalui form
$judul = $_POST['judul'];
$konten = $_POST['konten'];
$tanggal_publikasi = $_POST['tanggal_publikasi'];

// Query untuk menyimpan data artikel ke dalam database
$sql = "INSERT INTO Articles (judul, konten, tanggal_publikasi) VALUES ('$judul', '$konten', '$tanggal_publikasi')";

if ($conn->query($sql) === TRUE) {
    echo "Artikel berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
