<?php include 'header.php'; ?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Blog Ekle</h1>
			</div>
		</div>
		


		<div class="panel-body">

			<form method="POST" action="fonksiyon.php" enctype="multipart/form-data">
				
				<div class="form-group">
					<label>Blog Başlık </label>
					<input type="text" class="form-control" name="baslik">
				</div>

				<div class="form-group">
					<label>Blog Yazı İçerik</label>
					<textarea class="form-control" name="text"></textarea>
				</div>

				<div class="form-group">
					<label>Blog Görsel </label>
					<input type="file" class="form-control" name="resim">
				</div>


				<button type="submit" class="btn btn-primary btn-block" name="blogEkle">Blog Ekle</button>


			</form>

		</div>



		
	</div>
</div>



<?php include 'footer.php'; ?>