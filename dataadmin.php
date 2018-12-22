<?php 
require_once("koneksi.php");?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Coba Koneksi</title>
 </head>
 <body>
 <h3>TABEL ADMIN</h3>
 <form action="" method="post">
 	<a href="tambahadmin.php">TAMBAH</a> 	
 </form>
 <table border="1px">
 		<tr>
 			<th><CENTER>
 				ID
 			</th>
 			<th><CENTER>
 				User
 			</th>
 			<th><CENTER>
 				Pass
 			</th>
 			<th><CENTER style=""><span class="style1">Aksi</span></th>
 		</tr>
 			<?php 
 			$query=mysqli_query($con,"SELECT * from admin");
 			while($record=mysqli_fetch_array($query)){
 			 ?>
 		<tr class="active">
 			<td><CENTER style=""><?php  echo $record['id_admin']; ?></td>
 			 <td><?php  echo $record['username'];?></td>
 			 <td><?php  echo $record['password'];?></td>
 			 <td> <CENTER style=""> <a href="updateadmin.php?id_admin=<?php echo $record['id_admin']?>" class="btn btn-xs btn-success">Update</a> <a href="deleteadmin.php?id_admin=<?php echo $record['id_admin']?>" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a> </td>

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