<?php 
$nik = $_GET['id'];

$server = "app-db";
$user = "root";
$password = "root";
$database = "family_db";

$koneksi = mysqli_connect($server,$user,$password,$database);

$sql = "DELETE FROM tb_penduduk WHERE nik ='$nik'";
$query = mysqli_query($koneksi, $sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Dihapus');
}
?>

