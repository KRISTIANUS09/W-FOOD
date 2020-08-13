<?php 
include 'admin/koneksi.php';

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
         <!-- Navigation-->
         <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">W-FOOD</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Menu Makanan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Kontak</a></li>
                    </ul>
                   
                </div>
            </div>
        </nav>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 
        <div class="container">
           
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
    <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" name="restoran">
        <option>Pilih Restoran</option>
            <?php
             $sql=" SELECT * FROM  restoran";
          

            $hasil=mysqli_query($db,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
          

            $ket="";
            if (isset($_GET['restoran'])) {
                $resto= trim($_GET['restoran']);

                if ($resto==$data['kode_restoran'])
                {
                    $ket="selected";
                }
            }
            ?>
            
            <option <?php echo $ket; ?> value="<?php echo $data['nama_restoran'];?>"><?php echo $data['nama_restoran'];?></option>
            <?php
	}
  ?>
   </form>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="cari">
    </div>

          <section class="kontent">
       <div class="container">
           <h1>Makanan Yang Tersedia</h1>
           <div class="row">
               <br>
           <?php


if (isset($_GET['restoran'])) {
    $restoran=trim($_GET['restoran']);
    $sql="SELECT * FROM nama_makanan where restoran='$restoran' order by id asc";
}else {
    $sql="SELECT * FROM nama_makanan ORDER BY id asc";
}


$hasil=mysqli_query($db,$sql);

while ($data = mysqli_fetch_array($hasil)) {
    ?>
             
               <div class="col md-3">
                   <div class="thumbail">
                   <img src="fotoproduct/<?php echo $data['foto'] ;?>" height="200">
                       <div class="caption">
                           <h3><?php echo $data['nama']; ?></h3>
                           <h5>Rp.<?php echo number_format($data['harga']);?></h5>
                          
                           <a href="pesanmakan.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Beli</a>

                       </div>
                   </div>
               </div>
               <?php } ?>

           </div>
       </div>
   </section>














   
   
 

</div>
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