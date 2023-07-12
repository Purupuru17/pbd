<?php 
$nik = $_GET['id'];

include 'config.php';
$db = new Config();

$sql = "DELETE FROM tb_penduduk WHERE nik ='$nik'";

$query = $db->aksiQuery($sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Dihapus');
}
?>

