<?php
// Menghubungkan ke file koneksi
require_once "koneksi.php";

// Ambil data yang dikirimkan melalui form
$nama = $_POST['nama'];
$tanggal_masuk = $_POST['tanggal_masuk'];

// Proses unggah file gambar
$target_dir = "Projek_motor_club/uploads/";

// Membuat direktori uploads jika belum ada
if (!is_dir($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        die("Failed to create directory");
    }
}

$target_file = $target_dir . basename($_FILES["gambar"]["name"]); // Path file yang akan diunggah
$uploadOk = 1; // Variable penanda apakah proses unggah berhasil atau tidak
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Jenis file gambar

// Cek apakah file gambar valid
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }
}

// Cek apakah file sudah ada
if (file_exists($target_file)) {
    echo "Maaf, file sudah ada.";
    $uploadOk = 0;
}

// Batasi ukuran file
if ($_FILES["gambar"]["size"] > 900000) {
    echo "Maaf, ukuran file terlalu besar.";
    $uploadOk = 0;
}

// Hanya izinkan format gambar tertentu
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
    $uploadOk = 0;
}

// Cek jika uploadOk adalah 0, artinya terjadi kesalahan
if ($uploadOk == 0) {
    echo "Maaf, file tidak berhasil diunggah.";
    // Jika semua kondisi terpenuhi, maka proses unggah file dilakukan
} else {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat proses unggah file.";
    }
}

// Query untuk menyimpan data anggota ke dalam database
$sql = "INSERT INTO anggota (nama, tanggal_masuk, gambar) VALUES ('$nama', '$tanggal_masuk', '$target_file')";

if ($conn->query($sql) === TRUE) {
    echo "Data anggota berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
