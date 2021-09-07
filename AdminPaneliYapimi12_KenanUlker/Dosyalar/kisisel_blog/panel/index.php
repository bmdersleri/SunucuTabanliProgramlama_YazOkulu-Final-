<?php include 'inc/header.php'; 


?>



<div class="page-holder w-100 d-flex flex-wrap">
	<div class="container-fluid px-xl-5">






		<section class="py-5">
			<div class="row">


				<div class="col-md-12" >
					
					<div class="card">
						<div class="card-header">
							<h3 class="h6 text-uppercase mb-0">İletişim Mesajları</h3>
						</div>
						<div class="card-body">
							<p>Bu kısımdan iletişim mesjalarını görebilir ve silebilirsiniz.</p>

							<div class="table-responsive">
								
							<table id="myTable" class="table table-striped table-hover card-text">
								<thead>
									<tr>
										<th>#</th>
										<th>Adı ve Soyadı</th>
										<th>E-Mail</th>
										<th>Konu</th>
										<th>Mesaj</th>
										<th>Tarih</th>
										<td width="50"></td>

									</tr>
								</thead>
								<tbody>

									<?php 
									//İletişim formundan gelen mesajları gösterme
									$veriCek=$conn->prepare("SELECT * FROM mesajlar");
									$veriCek->execute();
									while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {  ?>


										<tr>
											<th scope="row"><?php echo $row['mesaj_id']; ?></th>
											<th scope="row"><?php echo $row['ad'] ?></th>
											<th scope="row"><?php echo $row['email'] ?></th>
											<th scope="row"><?php echo $row['konu'] ?></th>
											<th scope="row"><?php echo $row['mesaj'] ?></th>	
											<th scope="row"><?php echo $row['tarih'] ?></th>

											<th> <a href="ajax/mesaj_sil.php?id=<?php echo $row['mesaj_id'] ?>" class="btn btn-danger"><i class="fa fa-trash" > </i></a> </th>





										</tr>


									<?php } ?>


								</tbody>
							</table>
</div>
						</div>
					</div>







				</div>


			</div>
		</section>




	</div>



	<?php include 'inc/footer.php'; ?>

