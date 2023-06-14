<?php 
$nik = $_GET['id'];

$server = "app-db";
$user = "root";
$password = "root";
$database = "family_db";

$koneksi = mysqli_connect($server,$user,$password,$database);

$sql = "SELECT * FROM tb_penduduk WHERE nik = {$nik}";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

print_r($data);
?>
<hr>
<form action="ubah_aksi.php?id=<?= $nik ?>" name="form" method="POST">
     <div>
          Nama Lengkap : 
          <input name="nama" type="text" value="<?= $data['nama'] ?>" placeholder="Isi Nama" />
     </div>
     <div>
          Tempat Lahir : 
          <input name="tempat" type="text" value="<?= $data['tempat_lahir'] ?>" placeholder="Isi Kota" />
     </div>
     <div>
          Tanggal Lahir : 
          <input name="tanggal" type="date" value="<?= $data['tgl_lahir'] ?>" placeholder="Isi Tanggal" />
     </div>
     <div>
          <input type="submit" value="Simpan" />
     </div>
</form>

