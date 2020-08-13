

<table class="table table-bordered 5"  >
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Restoran</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Nama Lengkap</th>
            <th>No Hp</th>
            <th>Email</th>
           
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $ambil=$db->query("SELECT * FROM daftarpesanan");?>
       <?php while($tampil = $ambil->fetch_assoc()){?>
    
        <tr>
            <td><?php  echo $no++; ?></td>
            <td><?php echo $tampil['nama_restoran'] ?></td>
            <td><?php echo $tampil['nama_makanan'] ?></td>
            <td><?php echo $tampil['harga'] ?></td>
            <td><?php echo $tampil['nama_lengkap'] ?></td>
            <td><?php echo $tampil['no_hp'] ?></td>
            <td><?php echo $tampil['email'] ?></td>
          
         
    
        </tr>
       <?php }?>
    </tbody>
</table>
<script>
window.print();
</script>

