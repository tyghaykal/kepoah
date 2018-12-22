<?php 
require_once("koneksi.php");
 ?>

 <h3>TAMBAH BERITA</h3>
 <form form action="" method="post">
 	<table>
 		<tr>
 			<td>Kategori Berita</td>
 			<td><input type="text" name="kategori"></td>
 		</tr>
 		<tr>
 			<td>Judul</td>
 			<td><input type="text" name="judul"></td>
 		</tr>
 		<tr>
 			<td>Isi</td>
 			<td><input type="text" name="isi"></td>
 		</tr>
 		<tr>
 			<td>Tanggal</td>
 			<td><input type="date" name="tanggal"></td>
 		</tr>
 		<tr>

 			<td colspan="4"><input type="submit" name="submit" value="Insert"></td>
 		</tr>
 	</table>
 </form>
 <?php 
 if(isset($_POST['submit'])){
 	$query = "INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul_berita`, `isi_berita`, `tanggal_berita`) VALUES (NULL, '".$_POST['kategori']."', '".$_POST['judul']."', '".$_POST['isi']."', '".$_POST['tanggal']."');";

 	$hasil = mysqli_query($con,$query) or die(mysqli_error());
 	
  ?>

  <script>
  alert("Data sukses dimasukkan");
  window.location="databerita.php";</script>

  <?php 
  }
   ?>