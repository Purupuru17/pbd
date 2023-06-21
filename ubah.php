<link rel="stylesheet" href="bootstrap.css">
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
     <div class="form-group">
          Nama Lengkap : 
          <input class="form-control" name="nama" type="text" value="<?= $data['nama'] ?>" placeholder="Isi Nama" />
     </div>
     <div class="form-group">
          Tempat Lahir : 
          <input class="form-control" name="tempat" type="text" value="<?= $data['tempat_lahir'] ?>" placeholder="Isi Kota" />
     </div>
     <div class="form-group">
          Tanggal Lahir : 
          <input class="form-control" name="tanggal" type="date" value="<?= $data['tgl_lahir'] ?>" placeholder="Isi Tanggal" />
     </div>
     <div class="form-group">
          <input class="btn btn-success" type="submit" value="Simpan" />
     </div>
</form>

