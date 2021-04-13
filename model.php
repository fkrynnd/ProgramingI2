<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

//tabel nilai mahasiswa
    public function insert($nim, $nama, $uts, $uas, $tugas)
    {
        $na = $this->na($uts, $tugas, $uas);
        $status = $this->status($na);
        $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama', '$uts', '$uas', '$tugas', '$na', '$status')";
        $this->conn->query($sql);
    }
    public function na($uts, $tugas, $uas)
    {
        $na = (0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
        return $na;
    }
    public function status($na)
    {
        $status = "";
        if ($na >= 60 && $na <= 100) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }  
            return $status;
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM tbl_nilai"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM tbl_nilai WHERE nim='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris =$obj;
        }
        return $baris;
    }
    public function update($nim, $nama, $uts, $tugas, $uas)
    {
        $na = $this->na($uts, $tugas, $uas);
        $status = $this->status($na);
        $sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na', status='$status' WHERE nim='$nim'";
        $this->conn->query($sql);
    }
    public function delete($nim)
    {
        $sql = "DELETE FROM tbl_nilai WHERE nim='$nim'";
        $this->conn->query($sql);
    }

//tabel data mahasiswa
public function insert_datamhs ($id, $nama, $semester, $alamat, $no_telp, $email)
{
    $sql = "INSERT INTO tbl_mhs (id, nama, semester, alamat, no_telp, email) VALUES ('$id', '$nama', '$semester', '$alamat', '$no_telp', '$email')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datamhs()
{
    $sql = "SELECT * FROM tbl_mhs"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_datamhs($id)
{
    $sql = "SELECT * FROM tbl_mhs WHERE id='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris =$obj;
    }
    return $baris;
}
public function update_datamhs($id, $nama, $semester, $alamat, $no_telp, $email)
{
    $nim = $this->id;
    $nama = $this->nama;
    $semester = $this->semester;
    $alamat = $this->alamat; 
    $no_telp = $this->no_telp;
    $email = $this->email;
    $sql = "UPDATE tbl_mhs SET nama='$nama', semester='$semester', alamat='$alamat', no_telp='$no_telp', email='$email' WHERE id='$od'";
    $this->conn->query($sql);
}
public function delete_datamhs($id)
{
    $sql = "DELETE FROM tbl_mhs WHERE id='$id'";
    $this->conn->query($sql);
}

//tabel absen mahasiswa
public function insert_dataabsen ($id, $nama, $mhs_id, $mata_kuliah, $waktu_absen, $status)
{
    $sql = "INSERT INTO tbl_absen (id, nama,mhs_id, mata_kuliah, waktu_absen, status) VALUES ('$id', '$nama','$mhs_id', '$mata_kuliah', '$waktu_absen', '$status')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_dataabsen()
{
    $sql = "SELECT * FROM tbl_absen"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_dataabsen($id)
{
    $sql = "SELECT * FROM tbl_mhs WHERE id='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris =$obj;
    }
    return $baris;
}
public function update_dataabsen($nim, $nama, $mhs_id, $mata_kuliah, $waktu_absen, $status)
{
    $id = $this->id;
    $nama = $this->nama;
    $mhs_id = $this->mhs_id
    $mata_kuliah = $this->mata_kuliah;
    $waktu_absen = $this->waktu_absen;
    $status = $this->status;
    $sql = "UPDATE tbl_absen SET nama='$nama', mhs_id='$mhs_id', mata_kuliah='$mata_kuliah', waktu_absen='$waktu_absen', status='$status' WHERE id='$id'";
    $this->conn->query($sql);
}
public function delete_dataabsen($id)
{
    $sql = "DELETE FROM tbl_mhs WHERE id='$id'";
    $this->conn->query($sql);
}

//tabel matakuliah
public function insert_datamk ($id, $nama_mk)
{
    $sql = "INSERT INTO tbl_mk (id, nama_mk status) VALUES ('$id', '$nama_mk')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datamk()
{
    $sql = "SELECT * FROM tbl_mk"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_datamk($id)
{
    $sql = "SELECT * FROM tbl_mk WHERE id='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris =$obj;
    }
    return $baris;
}
public function update_datamk($id, $nama_mk, $status)
{
    $id = $this->id;
    $nama_mk = $this->nama_mk;
    $status = $this->status;
    $sql = "UPDATE tbl_mk SET nama_mk='$nama_mk'status='$status' WHERE id='$mhs_id'";
    $this->conn->query($sql);
}
public function delete_datamk($id)
{
    $sql = "DELETE FROM tbl_mk WHERE id='$id'";
    $this->conn->query($sql);
}

//tabel kontrakmk
public function insert_datakontrakmk ($id, $nama_mk)
{
    $sql = "INSERT INTO tbl_kontrakmk (matakuliah_id, mhs_id status) VALUES ('$matakuliah_id', '$mhs_id')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datakontrakmk()
{
    $sql = "SELECT * FROM tbl_kontrakmk"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_datakontrakmk($id)
{
    $sql = "SELECT * FROM tbl_kontrakmk WHERE id='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris =$obj;
    }
    return $baris;
}
public function update_datakontrakmk($matakuliah_id, $mhs_id, $status)
{
    $id = $this->matakuliah_id;
    $nama_mk = $this->mhs_id;
    $status = $this->status;
    $sql = "UPDATE tbl_kontrakmk SET matakuliah_id='$matakuliah_id'status='$status' WHERE id='$matakuliah_id'";
    $this->conn->query($sql);
}
public function delete_datakontrakmk($kontrak_id)
{
    $sql = "DELETE FROM tbl_kontrakmk WHERE matakuliah_id='$kontrak_id'";
    $this->conn->query($sql);
}

}