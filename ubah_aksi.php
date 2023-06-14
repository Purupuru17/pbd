<?php 
$nik = $_GET['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal'];

$server = "app-db";
$user = "root";
$password = "root";
$database = "family_db";

$koneksi = mysqli_connect($server,$user,$password,$database);

$sql = "UPDATE tb_penduduk SET nama='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl' WHERE nik ='$nik'";
$query = mysqli_query($koneksi, $sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Diubah');
}
?>

