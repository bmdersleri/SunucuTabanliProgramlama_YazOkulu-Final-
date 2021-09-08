<?php include 'header.php'; ?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Blog Yazıları</h1>
			</div>
		</div>
		


		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th></th>
							<th>Blog Başlık</th>
							<th>Blog Görsel</th>
							<th width="50">Sil</th>
						</tr>
					</thead>
					<tbody>



						<?php 
						$cek=$conn->prepare("SELECT * FROM blog");
						$cek->execute();
						while ($row=$cek->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['baslik']; ?></td>
								<td><img style="height: 100px" src="../<?php echo $row['resim']; ?>"></td>
								<td><a href="silme/blog_sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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