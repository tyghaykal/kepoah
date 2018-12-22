<?php 
require_once("koneksi.php");
?>
<?php 
	
	$id = $_GET['id'];
 	$query = "DELETE FROM `berita` WHERE `berita`.`id_berita` = '$id'";
 	$hasil = mysqli_query($con,$query) or die(mysqli_error());

 	
  ?>
  


