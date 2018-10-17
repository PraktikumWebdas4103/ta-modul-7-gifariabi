<?php  
	if (isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelamin = $_POST['jk'];
		$studi = $_POST['ps'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		include "koneksi.php";
		$sql = "INSERT INTO data (nama,nim,jeniskelamin,studi,fakultas,asal,moto) VALUES ('$nama','$nim','$kelamin','$studi','$fakultas','$asal','$moto')";
		$query=mysqli_query($conn,$sql);

		if ($query) {
			header('location: tampildata.php');
		}
		else{
			header('location: input.php');
		}
	}
?>