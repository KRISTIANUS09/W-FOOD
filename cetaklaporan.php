
<?php 

include "admin/koneksi.php";
?>

<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>W-FOOD</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    </head>
    <body id="page-top">

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
            <th>Proses</th>
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
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>




</html>

