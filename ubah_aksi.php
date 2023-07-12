<?php 
$nik = $_GET['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal'];

include 'config.php';
$db = new Config();

$sql = "UPDATE tb_penduduk SET nama='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl' WHERE nik ='$nik'";

$query = $db->aksiQuery($sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Diubah');
}
?>

