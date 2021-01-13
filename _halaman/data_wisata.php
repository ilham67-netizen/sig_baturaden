<?php 
function limit_words($string, $word_limit)
{
  $words = explode(" ", $string);
  return implode(" ", array_splice($words, 0, $word_limit));
}
include "../koneksi.php";
$halaman = 5;
$query = mysqli_query($connection, 'SELECT count(kd_wisata) as jumlah FROM data_wisata');
$total = mysqli_fetch_array($query);
$page = (isset($_POST['page']))? $_POST['page'] : 1;
$jumlah_number = 3;
$mulai = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
$mulai2 = ($page > 3) ? ($page * $halaman) - $halaman : 0;
$limit_start = ($page - 1) * $halaman;
$pages = ceil($total['jumlah']/$halaman);
$end_number = ($page < ($pages - $jumlah_number))? $page + $jumlah_number : $pages;
$query = mysqli_query($connection, "SELECT * FROM data_wisata LIMIT $limit_start, $halaman");
while ($data = mysqli_fetch_array($query)) {
  $gambar_query = mysqli_query($connection, "SELECT * FROM gambar_wisata where kd_wisata = '$data[kd_wisata]' LIMIT 1 ");
  $gam = mysqli_fetch_array($gambar_query);
 ?>
 <div class="col-md-4">
  <div class="card mb-2">
    <img class="card-img-top"
    src="assets/templates/img/<?= $gam['gambar_wisata'];?>"
    alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title"><?= $data['nama_wisata']; ?></h4>
      <p class="card-text">
        <?php $limit = limit_words($data['deskripsi'], 20);
        echo $limit."....";
        ?>
      </p>
      <a class="btn btn-primary" style="float: right;" href="?halaman=detail_wisata&&kd_wisata=<?= $data['kd_wisata'];?>">Detail</a>
    </div>
  </div>
</div>
<?php }?>

<nav aria-label="..." style="margin-bottom: 100px; float : right;">
  <ul class="pagination">
    <?php

    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
    $end_number = ($page < ($pages - $jumlah_number))? $page + $jumlah_number : $pages;



    if($page == 1){
      echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
      $link_prev = ($page > 1)? $page - 1 : 1;
      echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for($i = $start_number; $i <= $end_number; $i++){
      $link_active = ($page == $i)? ' active' : '';
      echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
    }

    if($page == $pages){
      echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
      echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
    } else {
      $link_next = ($page < $pages)? $page + 1 : $pages;
      echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
      echo '<li class="page-item halaman" id="'.$pages.'"><a class="page-link" href="#">Last</a></li>';
    }
    ?>
  </ul>
</nav>