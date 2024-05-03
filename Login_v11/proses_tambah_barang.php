<?php
// Menghubungkan ke file koneksi
require_once "koneksi.php";

// Ambil data dari form
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Simpan gambar ke folder 'uploads' dan ambil nama filenya
$gambar = $_FILES['gambar']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($gambar);
move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

// Query untuk menyimpan data ke database
$sql = "INSERT INTO Products (nama, deskripsi, harga, stok, gambar) 
        VALUES ('$nama', '$deskripsi', '$harga', '$stok', '$gambar')";

if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
