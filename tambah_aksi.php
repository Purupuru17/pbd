<?php 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal'];

$server = "app-db";
$user = "root";
$password = "root";
$database = "family_db";

$koneksi = mysqli_connect($server,$user,$password,$database);

$sql = "INSERT INTO tb_penduduk (nik,nama,tempat_lahir,tgl_lahir) VALUES ('$nik','$nama','$tempat','$tgl')";
$query = mysqli_query($koneksi, $sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Disimpan');
}
?>

