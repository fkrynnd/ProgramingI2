<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Absen Mahasiswa</title>
</head>

<body>
    <h1>Tambah Absen Mahasiswa</h1>
    <a href="absen.php">Kembali</a>
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
        <label>Mata Kuliah</label>
        <br>
        <input type="text" name="matakuliah">
        <br>
        <label>Waktu Absen</label>
        <br>
        <input type="time" name="waktu_absen">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>