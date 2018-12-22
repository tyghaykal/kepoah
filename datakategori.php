<?php 
require_once("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coba Kategori</title>
</head>
<body>

<body>
 <h3>TABEL KATEGORI
 </h3>
 <form action="" method="post">
 	<a href="tambahkategori.php">TAMBAH</a> 	
 </form>
 <table border="1px">
 		<tr>
 			<th><CENTER>ID</th>
 			<th><CENTER>Kategori</th>
 		</tr>
 			<?php 
 			$query=mysqli_query($con,"SELECT * from kategori");
 			while($record=mysqli_fetch_array($query)){
 			 ?>
 		<tr class="active">
 			<td><CENTER style=""><?php  echo $record['id_kategori'];?></td>
 			<td><?php  echo $record['nama_kategori'];?></td>
 		</tr>
 			<?php
 			}
 			?>
 </table>
 </body>
 </html>
<?php 
mysqli_close($con);
?>