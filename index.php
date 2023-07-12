<link rel="stylesheet" href="bootstrap.css">
<h1 class="text-primary">Selamat Datang di UNIMUDA Sorong</h1>

<a class="btn btn-primary" href="tambah.php">Tambah Data</a>
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
     include 'config.php';
     $db = new Config();
     $hasil = $db->ambilSemua("SELECT * FROM tb_penduduk");
     $no = 1;
     foreach($hasil as $data){
	echo '<tr>';
	echo '<td class="text-center">'.$no.'</td>';
	echo '<td class="text-center">'.$data['nama'].'</td>';
	echo '<td class="text-center">'.$data['nik'].'</td>';
	echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
	echo '<td class="text-center">'.$data['tempat_lahir'].', '.$data['tgl_lahir'].'</td>';
	echo '<td class="text-center">
		<a class="btn btn-warning btn-xs" href="ubah.php?id='.$data['nik'].'"> Ubah </a>
		<a onclick="return confirm(`Anda yakin hapus ?`)" class="btn btn-danger btn-xs" href="hapus.php?id='.$data['nik'].'"> Hapus </a>
	     </td>';
	echo '</tr>';
	$no++;
     }
    ?>
    <tr>
    	<th class="text-center" colspan="2">Total Data</th>
    	<th class="text-center"colspan="4">
	     <span class="label label-primary"><?= count($hasil) ?></span>
    	</th>
    </tr>
</table>














































