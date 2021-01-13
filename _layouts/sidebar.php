<?php
if (isset($_GET['halaman'])) {
    $halman = $_GET['halaman'];
}else{
    $halman = 'beranda';
}

?>
  <div class="sidebar">
        <div class="mt-4 mb-3">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-60 border-0"><img src="<?=templates()?>img/thumbnail.png" alt=""></figure>
                </div>
                <div class="col pl-0 align-self-center">
                    <h5 class="mb-1">WebGIS Pariwisata</h5>
                    <p class="text-mute small">Kab. Banyumas Prov. Jawa Tengah</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group main-menu">
                    <a href="<?=url('beranda')?>" class="list-group-item list-group-item-action <?= $halman == 'beranda' ? 'active' : '' ?>"><i class="material-icons icons-raised">home</i>Home</a>
                    <a href="<?=url('peta_wl')?>" class="list-group-item list-group-item-action <?= $halman == 'peta_wl' ? 'active' : '' ?>"><i class="material-icons icons-raised">map</i>Peta</a>
                    <a href="<?=url('data')?>" class="list-group-item list-group-item-action <?= $halman == 'data' ? 'active' : '' ?>"><i class="material-icons icons-raised">find_in_page</i>Data Wisata</a>
                    <a href="<?=url('login')?>" class="list-group-item list-group-item-action <?= $halman == 'login' ? 'active' : '' ?>"><i class="material-icons icons-raised">edit</i>Edit Data</a>
                    <a href="<?=url('tentang')?>" class="list-group-item list-group-item-action <?= $halman == 'tentang' ? 'active' : '' ?>"><i class="material-icons icons-raised">info</i>Tentang</a>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="closesidemenu"><i class="material-icons icons-raised bg-dark ">close</i></a>






