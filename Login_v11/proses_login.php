<?php
session_start();

// Menghubungkan ke file koneksi
require_once "koneksi.php";

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan query untuk mencari user dengan username yang cocok
$query = "SELECT * FROM admin_akun WHERE username='$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $admin_data = mysqli_fetch_assoc($result);

    // Memeriksa apakah user ditemukan dan password cocok
    if ($admin_data && $password == $admin_data['password']) {
        // Jika cocok, simpan ID admin ke dalam sesi
        $_SESSION['admin_id'] = $admin_data['id'];
        // Redirect ke halaman admin
        header("Location: admin.php");
        exit();
    } else {
        // Jika tidak cocok, tampilkan pesan error
        echo "Login gagal. Periksa kembali username dan password.";
    }
} else {
    echo "Query error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
