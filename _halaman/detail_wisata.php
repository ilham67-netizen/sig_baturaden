<?php
include "koneksi.php";
$id = $_GET['kd_wisata'];
$query = mysqli_query($connection, "SELECT * FROM data_wisata where kd_wisata= '$id' ");
$result = mysqli_fetch_array($query);
$title="Detail ".  $result['nama_wisata']; 
$query_gambar = mysqli_query($connection, "SELECT * FROM gambar_wisata where kd_wisata = '$result[kd_wisata]'");
$query_total = mysqli_query($connection, "SELECT count(kd_wisata) as total FROM gambar_wisata where kd_wisata = '$result[kd_wisata]'");
$total = mysqli_fetch_array($query_total);
?> <!-- Judul Halaman -->

  <div class="container ">
      <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 20px;">
      <!--Indicators-->
      <ol class="carousel-indicators">
       
         <?php for ($i=0; $i <= $total['total'] ; $i++) { 
        ?>     
        <li data-target="#carousel-example-2" data-slide-to="<?= $i++; ?>" <?php if ($i == 1) {
          echo "class='active'";
        }?>></li>
        <?php
      } ?>
       <!--  <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li> -->
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <?php
        $no = 0;
         while($res = mysqli_fetch_array($query_gambar)){ $no++; ?>
          <div class="carousel-item <?php if($no == 1){ echo 'active'; }?>">
            <div class="view">
              <img class="d-block w-100" src="<?=templates()?>img/<?= $res['gambar_wisata']?>"
              alt="First slide" height="200">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h4 class="h3-responsive"><?= $result['nama_wisata']; ?></h4>
              <p>Wisata Banyumas</p>
            </div>
          </div>
        <?php } ?>

      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <br>
    <p style="text-align: justify;"><?= $result['deskripsi'];?></p>
    <br>
    <h3>Lokasi Wisata</h3>
     <!-- <iframe src="https://www.google.com/maps/search/<?= $result['latitude']?>,<?= $result['longtitude']?>" width="100%" height="450" frameborder="0" style="border:0; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
      <iframe src="https://maps.google.com/maps?q=<?= $result['latitude']?>,<?= $result['longtitude']?>&hl=en&z=14&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

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
          <a href="<?=url('peta_wl')?>" class="btn btn-link-default ">
            <i class="material-icons">map</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('data')?>" class="btn btn-link-default active">
            <i class="material-icons">find_in_page</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?=url('login')?>" class="btn btn-link-default ">
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



