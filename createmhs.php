<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <a href="mahasiswa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>NIM</label>
        <br>
        <input type="text" name="nim">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>Semester</label>
        <br>
        <input type="number" name="semester">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat">
        <br>
        <label>No. Telp</label>
        <br>
        <input type="text" name="no_telp">
        <br>
        <label>Email</label>
        <br>
        <input type="text" name="email">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>