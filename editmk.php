<?php
$id = $_GET['nim'];
include 'Model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mata Kuliah Mahasiswa</h1>
    <a href="mahasiswa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id</label>
        <br>
        <input type="text" name="id" value="<?php echo $data->id ?>">
        <br>
        <label>Nama Matakuliah</label>
        <br>
        <input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>