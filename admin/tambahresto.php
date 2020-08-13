<h1>Tambah Produk</h1>
<table>
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama"  style="width: 50%">
</div>
<div class="form-group">
    <label>Alamat</label>
   <textarea name="alamat" id="" cols="30" rows="10"></textarea>
</div>

<button class="btn btn-primary" name="simpan"  style="width: 20%">Simpan</button>




</form>
<?php if(isset($_POST['simpan'])){
   
  
    $db->query("INSERT INTO restoran(nama_restoran,alamat)
    VALUES('$_POST[nama]','$_POST[alamat]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
 echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
}

?>