<?php include 'header.php'; ?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Blog Yazıları</h1>
			</div>
		</div>
		


		<div class="panel-body">



			<form method="POST" action="fonksiyon.php" enctype="multipart/form-data">
				

				<div class="form-group">
					<label>Görsel </label>
					<input type="file" class="form-control" name="img">
				</div>


				<button type="submit" class="btn btn-primary btn-block" name="gorselEkle">Görsel Ekle</button>


			</form>

			<div style="margin-top: 25px;">
				
			</div>

			<div class="table-responsive mt-3">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th></th>
							<th> Görsel</th>
							<th width="50">Sil</th>
						</tr>
					</thead>
					<tbody>



						<?php 
						$cek=$conn->prepare("SELECT * FROM galeri");
						$cek->execute();
						while ($row=$cek->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><img style="height: 100px" src="../<?php echo $row['img']; ?>"></td>
								<td><a href="silme/galeri_sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
							</tr>
						<?php } ?>


					</tbody>
				</table>
			</div>
			<!-- /.table-responsive -->

		</div>



		
	</div>
</div>



<?php include 'footer.php'; ?>