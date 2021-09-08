<?php include 'header.php'; 
$hakkimizdaYonetim = $conn->query("SELECT * FROM hakkimizda")->fetch(PDO::FETCH_ASSOC);
?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hakkımızda Yönetim</h1>
			</div>
		</div>
		


		<div class="panel-body">



			<form method="POST" action="fonksiyon.php" enctype="multipart/form-data">
				

				<div class="form-group">
					<label>Görsel </label>
					<input type="file" class="form-control" name="resim">
				</div>


					<div class="form-group">
					<label>Hakkımızda</label>
					<textarea class="form-control" name="hakkimizda" rows="8"><?php echo $hakkimizdaYonetim['hakkimizda']; ?></textarea>
				</div>



				<button type="submit" class="btn btn-primary btn-block" name="hakkimizdaGuncelle">Güncelle</button>


			</form>

			<div style="margin-top: 25px;">
				
			</div>

			
			<!-- /.table-responsive -->

		</div>



		
	</div>
</div>



<?php include 'footer.php'; ?>