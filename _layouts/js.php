

<script src="<?=templates()?>js/jquery-3.3.1.min.js"></script>
<script src="<?=templates()?>js/popper.min.js"></script>
<script src="<?=templates()?>vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

<!-- swiper js -->
<script src="<?=templates()?>vendor/swiper/js/swiper.min.js"></script>

<!-- cookie js -->
<script src="<?=templates()?>vendor/cookie/jquery.cookie.js"></script>
<script src="<?=templates()?>ckeditor/ckeditor.js"></script>
<!-- template custom js -->
<script src="<?=templates()?>js/main.js"></script>
<script src="<?=templates()?>custom_dropzone/dropzone.min.js"></script>

<!-- page level script -->
<script></script>
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

</script>
<script type="text/javascript">
	jQuery(document).ready(function($){
		load_data();
		function load_data(page){
			$.ajax({
				type: 'POST',
				url: '_halaman/data_wisata.php',
				data: {page:page},
				success: function(data) {

					$('#data').html(data);

				}
			})
			return false;

		}
		$(document).on('click', '.halaman', function(){
			var page = $(this).attr("id");
			load_data(page);
		});
	});
</script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
              <script type="text/javascript">
               if ($('#kd_wisata').val()) {
                 var id = $('#kd_wisata').val();
                 Dropzone.autoDiscover = false;
                 var foto_upload = new Dropzone(".dropzone", {
                  url: "<?=url('upload_gambar')?>&kd_wisata=" + id,
                  maxFilesize: 7,
                  method: "post",
                  acceptedFiles: ".jpg, .png, .jpeg",
                  paramName: "userfile",
                  dictInvalidFileType: "Type file ini tidak dizinkan",
                  addRemoveLinks: true,
                });
                 foto_upload.on("sending", function(a, b, c) {
                  a.token = Math.random();
                  c.append("token_foto", a.token);
                });

                 foto_upload.on("removedfile", function(a) {
                  var token = a.token;
                  $.ajax({
                    type: "POST",
                    data: {
                      token: token
                    },
                    url: "<?=url('hapus_gambar')?>",
                    cache: false,
                    dataType: 'json',
                    success: function() {
        // console.log("remove file sukses");
      },
      // error: function() {
      //   // console.log("remove file gagal");
      // }
    });
                });
               }
               else{
                 Dropzone.autoDiscover = false;
                 var foto_upload = new Dropzone(".dropzone", {
                  url: "<?=url('upload_gambar')?>&&kd_wisata=<?php if (isset($_GET['kd_wisata'])) { echo $_GET['kd_wisata']; }?>",
                  maxFilesize: 7,
                  method: "post",
                  acceptedFiles: ".jpg, .png, .jpeg",
                  paramName: "userfile",
                  dictInvalidFileType: "Type file ini tidak dizinkan",
                  addRemoveLinks: true,
                });
                 foto_upload.on("sending", function(a, b, c) {
                  a.token = Math.random();
                  c.append("token_foto", a.token);
                });

                 foto_upload.on("removedfile", function(a) {
                  var token = a.token;
                  $.ajax({
                    type: "POST",
                    data: {
                      token: token
                    },
                    url: "<?=url('hapus_gambar')?>",
                    cache: false,
                    dataType: 'json',
                    success: function() {
        // console.log("remove file sukses");
      },
      // error: function() {
      //   // console.log("remove file gagal");
      // }
    });
                });
               }


             </script>