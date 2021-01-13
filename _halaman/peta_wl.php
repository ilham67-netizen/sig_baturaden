<?php
$title = "Beranda";
?>
<!-- Judul Halaman -->


<div class="container">
  <div id="mapid" style=" height: 81vh;"></div>
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>

  <script src="<?= assets() ?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
  <script src="<?= assets() ?>js/leaflet.ajax.js"></script>

  <script>
    var map = L.map('mapid').setView([-7.311512, 109.228919], 13);

    var layerkita = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 25,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox.streets'
    });
    map.addLayer(layerkita);



    function iconByName(name) {
      return '<i class="icon" style="background-color:' + name + ';border-radius:50%"></i>';
    }

    function featureToMarker(feature, latlng) {
      return L.marker(latlng, {
        icon: L.divIcon({
          className: 'marker-' + feature.properties.amenity,
          html: iconByName(feature.properties.amenity),
          iconUrl: '../images/markers/' + feature.properties.amenity + '.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          shadowSize: [41, 41]
        })
      });
    }

    var baseLayers = [{
        name: "OpenStreetMap",
        layer: layerkita
      },
      {
        name: "OpenCycleMap",
        layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
      },
      {
        name: "Outdoors",
        layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
      }
    ];


    function style(feature) {
      return {
        weight: 1,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
        fillColor: getColor(feature.properties.density)
      };
    }

    function highlightFeature(e) {
      var layer = e.target;

      layer.setStyle({
        weight: 3,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
      });

      if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
      }

    }



    function resetHighlight(e) {
      var layer = e.target;

      layer.setStyle({
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
      });
    }

    function zoomToFeature(e) {
      map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
      layer.on({
        // mouseover: highlightFeature,
        // mouseout: resetHighlight,
        // click: zoomToFeature
      });
    }

    <?php
    include "koneksi.php";
    $data = mysqli_query($connection, "SELECT * FROM peta_wisata ");
    while ($d = mysqli_fetch_array($data)) {
    ?>
      var myStyle<?= $d['kd_peta'] ?> = {
        "color": "white",
        "weight": 2,
        "dashArray": '3',
        "fillOpacity": 0.7,
        "fillColor": "<?= $d['warna'] ?>"
      }
    <?php
      $arraydes[] = '{
        name: "' . str_replace('_', ' ', $d['nama_peta']) . '",
        icon: iconByName("' . $d['warna'] . '"),
        layer:  new L.GeoJSON.AJAX(["assets/geojson/' . $d['geojson_file'] . '"] ,{onEachFeature:onEachFeature,style:myStyle' . $d['kd_peta'] . ',pointToLayer: featureToMarker, clickable: false }).addTo(map)
      }';
    }
    # code...



    ?>

    var overLayers = [
      <?= implode(',', $arraydes); ?>
    ];
  </script>

</div>

<div class="footer">

  <div class="no-gutters">
    <div class="col-auto mx-auto">
      <div class="row no-gutters justify-content-center">
        <div class="col-auto">
          <a href="<?= url('beranda') ?>" class="btn btn-link-default ">
            <i class="material-icons">home</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?= url('peta_wl') ?>" class="btn btn-link-default active ">
            <i class="material-icons">map</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?= url('data') ?>" class="btn btn-link-default ">
            <i class="material-icons">find_in_page</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?= url('login') ?>" class="btn btn-link-default ">
            <i class="material-icons">edit</i>
          </a>
        </div>
        <div class="col-auto">
          <a href="<?= url('tentang') ?>" class="btn btn-link-default ">
            <i class="material-icons">info</i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer ends-->

</div>
<div id="mymodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <center>
          <img src="<?= templates() ?>img/spinner2.gif" id="spin" align="center">
        </center>
        <div class="fetched-data">

        </div>
      </div>
    </div>

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script type="text/javascript">
  var planes = [
    <?php
    $result2 = mysqli_query($connection, "SELECT * FROM data_wisata order by kd_wisata asc");
    while ($row2 = mysqli_fetch_array($result2)) {
      # code...
    ?>['<?php echo $row2['kd_wisata']; ?>', '<?php echo $row2['nama_wisata']; ?>', <?php echo $row2['latitude']; ?>, <?php echo $row2['longtitude']; ?>],
    <?php
    } ?>
  ];
  for (var i = 0; i < planes.length; i++) {
    marker = new L.marker([planes[i][2], planes[i][3]])
      .bindPopup(planes[i][1])
      .addTo(map);

    marker.myID = i;
    marker.bindPopup(planes[i][1]).on('click', function(e) {
      var i = e.target.myID;
      u = planes[i][0];
      // console.log(planes[u]);
      jQuery(document).ready(function($) {

        $('#mymodal').modal('show').on('shown.bs.modal', function(e) {

          $.ajax({
            type: 'get',
            url: "_halaman/modal_detail_marker.php",
            data: 'kd_wisata=' + u,
            beforeSend: function() { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
              $('#spin').show();

            },
            success: function(data) {
              $('#spin').hide();

              $('.fetched-data').html(data);

            },

          });
        });
        $("#mymodal").modal('hide').on("hidden.bs.modal", function() {
          $('#isian').remove();

        });
      });
    });

  }
</script>