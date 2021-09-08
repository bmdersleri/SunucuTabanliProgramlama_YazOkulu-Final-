<?php include 'header.php'; 
$siteYonetim = $conn->query("SELECT * FROM site_ayar")->fetch(PDO::FETCH_ASSOC);
?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Site Yönetim</h1>
			</div>
		</div>
		


		<div class="panel-body">



			<form method="POST" action="fonksiyon.php" enctype="multipart/form-data">
				

				<div class="form-group">
					<label>Logo </label>
					<input type="file" class="form-control" name="logo">
				</div>


				<div class="form-group">
					<label>Favicon </label>
					<input type="file" class="form-control" name="favicon">
				</div>




				<div class="form-group">
					<label>Title </label>
					<input type="text" class="form-control" name="title" value="<?php echo $siteYonetim['title']; ?>">
				</div>


				<div class="form-group">
					<label>Google Maps</label>
					<textarea class="form-control" name="google_maps" rows="8"><?php echo $siteYonetim['google_maps']; ?></textarea>
				</div>




				<div class="form-group">
					<label>Facebook </label>
					<input type="text" class="form-control" name="fb" value="<?php echo $siteYonetim['fb']; ?>">
				</div>




				<div class="form-group">
					<label>İnstagram </label>
					<input type="text" class="form-control" name="ig" value="<?php echo $siteYonetim['ig']; ?>">
				</div>




				<div class="form-group">
					<label>Copyright </label>
					<input type="text" class="form-control" name="copy" value="<?php echo $siteYonetim['copy']; ?>">
				</div>




				<button type="submit" class="btn btn-primary btn-block" name="siteAyarGuncelle">Güncelle</button>


			</form>

			<div style="margin-top: 25px;">
				
			</div>

			
			<!-- /.table-responsive -->

		</div>



		
	</div>
</div>



<?php include 'footer.php'; ?>