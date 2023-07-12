<?php 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal'];

include 'config.php';
$db = new Config();

$sql = "INSERT INTO tb_penduduk (nik,nama,tempat_lahir,tgl_lahir) VALUES ('$nik','$nama','$tempat','$tgl')";

$query = $db->aksiQuery($sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Disimpan');
}
?>

