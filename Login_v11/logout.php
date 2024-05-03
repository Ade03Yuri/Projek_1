<?php
    // Inisialisasi sesi
    session_start();

    // Fungsi logout
    function logout() {
        // Hapus semua data sesi
        session_unset();

        // Hancurkan sesi
        session_destroy();

        // Redirect ke halaman login.php
        header("Location: login.php");
        exit;
    }

    // Panggil fungsi logout jika tombol logout ditekan
    if (isset($_POST['logout'])) {
        logout();
    }
    ?>