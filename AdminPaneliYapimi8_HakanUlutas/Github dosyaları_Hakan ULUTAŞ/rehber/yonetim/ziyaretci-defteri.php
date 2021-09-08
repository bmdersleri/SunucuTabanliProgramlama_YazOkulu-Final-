<?php include 'header.php'; ?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ziyaretçi Defteri</h1>
			</div>
		</div>
		


		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th></th>
							<th>Ziyaretçi Adı</th>
							<th>Yorum</th>
							<th>Tarih</th>
							<th width="50">Sil</th>
						</tr>
					</thead>
					<tbody>



						<?php 
						$cek=$conn->prepare("SELECT * FROM ziyaretci_defteri");
						$cek->execute();
						while ($row=$cek->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $row['ziyaret_id']; ?></td>
								<td><?php echo $row['ziyaret_adi']; ?></td>
								<td><?php echo $row['ziyaret_yorum']; ?></td>
								<td><?php echo $row['ziyaret_tarih']; ?></td>
								<td><a href="silme/ziyaret_sil.php?id=<?php echo $row['ziyaret_id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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