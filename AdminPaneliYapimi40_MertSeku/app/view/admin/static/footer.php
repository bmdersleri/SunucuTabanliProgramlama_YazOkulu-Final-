	<div class="footer">
		<div class="copyright">
			<p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">teffo</a> 2021</p>
		</div>
	</div>
	</div>

	<script src="<?= admin_asset_url('vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/flot/jquery.flot.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/flot/jquery.flot.resize.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/jqvmap/js/jquery.vmap.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/jqvmap/js/jquery.vmap.usa.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/jquery.counterup/jquery.counterup.min.js') ?>"></script>

	<script src="<?= admin_asset_url('vendor/global/global.min.js') ?>"></script>
	<script src="<?= admin_asset_url('js/quixnav-init.js') ?>"></script>
	<script src="<?= admin_asset_url('js/custom.min.js') ?>"></script>

	<script src="<?= admin_asset_url('js/dashboard/dashboard-1.js') ?>"></script>

	<script src="<?= admin_asset_url('vendor/raphael/raphael.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/morris/morris.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/circle-progress/circle-progress.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/chart.js/Chart.bundle.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/gaugeJS/dist/gauge.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= admin_asset_url('vendor/summernote/js/summernote.min.js') ?>"></script>

	<script src="<?= admin_asset_url('js/plugins-init/summernote-init.js') ?>"></script>

	<script src="<?= asset_url('js/jquery.form.js') ?>"></script>

	<script type="text/javascript">
		$(".upload-btn").click(function() {
			$("#addimage  input[type=file]").click();
			$("#addimage input[type=file]").val('');
			$(".error").html('');
		});

		$("#addimage input[type=file]").change(function() {
			var val = $(this).val();
			if (val) {
				$("#addimage input[type=submit]").click();
			} else {
				$(".error").html('INCORRECT SELECTION');
			}
		});

		$("form#addimage").ajaxForm({
			beforeSend: function() {
				$(".loading").show();
			},
			uploadProgress: function(event, position, total, percentComplete) {

				$(".loading span").attr({
					'style': 'width: ' + percentComplete + '%'
				});
			},
			complete: function(xhr) {
				var obj = jQuery.parseJSON(xhr.responseText);
				if (obj.error) {
					$(".error").html('INCORRECT SELECTION');
				} else {
					$(".upload-image").attr('src', "<?= site_url() ?>" + obj.success + "?rand" + obj.rand);
					$(".upload-photos").append('<span class="img"><img src="' + "<?= site_url() ?>" + obj.success + "?rand" + obj.rand + '" width="200" alt="" /><a href="<?=admin_url()?>' + obj.page + '?id=' + obj.id + '&deleteSrc=' + obj.success + '" class="delete"><span class="fa fa-close"></span></span></span>');
				}
				$(".loading").hide();
			}
		});
	</script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$(function() {
			$("#teamlist").sortable();
		});

		function sirala() {
			var data = new Array();
			$('ul#teamlist li').each(function() {
				data.push($(this).attr("id"));
			});
			document.getElementById("sort").value = data;
		}
	</script>

	<script>
		$(function() {
			$("#photos").sortable();
		});

		function photosirala() {
			var data = new Array();
			$('div#photos span').each(function() {
				data.push($(this).attr("id"));
			});
			document.getElementById("sort").value = data;
		}
	</script>
<?php
//	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
?>
	</body>

	</html>
