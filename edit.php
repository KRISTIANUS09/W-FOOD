<?php
include "admin/koneksi.php";



if(!isset($_GET['id'])){
header('location:daftarpesanan.php');


}
$id = $_GET['id'];

$sql= "SELECT * FROM daftarpesanan WHERE id=$id";
$query = mysqli_query($db,$sql);
$tampil = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1){
    die("tidak ditemukan");
}

?>




<!DOCTYPE html>
<html lang="en">
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
    </head>

<body>
<div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    

                        <form  method="post">
                        
                            <div class="control-group">
                            <label>Nama Pesanan</label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                
                                <select class="form-control" name="restoran">
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
                                <option>
                            
                            </option>
        
                        
                            
                                
                                
                                </select>
                                </div>
                                
                                
                            </div>
                            <div class="control-group">
                            <label>Nama Pesanan</label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                
                                <select class="form-control" name="namamakan">
                                <?php
            $sql=" SELECT * FROM  nama_makanan";
        

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
            
            <option <?php echo $ket; ?> value="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
            <?php
    }
?>
                                <option>
                            
                            </option>
        
                        
                            
                                
                                
                                </select>
                                </div>
                                
                                
                            </div>
                            <div class="control-group">
                            <label>Nama Pesanan</label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                
                                <select class="form-control" name="harga">
                                <?php
            $sql=" SELECT * FROM  nama_makanan";
        

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
            
            <option <?php echo $ket; ?> value="<?php echo $data['harga'];?>"><?php echo $data['harga'];?></option>
            <?php
    }
?>
                                <option>
                            
                            </option>
        
                        
                            
                                
                                
                                </select>
                                </div>
                                
                                
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" name="namalengkap" type="text" placeholder="Masukan Nama" required="required" data-validation-required-message="Masukan Email Anda."
                                    value="<?php echo $tampil['nama_lengkap'] ?>" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nomor Telpon</label>
                                    <input class="form-control" name="notlpn" type="tel"
                                     placeholder="Nomor telpon" required="required" data-validation-required-message="Masukan Nomor Anda." 
                                     value="<?php echo $tampil['no_hp'] ?>"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label></label>
                                    <input class="form-control" name="email" type="email" placeholder="Masukan Email" required="required" data-validation-required-message="Masukan Email Anda."
                                    value="<?php echo $tampil['email'] ?>" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <br />
            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-xl" value="Kirim"  name="simpan"></div>
                            
                        </form>

                        <?php 
                        if(isset($_POST['simpan'])){
                            $db->query("INSERT INTO daftarpesanan(nama_restoran,nama_makanan,harga,nama_lengkap,no_hp,email)
                            VALUES('$_POST[restoran]','$_POST[namamakan]','$_POST[harga]','$_POST[namalengkap]','$_POST[notlpn]','$_POST[email]')");
                            echo "<div class='alert alert-info'>Data Terkirim</div>";
                         echo "<meta http-equiv='refresh' content='1;url=daftarpesanan.php?'>";
                        }


                        

                        ?>

                    
                            
                    
                            
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/js/scripts.js"></script>

</html>
