<link rel="stylesheet" href="bootstrap.css">
<h1 class="text-primary">Selamat Datang di UNIMUDA Sorong</h1>

<?php
$server = "app-db"; //localhost
$user = "root";			//user xampp
$password = "root";		//pass xampp
$database = "family_db";	//nama db kalian

$koneksi = mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo 'Koneksi Berhasil';
}else{
    echo 'Koneksi Gagal';
}

echo '<br>Ambil Data <hr>';

$sql = "SELECT * FROM tb_penduduk";
$query = mysqli_query($koneksi, $sql);
?>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama Lengkap</th>
        <th class="text-center">NIK</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Tempat Tanggal Lahir</th>
        <th class="text-center">Aksi</th>
    </tr>
    <?php
     $no = 1;
     while($data = mysqli_fetch_array($query)){
	echo '<tr>';
	echo '<td class="text-center">'.$no.'</td>';
	echo '<td class="text-center">'.$data['nama'].'</td>';
	echo '<td class="text-center">'.$data['nik'].'</td>';
	echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
	echo '<td class="text-center">'.$data['tempat_lahir'].', '.$data['tgl_lahir'].'</td>';
	echo '<td class="text-center"><a class="btn btn-warning btn-xs" href="ubah.php?id='.$data['nik'].'"> Ubah </a></td>';
	echo '</tr>';
	$no++;
     }
    ?>
    <tr>
    	<th class="text-center" colspan="2">Total Data</th>
    	<th class="text-center"colspan="4">
	     <span class="label label-primary"><?= mysqli_num_rows($query) ?></span>
    	</th>
    </tr>
</table>














































