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
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">W-FOOD</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#table">Table Pesanan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Tentang</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Kontak</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="keluar.php"><i class="fas fa-sign-out-alt"></i>Keluar</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

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
          
         
            <td>
               <a href="hapus.php?id=<?php echo $tampil['id'];?>" class="btn-danger btn">Hapus</a>
                <a href="edit.php?id=<?php echo $tampil['id'];?>" class="btn btn-warning">Edit</a>
                <a href="cetaklaporan.php" class="btn btn-success">cetak</a>
           
            </td>
           
           
        </tr>
       <?php }?>
    </tbody>
</table>
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