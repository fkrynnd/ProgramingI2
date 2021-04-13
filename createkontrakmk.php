<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <a href="kontrakmk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Matakuliah</label>
        <br>
        <input type="text" name="matakuliah_id">
        <br>
        <label>Mahasiswa</label>
        <br>
        <input type="text" name="mhs_id">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>