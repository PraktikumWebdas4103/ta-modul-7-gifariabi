<?php 
include 'koneksi.php';
$id = $_GET['nim'];
mysqli_query($conn,"DELETE FROM data WHERE nim='$id'")or die(mysql_error());
 
header("location:tampildata.php?pesan=hapus");
?>