<h1>Tambah Produk</h1>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama"  style="width: 50%">
</div>
<div class="form-group">
    <label>Harga (Rp)</label>
    <input type="Number" class="form-control" name="harga" style="width: 50%">
</div>
<div class="form-group">
    <label>Pemilik restoran</label>
    <input type="text" class="form-control" name="restoran" style="width: 50%">
</div>

<div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto" style="width: 50%">
</div>
<button class="btn btn-primary" name="simpan"  style="width: 20%">Simpan</button>




</form>
<?php if(isset($_POST['simpan'])){
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi,"../fotoproduct/".$nama);
    $db->query("INSERT INTO nama_makanan(nama,harga,restoran,foto)
    VALUES('$_POST[nama]','$_POST[harga]','$_POST[restoran]','$nama')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
 echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
}

?>


