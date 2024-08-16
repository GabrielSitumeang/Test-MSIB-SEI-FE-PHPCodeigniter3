<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek dan Lokasi</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left; 
        }
        th {
            border: 1px solid #ddd;
            padding: 8px;
            background-color: #f0f0f0;
            text-align: center;
        }
        .right-align {
            text-align: right;
        }
        .small-text {
            font-size: 0.9em;
        }
        .button {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px; 
        }
        .button:hover {
            opacity: 0.9;
        }
        .button-tambah {
            background-color: #4CAF50; 
        }
        .button-edit {
            background-color: #003366; 
        }
        .button-delete {
            background-color: #e60000; 
        }
        .center-buttons {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Proyek dan Lokasi</h1>
        
        <h2>Daftar Proyek</h2>
        <div class="right-align">
            <a href="<?php echo site_url('proyek/create'); ?>" class="button button-tambah">Tambah Data</a>
        </div>
        <p></p>
        <table>
            <thead>
                <tr>
                    <th>Nama Proyek</th>
                    <th>Client</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Pimpinan Proyek</th>
                    <th>Keterangan</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($project['nama_proyek'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($project['client'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($project['tgl_mulai'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($project['tgl_selesai'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($project['pimpinan_proyek'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($project['keterangan'] ?? ''); ?></td>
                        <td class="center-buttons">
                            <a href="<?php echo site_url('proyek/edit/' . $project['id']); ?>" class="button button-edit">Edit</a>
                            <a href="<?php echo site_url('proyek/delete/' . $project['id']); ?>" class="button button-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data proyek ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       
        <h2>Daftar Lokasi</h2>
        <div class="right-align">
            <a href="<?php echo site_url('lokasi/create'); ?>" class="button button-tambah">Tambah Data</a>
        </div>
        <p></p>
        <?php if (isset($locations) && is_array($locations)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nama Lokasi</th>
                        <th>Negara</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Aksi</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($locations as $location): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($location['nama_lokasi'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($location['negara'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($location['provinsi'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($location['kota'] ?? ''); ?></td>
                            <td class="center-buttons"> 
                                <a href="<?php echo site_url('lokasi/edit/' . $location['id']); ?>" class="button button-edit">Edit</a>
                                <a href="<?php echo site_url('lokasi/delete/' . $location['id']); ?>" class="button button-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data lokasi ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak ada lokasi yang ditemukan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
