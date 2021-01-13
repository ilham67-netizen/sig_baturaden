<?php
include 'koneksi.php';
if (isset($_POST['token'])) {
	$token = $_POST['token'];
	$data = mysqli_query($connection, "SELECT * FROM gambar_wisata where token = '$token'");
	$data_gam = mysqli_fetch_array($data);
	$target = "assets/templates/img/".$data_gam['gambar_wisata'];

	if (file_exists($target)) {
		unlink($target);	
	}
	$hapus = mysqli_query($connection,"DELETE from gambar_wisata where token='$token'");
}
elseif (isset($_GET['token_fot'])) {
	$token = $_GET['token_fot'];
	$kd_wisata = $_GET['kd_wisata'];
	$data = mysqli_query($connection, "SELECT * FROM gambar_wisata where token = '$token'");
	$data_gam = mysqli_fetch_array($data);
	$target = "assets/templates/img/".$data_gam['gambar_wisata'];

	if (file_exists($target)) {
		unlink($target);  
	}
	$hapus = mysqli_query($connection,"DELETE from gambar_wisata where token='$token'");
	?>
	<script>
		window.location="?halaman=edit_data&ubah&kd_wisata=<?= $kd_wisata;?>";
	</script>
	<?php
}

?>