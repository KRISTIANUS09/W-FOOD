<?php 
include 'admin/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="admin/dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">email </label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="masukan email" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="masukan password" name="pass" />
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-success" name="login">Login</button>
                                               
                                            </div>
                                        </form>
                                        <?php
                                        if(isset($_POST['login'])){
                                            $ambil= $db->query("SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[pass]'");
                                            $cek= $ambil->num_rows;
                                            if($cek==1){
                                                $_SESSION['admin']=$ambil->fetch_assoc();
                                                echo "<div class='alert alert-info'>Login Sukses</div>";
                                                echo "<meta http-equiv='refresh' content='1;url=menu.php'>";
                                            }
                                            else{
                                                echo "<div class='alert alert-danger'>Login Gagal</div>";
                                                echo "<meta http-equiv='refresh' content='1;url=login.php'>";

                                            }
                                             } 
                                             ?>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="registrasi.php?">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/js/scripts.js"></script>
    </body>
</html>
