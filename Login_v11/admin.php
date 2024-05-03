<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #f0f0f0;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            width: 200px;
            background-color: #FF0000;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #CC0000;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .welcome-text {
            text-align: center;
            color: #000;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        /* Penyesuaian untuk form-container */
        .form-container {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-left: 20px; /* Jarak antara sidebar dan form */
            width: calc(100% - 250px); /* Lebar kotak tengah */
        }

        .form-container h1 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        .form-container label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            resize: vertical;
        }

        .form-container textarea {
            height: 150px;
        }

        .form-container input[type="file"] {
            margin-top: 5px;
        }

        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="barang.php">Tambah Barang</a>
            <a href="http://localhost/Projek_motor_club/Login_v11/inp_anggota.php">Tambah Anggota</a>
            <a href="http://localhost/Projek_motor_club/Login_v11/artikel.php">Tambah Artikel</a>
        </div>

        <div class="form-container">
            <h1>Dashboard Admin</h1>

            <div class="welcome-text">
                Selamat datang ke menu admin
            </div>

        </div>
    </div>
</body>

</html>
