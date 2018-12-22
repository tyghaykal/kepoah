<?php 
require_once("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coba Berita</title>
</head>
<body>

<body>
 <h3>TABEL BERITA
 </h3>
 <a href="tambahberita.php">TAMBAH</a> 
 <table border="1px">
 	<thead>
 		<tr>
 		<th><CENTER>ID </th>
 		<th><CENTER>Kategori</th>
		<th><CENTER>Judul Berita</th>
 		<th><CENTER>Isi Berita</th>
 		<th><CENTER>Tanggal Berita</th>
 		</tr>
 			<?php 
 			$query=mysqli_query($con,"SELECT * from berita b join kategori k on b.id_kategori=k.id_kategori");
 			while($record=mysqli_fetch_array($query)){
 			 ?>
 		<tr class="active">
 			<td><CENTER style=""><?php  echo $record['id_berita'];?></td>
 			<td><?php  echo $record['nama_kategori'];?></td>
 			<td><?php  echo $record['judul_berita'];?></td>
 			<td><?php  echo $record['isi_berita'];?></td>
 			<td><?php  echo $record['tanggal_berita'];?></td>
 			<td><a href="deleteberita.php/?id= <?php 
 				echo $record['id_berita'];
 			?>">HAPUS</td>
 		</tr>
 			<?php
 			} 
 			?>
 </table>
 </body>
 </html>
 <?php 
 mysqli_close($con) ?>
