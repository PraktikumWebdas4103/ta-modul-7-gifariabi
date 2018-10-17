<?php 
include "aksi.php";
include "koneksi.php";
$sql1 ="SELECT * FROM data";
$sele = mysqli_query($conn,$sql1);

?>
<button><a href="input.php">Tambah Data</a></button>
<button><a href="cari.php">Cari</a></button>
<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
			<?php
				$no = 1;
				while($d = mysqli_fetch_array($sele)){
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $d["nama"]; ?></td>
				<td><?php echo $d["nim"]; ?></td>
				<td>
					<a href="delete.php?nim=<?php echo $data['nim']; ?>">Delete</a>
				</td>
			</tr>
			<?php $no++; ?>
			<?php } ?>
</table>