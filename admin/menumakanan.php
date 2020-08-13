

<h1>Menu Makanan</h1>

<a href="index.php?halaman=tambahmenu" 
class="btn btn-primary" style="width: 20%"> Tambah Data</a>

<table class="table table-bordered 1"  >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Nama Restoran</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $ambil=$db->query("SELECT * FROM nama_makanan");?>
       <?php while($tampil = $ambil->fetch_assoc()){?>
    
        <tr>
            <td><?php  echo $no++; ?></td>
            <td><?php echo $tampil['nama'] ?></td>
            <td><?php echo $tampil['harga'] ?></td>
            <td><?php echo $tampil['restoran'] ?></td>
           
            <td>
                <img src="../fotoproduct/<?php echo $tampil['foto'] ?>" width="100"></td>
            <td>
                <a href="index.php?halaman=hapusproduk&id=<?php echo $tampil['id_produk'];?>" class="btn-danger btn">hapus</a>
                <a href="index.php?halaman=ubahproduk&id=<?php echo $tampil['id_produk'];?>" class="btn btn-warning">Edit</a>
            </td>
           
           
        </tr>
       <?php }?>
    </tbody>
</table>
