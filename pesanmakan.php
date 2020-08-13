<?php 
session_start();
$id = $_GET['id'];

if(isset($_session['keranjang'][$id])){
    $_SESSION['keranjang'][$id]=0;
}
else {
    $_SESSION['keranjang'][$id] = 0;
}
echo "<script>alert('proses pemesanan');</script>";
echo "<script>location='pemesanan.php';</script>";
?>