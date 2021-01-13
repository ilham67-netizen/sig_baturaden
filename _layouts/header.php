
<div class="wrapper homepage">
  <!-- header -->
  <div class="header">
    <div class="row no-gutters">
      <div class="col-auto">
        <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">menu</i></button>
      </div>
      <div class="col text-center"><img src="<?=templates()?>img/logo_banyumas.png" alt="" class="header-logo"></div>
      <div class="col-auto">
        <?php if (isset($_GET['halaman'])) {
          if($_GET['halaman'] == 'edit_data'){?>

            <a href="<?= url('edit_data')?>&&logout=true" onclick="return confirm('Apakah Anda Yakin ingin Logout?')" ><img src="<?= templates()?>img/power-button.png" style="width: 30px; height: 30px; margin-top: 10px; margin-right: 10px;"></a>
            <?php

          }
        } ?>
      </div>
    </div>
  </div>
  <?php
  
  if (isset($_GET['logout'])=="true") {

// menghapus semua session
    session_destroy();
    ?>
    <script type="text/javascript">
      window.location = "<?= url('login')?>";
    </script>
    <?php

  }
  ?>
