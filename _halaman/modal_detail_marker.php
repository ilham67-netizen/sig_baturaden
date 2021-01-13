


<div id="isian">
	<div class="table-responsive">
		<?php
		function limit_words($string, $word_limit)
		{
			$words = explode(" ", $string);
			return implode(" ", array_splice($words, 0, $word_limit));
		}
  # code...
		include("../koneksi.php");
		$id = $_GET['kd_wisata'];
		$sql = "SELECT * FROM data_wisata  where kd_wisata ='$id'";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_array($result);
		$gambar_query = mysqli_query($connection, "SELECT * FROM gambar_wisata where kd_wisata = '$row[kd_wisata]' LIMIT 1 ");
		$gam = mysqli_fetch_array($gambar_query);
		?>
		<center><img src="assets/templates/img/<?= $gam['gambar_wisata'];?>" width="300" height="200"></center>
		<center><h3><?= $row['nama_wisata']; ?></h3></center>
		<p>Alamat:<br><?= $row['alamat']; ?></p>
		<p style="text-align: justify;">Deskripsi: <br><?= limit_words($row['deskripsi'] ,20); ?>...<a href="?halaman=detail_wisata&&kd_wisata=<?= $id;?>">baca lebih lanjut</a></p>
		<?php

		?>
	</div>
</div>


