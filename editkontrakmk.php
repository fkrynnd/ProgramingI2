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
    <h1>Edit Data Kontrak Matakuliah</h1>
    <a href="kontrakmk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Matakuliah</label>
        <br>
        <input type="text" name="matakuliah_id" value="<?php echo $data->matakuliah_id ?>">
        <br>
        <label>Id Mahasiswa</label>
        <br>
        <input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>