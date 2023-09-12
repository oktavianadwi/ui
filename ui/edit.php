<?php
include("config.php");
if (isset($_GET['nis'])){
    $title = "Edit";
    $url = 'proses-edit.php';
    $id = $_GET['nis'];
    // membuat query untuk ambil data dari database
    $sql = "SELECT * FROM siswa WHERE nis = $id";
    $query = mysqli_quey($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
    // jika data yang diedit tidak di temukan 
    if (mysqli_num_($query) < 1){
        die ("data tidak ditemukan ....");
}
// url jika edit data 
}else{
    $title = "Add";
    //url jika tambah data
    $url ='proses_pendaftaran.php';
}
?>


