<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="Maxartkiller">
  <title><?=isset($title)?$title:'WebGis Losari'?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=templates()?>vendor/materializeicon/material-icons.css">

  <!-- Roboto fonts CSS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?=templates()?>vendor/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link href="<?=templates()?>vendor/swiper/css/swiper.min.css" rel="stylesheet">
  <link src="<?= templates() ?>custom_dropzone/dropzone.min.css">
  <!-- Custom styles for this template -->
  <link href="<?=templates()?>css/style.css" rel="stylesheet">



  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <link rel="stylesheet" href="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />

  <style type="text/css"> #mapid {height: 100vh} 
  .icon {
    display: inline-block;
    margin: 2px;
    height: 16px;
    width: 16px;
    background: radial-gradient(#fd2da0, #6600ff);
  }
  .swiper-container {
    width: 100%;
    height: 100%;
  }
  .dropzone {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 2px dashed #0087F7;
  }
  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
  .loaderan {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 99;
    background: radial-gradient(#fd2da0, #6600ff);
  }
  .sidemenu-open{
    background: radial-gradient(#fd2da0, #6600ff);
    color: white;
  }
  .list-group-item-action{
    color: #ffff;
  }
  .list-group-item.active{
    color: #6f03f9;
  }
  .btn.btn-link-default.active{
    color: #a30bea;
  }
  .footer .btn i:after{
    background-color: #df0cd4;
  }
  .bgan{
    background: radial-gradient(#fd2da0, #6600ff); 
    color: white;
  }
  .icon-bar {
    background: url('<?=assets()?>js/leaflet-panel-layers-master/examples/images/icons/bar.png') center center no-repeat;
  }
  .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
  .legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
</style>



</head>


