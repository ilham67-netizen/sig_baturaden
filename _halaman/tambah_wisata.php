<?php
session_start();
include "koneksi.php";
  $title="Tambah Wisata"; 
  $carikode = mysqli_query($connection, "SELECT max(kd_wisata) as kd_wisata from data_wisata") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 3);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_oto = "KW".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_oto = "KW0001";
 }
?> <!-- Judul Halaman -->
<div class="container">
  <form method="post" enctype="multipart/form-data" action="<?= url('aksi_tambah')?>">

    <div class="form-group">
      <label>Kode Wisata</label>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="form-control" id="kd_wisata" name="kd_wisata" readonly="" value="<?= $kode_oto; ?>">
        </div>
      </div>
    </div>
 <div class="form-group">
      <label>Nama Wisata</label>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="form-control" name="nama_wisata" value="" required="" autocomplete="off">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>Latitude</label>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="form-control" name="latitude" value="" required="" autocomplete="off">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Longtitude</label>
      <div class="row">
        <div class="col-md-6"> 
          <input type="text" class="form-control" name="longtitude" value="" required="" autocomplete="off">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <div class="row">
        <div class="col-md-6">
          <textarea rows="3" name="alamat" class="form-control" rows="10" style="width: 100%;"></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Deskripsi</label>
      <div class="row">
        <div class="col-md-6">
          <textarea name="deskripsi"  id="editor1" rows="10" style="width: 100%;"></textarea>
        </div>
      </div>
    </div>
    
  <div class="dropzone" style="margin-top: 50px; margin-bottom: 50px;">

    <div class="dz-message" style="height: 100px;">
      <center><h3 style="margin-top: 50px;"> Klik atau Drop Gambar Di sini</h3><br><span data-feather="upload-cloud"></span></center>
    </div>

  </div>


  <div class="form-group">
   <center> <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info"><i class="fa fa-save"></i></input>
    <a href="<?=url('edit_data')?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a></center>
  </div>

</form>
</div>