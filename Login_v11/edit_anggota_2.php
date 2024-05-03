<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>/* style.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="file"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 20px;
    resize: vertical;
}

.btn-submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-submit:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="container">
        <h2>Edit Data Anggota</h2>
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

            // Query untuk mengambil data anggota berdasarkan ID
            $query = "SELECT * FROM anggota WHERE id='$id'";
            $result = mysqli_query($koneksi, $query);

            // Memeriksa apakah data anggota ditemukan
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
        ?>
                <form action="proses_edit_anggota.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <label for="nama">Nama Anggota:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
                    <label for="tanggal_masuk">Tanggal Masuk:</label>
                    <input type="date" id="tanggal_masuk" name="tanggal_masuk" value="<?php echo $data['tanggal_masuk']; ?>" required>
                    <input type="submit" value="Simpan Perubahan" class="btn-submit">
                </form>
        <?php
            } else {
                echo "ID anggota tidak ditemukan.";
            }

            // Tutup koneksi database
            mysqli_close($koneksi);
        } else {
            echo "ID anggota tidak ditemukan.";
        }
        ?>
    </div>
</body>
</html>
