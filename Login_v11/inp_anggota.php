<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <style>
        /* Styling CSS */
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

        .form-container {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-left: 20px;
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

        input[type="file"] {
            margin-top: 5px;
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

        /* Tombol Edit */
        .btn-edit {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="barang.php">Tambah Barang</a>
            <a href="inp_anggota.php">Tambah Anggota</a>
            <a href="artikel.php">Tambah Artikel</a>
        </div>

        <div class="form-container">
            <h2>Tambah Anggota</h2>
            <form action="proses_tambah_anggota.php" method="POST" enctype="multipart/form-data">
                <label for="nama">Nama Anggota:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>
                <label for="gambar">Gambar Anggota:</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
                <input type="submit" value="Tambah Anggota" class="btn-submit">
                <a href="edit_anggota.php" class="btn-edit">Edit</a>

            </form>
        </div>
    </div>
</body>

</html>
