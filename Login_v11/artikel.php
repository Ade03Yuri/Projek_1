<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
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
            padding-bottom: 50px; /* Added padding to make space for "Hi Nama Pengguna" */
            position: relative; /* Added relative position for absolute positioning of "Hi Nama Pengguna" */
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

        /* Added style for "Hi Nama Pengguna" */
        .user-greeting {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
            font-size: 14px;
        }

        /* Added style for logout button */
        .logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #0056b3;
        }

        .form-container {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            resize: vertical;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="barang.php">Tambah Barang</a>
            <a href="inp_anggota.php">Tambah Anggota</a>
            <a href="artikel.php">Tambah Artikel</a>
            <form method="post" style="text-align: right;">
        
    </form>

   
            <!-- PHP script to get admin name -->
            <!-- Logout button -->
            <?php
            // Assuming you have a session variable storing admin name, replace $_SESSION['admin_name'] with actual session variable
            $adminName = isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : "Nama Pengguna";
            echo '<div class="user-greeting">Hi ' . $adminName . '</div>';
            ?>
        </div>

        <div class="form-container">
            <h2>Tambah Artikel</h2>
            <form action="proses_tambah_artikel.php" method="POST">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" required>
                <label for="konten">Konten:</label>
                <textarea id="konten" name="konten" required></textarea>
                <label for="tanggal_publikasi">Tanggal Publikasi:</label>
                <input type="date" id="tanggal_publikasi" name="tanggal_publikasi" required>
                <input type="submit" value="Tambah Artikel">
            </form>
        </div>
    </div>
</body>

</html>
