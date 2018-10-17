<?php  
	$localhost = 'localhost';
	$usernmae = 'root';
	$pass = '';
	$db = 'mahasiswa';
	$conn = mysqli_connect($localhost,$usernmae,$pass,$db);

	if ($conn){
		echo " ";
	}
	else{
		echo "Gagal";
	}

?>