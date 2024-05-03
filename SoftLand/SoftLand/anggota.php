<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Anggota - Motor Club</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <main id="main">

        <!-- ======= Navigation Bar ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex justify-content-between align-items-center">

                <div class="logo">
                    <h1><a href="index.html">Motor Club</a></h1>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="profil.php">Profile Perusahaan</a></li>
                        <li><a href="penjualan.php">Penjualan</a></li>
                        <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                            </ul>
                        </li>
                        <li><a href="anggota.php">Daftar Anggota</a></li>
                        <li><a href="tentang.php">About Us</a></li>
                        <li><a href="http://localhost/Projek_motor_club/Login_v11/login.php">Login</a></li>
                        <li><a href="http://localhost/Projek_motor_club/Login_v11/daftar.php">Sign Up</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Navigation Bar -->

        <!-- ======= Anggota Section ======= -->
        <section class="hero-section inner-page">
            <div class="wave">
                <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center hero-text">
                                <h1 data-aos="fade-up" data-aos-delay="">Data Anggota</h1>
                                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Data anggota Motor Club</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- Loop untuk menampilkan data anggota -->
                    <?php
                    // Koneksi ke database
                    $koneksi = mysqli_connect("localhost", "root", "", "db_motor");

                    // Periksa koneksi
                    if (mysqli_connect_errno()) {
                        echo "Koneksi database gagal: " . mysqli_connect_error();
                        exit();
                    }

                    // Ambil data anggota dari database
                    $query = "SELECT * FROM anggota";
                    $result = mysqli_query($koneksi, $query);

                    // Tampilkan data anggota
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <!-- Ganti sumber gambar dengan URL foto anggota -->
                                <img src="../../Login_v11/Projek_motor_club_1/uploads/image.png" alt="Deskripsi Gambar">
                                <?php echo $data['gambar']?>;
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                                    <!-- Tampilkan informasi tambahan jika diperlukan -->
                                    <p class="card-text">Tanggal Masuk: <?php echo $data['tanggal_masuk']; ?></p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    // Tutup koneksi database
                    mysqli_close($koneksi);
                    ?>

                </div>
            </div>
        </section>

        <!-- End Anggota Section -->

    </main><!-- End #main -->

</body>

</html>
