<?php
$title="Edit Data "; 
$url='edit_data';
session_start();
if(isset($_SESSION['status']) != 'login'){
  ?>
  <script type="text/javascript">
    window.location = "<?= url('login')?>";
  </script>
  <?php
}

if(isset($_POST['simpan'])){
  include 'koneksi.php';
  $kd_wisata=  $_POST['kd_wisata'];
  $nama_wisata = $_POST['nama_wisata'];
  $latitude = $_POST['latitude'];
  $longtitude = $_POST['longtitude'];
  $alamat = $_POST['alamat'];
  $deskripsi=$_POST['deskripsi'];

  mysqli_query($connection,"UPDATE data_wisata set nama_wisata='$nama_wisata', latitude='$latitude', longtitude='$longtitude', alamat='$alamat', deskripsi='$deskripsi' where kd_wisata='$kd_wisata'");
  ?>
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location = "<?= url('edit_data')?>";
  </script>

  <?php

}
if(isset($_GET['hapus'])){
  include 'koneksi.php';
  $kd_wisata = $_GET['kd_wisata'];
  mysqli_query($connection,"DELETE from data_wisata where kd_wisata='$kd_wisata'");
  $data = mysqli_query($connection, "SELECT * FROM gambar_wisata where kd_wisata = '$kd_wisata'");
  while($d = mysqli_fetch_array($data)){
    $target = "assets/templates/img/".$d['gambar_wisata'];

    if (file_exists($target)) {
      unlink($target);     
    }
  }
  mysqli_query($connection,"DELETE from gambar_wisata where kd_wisata='$kd_wisata'");
}

if(isset($_GET['ubah']) AND isset($_GET['kd_wisata'])) {
  $id=$_GET['kd_wisata'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from data_wisata where kd_wisata='$id'");
  $d = mysqli_fetch_array($data);
  

  $nama_wisata= $d['nama_wisata'];
  $latitude= $d['latitude'];
  $longtitude=$d['longtitude'];
  $alamat=$d['alamat'];
  $deskripsi=$d['deskripsi'];
  $gambar = mysqli_query($connection,"SELECT * from gambar_wisata where kd_wisata='$id'");
  
  ?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('kd_wisata',$id)?>

      <div class="form-group">
        <label>Nama Wisata</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_wisata', $nama_wisata)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Latitude</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('latitude', $latitude)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Longtitude</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('longtitude',  $longtitude)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <div class="row">
          <div class="col-md-6">
            <textarea rows="3" name="alamat" class="form-control" rows="10" style="width: 100%;"><?= $alamat; ?></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <div class="row">
          <div class="col-md-6">
            <textarea name="deskripsi"  id="editor1" rows="10" style="width: 100%;"><?= $deskripsi; ?></textarea>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-12"><h4>Gambar Wisata</h4></div>
       <?php $no = 1;
       while ($dagam = mysqli_fetch_array($gambar)) {
        ?>

        <div class="col-6" style="text-align: center; margin-top: 10px;"><?= $no++; ?>. <img src="<?=templates()?>img/<?= $dagam['gambar_wisata']; ?>" width="150" height="100"><br><a href="<?=url('hapus_gambar')?>&&token_fot=<?= $dagam['token']; ?>&&kd_wisata=<?= $dagam['kd_wisata']; ?>" class="btn btn-danger" style="margin-top: 10px;" onclick="return confirm('Hapus Gambar?')">Hapus</a></div>
        <?php
      } ?>
    </div>
    <div class="dropzone" style="margin-top: 50px; margin-bottom: 50px;">

      <div class="dz-message" style="height: 100px;">
        <center><h3 style="margin-top: 50px;"> Klik atau Drop Gambar Di sini</h3><br><span data-feather="upload-cloud"></span></center>
      </div>

    </div>


    <div class="form-group">
     <center> <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
      <a href="<?=url($url)?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a></center>
    </div>

  </form>


<?php } else {?>


  <div class="container">
    <div class="card-body p-0">

      <a href="<?= url('tambah_wisata') ?>" class="btn btn-primary btn-lg btn-block" style="margin-top: 20px; margin-bottom: 20px;">TAMBAH</a>
      <div class="table-responsive">
        <table class="table m-0">
         <?php
         include "koneksi.php";
         $query = mysqli_query($connection,"SELECT * FROM data_wisata ORDER BY kd_wisata ");
         ?>
         <thead>
          <tr>
            <th width="60%">Nama Wisata</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if(mysqli_num_rows($query)>0){ ?>
            <?php

            while($data = mysqli_fetch_array($query)){
              ?>
              <tr>

                <td><?php echo $data["nama_wisata"]; ?></td>

                <td>

                  <a href="<?=url($url.'&ubah&kd_wisata='.$data['kd_wisata'])?>" class="btn btn-primary">        

                    <i class="material-icons ">create</i></a>

                    <a href="<?=url($url.'&hapus&kd_wisata='.$data['kd_wisata'])?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"> <i class="material-icons ">delete_forever</i></a> </a>
                  </td>
                </tr>
              <?php  } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>



<?php } ?>
<div class="footer">

  <div class="no-gutters">
    <div class="col-auto mx-auto">
      <div class="row no-gutters justify-content-center">
        <div class="col-auto">
          <a href="<?=url('beranda')?>" class="btn btn-link-default ">
            <i class="material-icons">home</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('peta_wl')?>" class="btn btn-link-default  ">
            <i class="material-icons">map</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('data')?>" class="btn btn-link-default ">
            <i class="material-icons">find_in_page</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('login')?>" class="btn btn-link-default active">
            <i class="material-icons">edit</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('tentang')?>" class="btn btn-link-default ">
            <i class="material-icons">info</i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer ends-->

</div>
