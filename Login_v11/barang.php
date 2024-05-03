<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
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

        .form-container {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-left: 20px; /* Mengatur jarak antara sidebar dan form */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            resize: vertical;
        }

        textarea {
            height: 100px;
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
        </div>

        <div class="form-container">
            <h1>Tambah Barang</h1>
            <form action="proses_tambah_barang.php" method="POST">
                <label for="nama">Nama Barang:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" required>
                <label for="stok">Stok:</label>
                <input type="text" id="stok" name="stok" required>
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
