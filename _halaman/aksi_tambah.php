<?php
session_start();
if (isset($_SESSION['status']) == 'login'){
	# code...

	include 'koneksi.php';
	$kd_wisata=  $_POST['kd_wisata'];
	$nama_wisata = $_POST['nama_wisata'];
	$latitude = $_POST['latitude'];
	$longtitude = $_POST['longtitude'];
	$alamat = $_POST['alamat'];
	$deskripsi=$_POST['deskripsi'];

	mysqli_query($connection,"INSERT INTO data_wisata (kd_wisata, nama_wisata, latitude, longtitude, alamat, deskripsi) VALUES('$kd_wisata','$nama_wisata', '$latitude', '$longtitude', '$alamat', '$deskripsi')");
	?>
	<script type="text/javascript">
		window.alert("Sukses Disimpan");
		window.location = "<?= url('edit_data')?>";
	</script>
<?php }else{
	?>
	<script type="text/javascript">
		window.location = "<?= url('login')?>";
	</script>
	<?php
} ?>