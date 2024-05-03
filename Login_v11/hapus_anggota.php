<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_motor");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Jika ID anggota dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data anggota berdasarkan ID
    $query = "DELETE FROM anggota WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah data berhasil dihapus
    if ($result) {
        echo "Data anggota berhasil dihapus.";
        // Arahkan kembali ke halaman inp_anggota.php setelah 2 detik
        header("refresh:2; url=http://localhost/Projek_motor_club/Login_v11/inp_anggota.php");
    } else {
        echo "Gagal menghapus data anggota: " . mysqli_error($koneksi);
    }
} else {
    echo "ID anggota tidak ditemukan.";
}
?>

