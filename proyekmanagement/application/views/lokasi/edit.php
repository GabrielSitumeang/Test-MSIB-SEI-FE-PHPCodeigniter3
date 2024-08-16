<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lokasi</title>
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
        input[type="text"], textarea {
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
        <h1>Edit Data Lokasi</h1>
        <a href="<?php echo site_url('lokasi'); ?>" class="back-link">Kembali ke Daftar Lokasi</a>

        <?php if ($type == 'lokasi'): ?>
            <form action="<?php echo site_url('lokasi/update'); ?>" method="post">
                <input type="hidden" name="type" value="lokasi">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                
                <label for="nama_lokasi">Nama Lokasi:</label>
                <input type="text" id="nama_lokasi" name="nama_lokasi" value="<?php echo isset($item['nama_lokasi']) ? htmlspecialchars($item['nama_lokasi']) : ''; ?>">
                
                <label for="negara">Negara:</label>
                <input type="text" id="negara" name="negara" value="<?php echo isset($item['negara']) ? htmlspecialchars($item['negara']) : ''; ?>">
                
                <label for="provinsi">Provinsi:</label>
                <input type="text" id="provinsi" name="provinsi" value="<?php echo isset($item['provinsi']) ? htmlspecialchars($item['provinsi']) : ''; ?>">
                
                <label for="kota">Kota:</label>
                <input type="text" id="kota" name="kota" value="<?php echo isset($item['kota']) ? htmlspecialchars($item['kota']) : ''; ?>">
                
                <button type="submit">Update</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
