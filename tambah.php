<link rel="stylesheet" href="bootstrap.css">

<form action="tambah_aksi.php" name="form" method="POST">
     
     <div class="form-group">
          NIK : 
          <input class="form-control" name="nik" type="number" value="" placeholder="Isi NIK" />
     </div>
     <div class="form-group">
          Nama Lengkap : 
          <input class="form-control" name="nama" type="text" value="" placeholder="Isi Nama" />
     </div>
     <div class="form-group">
          Tempat Lahir : 
          <input class="form-control" name="tempat" type="text" value="" placeholder="Isi Kota" />
     </div>
     <div class="form-group">
          Tanggal Lahir : 
          <input class="form-control" name="tanggal" type="date" value="" placeholder="Isi Tanggal" />
     </div>
     <div class="form-group">
          <input class="btn btn-success" type="submit" value="Simpan" />
     </div>
</form>

