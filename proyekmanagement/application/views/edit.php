<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
        <h1>Edit Data</h1>
        <a href="<?php echo site_url('proyek'); ?>" class="back-link">Kembali ke Daftar Proyek</a>

        <?php if ($type == 'proyek'): ?>
            <form action="<?php echo site_url('proyek/update'); ?>" method="post">
                <input type="hidden" name="type" value="proyek">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                
                <label for="nama_proyek">Nama Proyek:</label>
                <input type="text" id="nama_proyek" name="nama_proyek" value="<?php echo isset($item['nama_proyek']) ? htmlspecialchars($item['nama_proyek']) : ''; ?>">
                
                <label for="client">Client:</label>
                <input type="text" id="client" name="client" value="<?php echo isset($item['client']) ? htmlspecialchars($item['client']) : ''; ?>">
                
                <label for="tgl_mulai">Tanggal Mulai:</label>
                <input type="date" id="tgl_mulai" name="tgl_mulai" value="<?php echo isset($item['tgl_mulai']) ? htmlspecialchars($item['tgl_mulai']) : ''; ?>">
                
                <label for="tgl_selesai">Tanggal Selesai:</label>
                <input type="date" id="tgl_selesai" name="tgl_selesai" value="<?php echo isset($item['tgl_selesai']) ? htmlspecialchars($item['tgl_selesai']) : ''; ?>">
                
                <label for="pimpinan_proyek">Pimpinan Proyek:</label>
                <input type="text" id="pimpinan_proyek" name="pimpinan_proyek" value="<?php echo isset($item['pimpinan_proyek']) ? htmlspecialchars($item['pimpinan_proyek']) : ''; ?>">
                
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan"><?php echo isset($item['keterangan']) ? htmlspecialchars($item['keterangan']) : ''; ?></textarea>
                
                <button type="submit">Update</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
