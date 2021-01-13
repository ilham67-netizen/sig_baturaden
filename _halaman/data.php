<?php
$title="Tempat Wisata"; 
?> <!-- Judul Halaman -->


<div class="container bg-white">
    <center><h1>DAFTAR WISATA</h1></center>
    <div style="margin-top : 50px; margin-bottom : 20px;" id="data">

    </div>

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
                    <a href="<?=url('peta_wl')?>" class="btn btn-link-default  ">
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
