<?php 
 $server = "localhost";
 $username ="root";
 $pass ="";
 $namadatabase = "wfood";


 $db = mysqli_connect($server,$username,$pass,$namadatabase);

 if(!$db){
     die("gagal terhubung");
 }