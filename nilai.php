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
                        <li><a href="Mahasiswa.php">Mahasiswa</a></li>
                        <li class="active"><a href="nilai.php">Nilai</a></li>
                        <li><a href="absen.php">Absen</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>Data Nilai Mahasiswa</h1>
                    <a href="create.php" class="btn btn-primary" role="button" data-bs-toggle="button">Tambah Data</a>
                    <a href="print.php" class="btn btn-primary" role="button" data-bs-toggle="button">Cetak Data</a>
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Tugas</th>
                                <th>NA</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->tampil_data();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                                    <tr>
                                        <td><?= $index++ ?></td>
                                        <td><?= $data->nim ?></td>
                                        <td><?= $data->nama ?></td>
                                        <td><?= $data->uts ?></td>
                                        <td><?= $data->uas ?></td>
                                        <td><?= $data->tugas ?></td>
                                        <td><?= $data->na ?></td>
                                        <td><?= $data->status ?></td>
                                        <td>
                                            <a name="edit" id="edit" href="Edit.php?nim=<?= $data->nim ?>">Edit</a>
                                            <a name="hapus" id="hapus" href="Proses.php?nim=<?= $data->nim ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else { ?>
                                <tr>
                                    <td colspan="9">Belum Ada Data Pada Tabel Nilai Mahasiswa.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </body>
</html> 