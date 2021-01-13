<?php
include "koneksi.php"; 
if ($_GET['kd_wisata'] == null || $_GET['kd_wisata'] == '') {
  echo "tidak terupload";
}else{
  $nama_file = $_FILES['userfile']['name'];
  $token = $_POST['token_foto'];
  $kd_wisata = $_GET['kd_wisata'];
  $typek = explode(".",$nama_file)[1];
  $ukuran_file = $_FILES['userfile']['size'];
  $tipe_file = $_FILES['userfile']['type'];
  $tmp_file = $_FILES['userfile']['tmp_name'];
  $path = "assets/templates/img/".$nama_file;
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
    	
      $query = mysqli_query($connection, "INSERT INTO gambar_wisata (token, kd_wisata ,gambar_wisata) VALUES ('$token', '$kd_wisata', '$nama_file')");
      
    }else{
      $query = mysqli_query($connection, "INSERT INTO gambar_wisata (token, error) VALUES ('$token', 'tidak bisa upload')");
    }
  }else{
   $query = mysqli_query($connection, "INSERT INTO gambar_wisata (token, error) VALUES ('$token', 'ukuran foto terlalu besar')");
 }
}
?>