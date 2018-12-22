<?php 
require_once("koneksi.php");
$query1= mysqli_query($con, "select * from admin where id_admin = '". $_GET['id_admin']."'");
while ($record = mysqli_fetch_array($query1)) {
	?>

	<!DOCTYPE html>
 <html>
 <head>
 <style type="text/css">
 	.style1 {color: #FFFFFF}
 </style>
 	<title></title>
 </head>
 <body>
 
 <h3>TABEL Admin</h3>
<form action="" method="post">
<table width="200" border="0">
	<tr>
		<td>id</td>
		<td><input type="text" name="id" value="<?php echo $record['id_admin']?>" readonly="readonly"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input name="username" type="text" value="<?php echo $record['username']?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input name="password" type="password" id="password" value="<?php echo $record['password']?>"></td>
	</tr>
	<tr>
		<td colspan="2"><input name="update" type="submit" value="Update" id="update"></td>
	</tr>
</table>
<?php } ?>
</form>
 </body>
 </html>

 <?php defined('BASEPATH') OR exit('No direct script access allowed');
 if (isset($_POST['update'])) {
 	$query = "UPDATE `admin` SET `username` = '".$_POST['username']."', `password` = '".$_POST['password']."' WHERE `admin`.`id_admin` ='".$_POST['id']."';";
 	$hasil=mysqli_query($con, $query) or die (mysqli_error($con));
 

  ?>
    <script>
alert("data sukses Diupdate");
window.location='dataadmin.php';</script>
	<?php } ?>
  



 