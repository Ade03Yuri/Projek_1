<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_motor");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Memeriksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai ID anggota dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal_masuk = $_POST['tanggal_masuk'];

    // Memeriksa apakah ada file gambar yang dikirim
    if ($_FILES['gambar']['name'] != '') {
        // Mengambil informasi file gambar
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        // Direktori tempat file gambar akan disimpan
        $upload_dir = "uploads/";
        $target_file = $upload_dir . basename($nama_file);

        // Memeriksa apakah file yang diupload adalah gambar
        $cek = getimagesize($tmp_file);
        if ($cek !== false) {
            // Memeriksa ukuran file gambar
            if ($ukuran_file > 5000000) { // 5MB
                echo "Maaf, ukuran file terlalu besar. Max 5MB.";
                exit();
            }

            // Memeriksa tipe file gambar (hanya diperbolehkan jpg, jpeg, png)
            $allowed_types = array('image/jpeg', 'image/jpg', 'image/png');
            if (!in_array($tipe_file, $allowed_types)) {
                echo "Maaf, hanya diperbolehkan gambar dengan format JPG, JPEG, atau PNG.";
                exit();
            }

            // Memindahkan file gambar ke folder uploads
            if (move_uploaded_file($tmp_file, $target_file)) {
                // Query untuk mengupdate data anggota beserta gambar
                $query = "UPDATE anggota SET nama='$nama', tanggal_masuk='$tanggal_masuk', gambar='$target_file' WHERE id='$id'";
                $result = mysqli_query($koneksi, $query);

                // Memeriksa apakah data berhasil diupdate
                if ($result) {
                    echo "Data anggota berhasil diperbarui.";
                } else {
                    echo "Gagal memperbarui data anggota: " . mysqli_error($koneksi);
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file gambar.";
            }
        } else {
            echo "Maaf, file yang diunggah bukan merupakan gambar.";
        }
    } else {
        // Jika tidak ada file gambar yang diupload, hanya update data teks
        $query = "UPDATE anggota SET nama='$nama', tanggal_masuk='$tanggal_masuk' WHERE id='$id'";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah data berhasil diupdate
        if ($result) {
            echo "Data anggota berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data anggota: " . mysqli_error($koneksi);
        }
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
