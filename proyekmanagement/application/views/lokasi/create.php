<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .back-link {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            font-size: 11px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        form {
            display: grid;
            gap: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; 
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Lokasi Baru</h1>
        <a href="<?php echo site_url('home'); ?>" class="back-link">Kembali ke Daftar Proyek</a>
        <form action="<?php echo site_url('lokasi/store'); ?>" method="post">
            <input type="hidden" name="type" value="lokasi">
            <label for="nama_lokasi">Nama Lokasi:</label>
            <input type="text" id="nama_lokasi" name="nama_lokasi" required>
            
            <label for="negara">Negara:</label>
            <input type="text" id="negara" name="negara" required>
            
            <label for="provinsi">Provinsi:</label>
            <input type="text" id="provinsi" name="provinsi" required>
            
            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota" required>
            
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
