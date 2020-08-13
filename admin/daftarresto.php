
<h1>Daftar Resto</h1>
<a href="index.php?halaman=tambahresto" 
class="btn btn-primary" style="width: 20%"> Tambah Data</a>

<table class="table table-bordered 1"  >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $ambil=$db->query("SELECT * FROM restoran");?>
       <?php while($tampil = $ambil->fetch_assoc()){?>
    
        <tr>
            <td><?php  echo $no++; ?></td>
            <td><?php echo $tampil['nama_restoran'] ?></td>
            <td><?php echo $tampil['alamat'] ?></td>
           
           
           
            <td>
                <a href="index.php?halaman=hapusproduk&id=<?php echo $tampil['id_produk'];?>" class="btn-danger btn">hapus</a>
                <a href="index.php?halaman=ubahproduk&id=<?php echo $tampil['id_produk'];?>" class="btn btn-warning">Edit</a>
            </td>
           
           
        </tr>
       <?php }?>
    </tbody>
</table>
