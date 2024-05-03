<?php 
require_once "koneksi.php";

// Periksa apakah data dari form telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO admin_akun (username, password, email, full_name, phone_number) VALUES ('$username', '$password', '$email', '$full_name', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>