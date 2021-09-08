<?php include 'header.php'; ?>



<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Son İletişim Mesajları</h1>
			</div>
		</div>
		


		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th></th>
							<th>Adı Soyadı</th>
							<th>E-Mail</th>
							<th>Mesaj</th>
							<th width="50">Sil</th>
						</tr>
					</thead>
					<tbody>



						<?php 
						$iletisimiCek=$conn->prepare("SELECT * FROM iletisim");
						$iletisimiCek->execute();
						while ($row=$iletisimiCek->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $row['iletisim_id']; ?></td>
								<td><?php echo $row['ad_soyad']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['mesaj']; ?></td>
								<td><a href="silme/mesaj_sil.php?id=<?php echo $row['iletisim_id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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