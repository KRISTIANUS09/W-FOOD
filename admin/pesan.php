<table class="table table-bordered 1"  >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>pesan</th>
           
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $ambil=$db->query("SELECT * FROM pesan");?>
       <?php while($tampil = $ambil->fetch_assoc()){?>
    
        <tr>
            <td><?php  echo $no++; ?></td>
            <td><?php echo $tampil['nama'] ?></td>
            <td><?php echo $tampil['email'] ?></td>
            <td><?php echo $tampil['email'] ?></td>
            <td><?php echo $tampil['no_tlpn'] ?></td>
            <td><?php echo $tampil['isi_pesan'] ?></td>
          
           
           
           
        </tr>
       <?php }?>
    </tbody>
</table>
