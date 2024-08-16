<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
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
            font-size : 11px;
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
        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; 
        }
        textarea {
            height: 100px;
            resize: vertical;
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
        <h1>Tambah Proyek Baru</h1>
        <a href="<?php echo site_url('home'); ?>" class="back-link">Kembali ke Daftar Proyek</a>
        <form action="<?php echo site_url('proyek/store'); ?>" method="post">
            <input type="hidden" name="type" value="proyek">
            <label for="nama_proyek">Nama Proyek:</label>
            <input type="text" id="nama_proyek" name="nama_proyek" required>
            
            <label for="client">Client:</label>
            <input type="text" id="client" name="client" required>
            
            <label for="tgl_mulai">Tanggal Mulai:</label>
            <input type="date" id="tgl_mulai" name="tgl_mulai" required>
            
            <label for="tgl_selesai">Tanggal Selesai:</label>
            <input type="date" id="tgl_selesai" name="tgl_selesai" required>
            
            <label for="pimpinan_proyek">Pimpinan Proyek:</label>
            <input type="text" id="pimpinan_proyek" name="pimpinan_proyek" required>
            
            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan"></textarea>
            
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
