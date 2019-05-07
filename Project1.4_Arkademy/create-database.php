<?php
   include "koneksi.php";

   $sql = "CREATE DATABASE Arkademy";

   if($koneksi->query($sql) === TRUE){
       echo "Database berhasil di buat";
   } else {
       echo "Database gagal di buat";
   }
?>