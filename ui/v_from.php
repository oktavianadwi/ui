<?php
include("config.php");
if (isset($_GET['nis'])){
    $title = "Edit";
    $url = 'proses_edit.php';
    $id = $_GET['nis'];
    // buat query untuk ambil data dari database 
    $sql = "SELECT * FROM  siswa WHERE nis = $id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
    // jika data yang diedit tidak ditemukan
    if (mysqli_num_rows($query) <1){
        die("data tidak ditemukan ....");
    }
    // url jika edit data
}else{
    $title = "Add";
// url jika tambah data 
$url = 'proses_pendaftaran.php';
}
?>
<html>
    <head><title>Formulir Siswa</title></head>
    <body>
        <header><h3>Formulir Siswa</h3></header>
        <from action ="proses_pendaftaran.php" method = "POST">
            <fieldset>
                <legend><h2>From Siswa</h2><Legend>
                    <div>
                        <label for = 'nis'>NIS </label><br>
                        <input type = "text" name = "nis" value = "<?php if (isset($_GET['nis'])){ echo $siswa['nis'];}?>"/>
</div>
<div>
    <label for = 'nama'>Nama: </label><br>
    <input type = "text" name = "nama_lengkap" value = "<?php if (isset($_GET['nis']))
{ echo $siswa['nama_lengkap'];}?>"/>
</div>
<div>
    <label for = 'alamat'>Alamat: </label><br>
    <textarea name = "alamat" row = "5"> <?php if (isset($_GET['nis']))
{echo $siswa ['alamat'];}?> </textarea>
</div>
<div>
    <label for = "jenis_kelamin">Jenis Kelamin: </label><br>
    <?php if (isset($_GET['nis'])){$jk = $siswa['jenis_kelamin'];?>
        <td>
            <input name= "jenis_kelamin" type = "radio" value="Laki-Laki"
            <?php if ($jk=='Laki-Laki'){echo 'checked';}?>>Laki-Laki
            <input name= "jenis_kelamin" type = "radio" value="perempuan"
            <?php if($jk=='perempuan'){echo 'checked';}?>>perempuan
</td>
<?php }else{ ?>
    <td><br>
    <input  name ="jenis_kelamin" type= "radio" value = "Laki-Laki">Laki-Laki
    <input name = "jenis _kelamin" type = "radio" value= "perempuan">perempuan
</td>
<?php } ?>
</div>
<div>
    <label for = "no_telp"> No Telepon: </label><br>
    <input type = "text" name = "no_telp" value ="<?php if(isset($_GET['nis']))
    {echo $siswa['kelas'];} ?>" />
    </div>
    <hr>
    <div>
        <input type = "submit" value = "Simpan" name = "simpan"/>
</div>
</fieldset>
</from>
</body>
</html>





    
