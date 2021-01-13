<?php
$title="Login"; 
$url='edit_data';
session_start();
if(isset($_SESSION['status']) != 'login'){
  ?>
  




  <div class="row no-gutters login-row">
    <div class="col align-self-center px-3 text-center">
        <br>
        <img src="<?=templates()?>img/logo_banyumas.png" alt="logo" class="logo-small">
        <form class="form-signin mt-3 " method="post" action="<?=url('login_proses')?>" >
            <div class="form-group">
                <input type="text" id="username" name="username" class="form-control form-control-lg text-center" autocomplete="off" placeholder="Username" required autofocus>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control form-control-lg text-center" placeholder="Password" required>
            </div>
            <div class="col">
              <button  class="btn btn-default btn-lg btn-rounded shadow btn-block" style="background-color: #a30bea">Login</button>
          </div>

      </form>       



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
<?php }else{
    ?>
    <script type="text/javascript">
      window.location = "<?= url('edit_data')?>";
  </script>
  <?php
} ?>
<!-- login buttons -->

