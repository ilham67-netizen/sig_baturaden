<?php
$title="Beranda"; 
?> <!-- Judul Halaman -->

<div class="container ">
    <!-- page content here -->
    <section class="jumbotron text-center mt-3 shadow-sm bgan">
        <div class="container">
            <img src="<?=templates()?>img/logo_banyumas.png" alt="logo" class="logo-small">
            <h1 class="jumbotron-heading font-weight-normal">WebGIS<b> Pariwisata</b></h1>
            <p class="lead">Kabupaten Banyumas, Provinsi Jawa Tengah</p>

        </div>
    </section>
    <div class="container">

      <!--   <div class="row">
            <div class="swiper-container icon-slide mb-4">
                <div class="swiper-wrapper">
                    <a href="#collapsePeta" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay gradient-primary"></div>
                            <i class="material-icons text-templates">map</i>
                        </div>
                        <p class="small mt-2">Peta Wilayah</p>
                    </a>
                    <a href="<?=url('data')?>" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay gradient-primary"></div>
                            <i class="material-icons text-templates">find_in_page</i>
                        </div>
                        <p class="small mt-2">Data Desa</p>
                    </a>

                    <a href="<?=url('tentang')?>" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay gradient-primary"></div>
                            <i class="material-icons text-templates">info</i>
                        </div>
                        <p class="small mt-2">About</p>
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div> -->
    </div>



    <br>
    <div class="row">
        <div class="container">
            <!-- Swiper -->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?=templates()?>img/telaga_sunyi.jpg"
          alt="First slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Telaga Sunyi</h3>
        <p>Baturaden</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?=templates()?>img/hutan_pinus.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Hutan Pinus</h3>
        <p>Limpakuwus Baturaden</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?=templates()?>img/curug_jenggala.jpg"
          alt="Third slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Curug Jenggala</h3>
        <p>Baturaden</p>
      </div>
    </div>
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
<!--/.Carousel Wrapper-->
</div>

<div class="container bg-white" id="collapsePeta">

</div>
</div>
</div>

<div class="footer">

    <div class="no-gutters">
        <div class="col-auto mx-auto">
            <div class="row no-gutters justify-content-center">
                <div class="col-auto">
                    <a href="<?=url('beranda')?>" class="btn btn-link-default active">
                        <i class="material-icons">home</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?=url('peta_wl')?>" class="btn btn-link-default ">
                        <i class="material-icons">map</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?=url('data')?>" class="btn btn-link-default ">
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



