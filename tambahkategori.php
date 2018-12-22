<?php 
require_once("koneksi.php");
 ?>

 <h3>TAMBAH ADMIN</h3>
 <form form action="" method="post">
 	<table>
 		<tr>
 			<td>Kategori</td>
 			<td><input type="text" name="kategori"></td>
 		</tr>
 		<tr>
 			<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
 		</tr>
 	</table>
 </form>
 <?php 
 if(isset($_POST['submit'])){
 	$query = "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES (NULL, '".$_POST['kategori']."');";

 	$hasil = mysqli_query($con,$query) or die(mysqli_error());
 	
  ?>

  <script>
  alert("Data sukses dimasukkan");
  window.location="datakategori.php";</script>

  <?php 
  }
   ?>