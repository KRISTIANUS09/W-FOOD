<?php
include "admin/koneksi.php";



if(isset($_GET['id'])){
$id = $_GET['id'];

$sql= "DELETE FROM daftarpesanan WHERE id=$id";
$query = mysqli_query($db,$sql);
if($query){
    header('Location:daftarpesanan.php');
}
else{
    die("gagal menghapus");
}


}



