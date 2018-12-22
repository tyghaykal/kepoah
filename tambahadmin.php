<?php 
require_once("koneksi.php");
 ?>

 <h3>TAMBAH ADMIN</h3>
 <form form action="" method="post">
 	<table>
 		<tr>
 			<td>Username</td>
 			<td><input type="text" name="username"></td>
 		</tr>
 		<tr>
 			<td>Password</td>
 			<td><input type="text" name="password"></td>
 		</tr>
 		<tr>
 			<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
 		</tr>
 	</table>
 </form>
 <?php 
 if(isset($_POST['submit'])){
 	$query = "INSERT INTO `admin` (`id_admin`,`username`,`password`) VALUES (NULL,'".$_POST['username']."','".$_POST['password']."') ";

 	$hasil = mysqli_query($con,$query) or die(mysqli_error());
 	
  ?>

  <script>
  alert("Data sukses dimasukkan");
  window.location="dataadmin.php";</script>

  <?php 
  }
   ?>