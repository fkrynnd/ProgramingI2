<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Data Absen Mahasiswa</title>
    <style>
        h1 {
            text-align: center;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align:left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
        <h1>Laporan Data Absen Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>Waktu Absen</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_dataabsen();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nim ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->mata_kuliah ?></td>
                            <td><?= $data->waktu_absen ?></td>
                            <td><?= $data->status ?></td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="9">Belum Ada Data Pada Tabel Mahasiswa.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>