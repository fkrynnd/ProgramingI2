<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
          <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Pemograman Internet 2</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="mahasiswa.php">Mahasiswa</a></li>
                        <li><a href="nilai.php">Nilai</a></li>
                        <li><a href="absen.php">Absen</a></li>
                        <li class="active"><a href="matakuliah.php">Matakuliah</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>Data Matakuliah Mahasiswa</h1>
                    <a href="createmk.php" class="btn btn-primary" role="button" data-bs-toggle="button">Tambah Data</a>
                    <a href="printmk.php" class="btn btn-primary" role="button" data-bs-toggle="button">Cetak Data</a>
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama Matakuliah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->tampil_datamk();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                                    <tr>
                                        <td><?php $index++ ?></td>
                                        <td><?php $data->id ?></td>
                                        <td><?php $data->nama_mk ?></td>
                                        <td>
                                            <a name="edit" id="edit" href="editmhs.php?nim=<?= $data->id ?>">Edit</a>
                                            <a name="hapus" id="hapus" href="process.php?nim=<?= $data->id ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else { ?>
                                <tr>
                                    <td colspan="9">Belum Ada Data Pada Tabel Mahasiswa.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html> 