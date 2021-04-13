<?php
include 'model.php';

//tabel nilai mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->insert($nim, $nama, $uts, $uas, $tugas);
    header('location:nilai.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update($nim, $nama, $uts, $uas, $tugas);
    header('location:nilai.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:nilai.php');
}

//tabel data mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->insert($nim, $nama, $semester, $alamat, $no_telp, $email);
    header('location:mahasiswa.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->update($nim, $nama, $semester, $alamat, $no_telp, $email);
    header('location:mahasiswa.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:mahasiswa.php');
}

//tabel absen mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['mata_kuliah'];
    $alamat = $_POST['waktu_absen'];
    $no_telp = $_POST['status'];
    $model = new Model();
    $model->insert($nim, $nama, $mata_kuliah, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['mata_kuliah'];
    $alamat = $_POST['waktu_absen'];
    $no_telp = $_POST['status'];
    $model = new Model();
    $model->insert($nim, $nama, $mata_kuliah, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:absen.php');
}