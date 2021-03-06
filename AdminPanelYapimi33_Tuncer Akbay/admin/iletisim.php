<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$personel_no=get_safe_value($con,$_GET['personel_no']);
		$delete_sql="delete from iletisim where personel_no='$personel_no'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from iletisim order by personel_no asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">ILETISIM </h4>
				   <h4 class="box-link"><a style="color:blue"; href="manage_iletisim.php">Personel Ekle</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Personel No</th>
							   <th>Ad Soyad</th>
							   <th>Eposta</th>
							   <th>Dahili</th>
							   <th>Gorevi</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['personel_no']?></td>
							   <td><?php echo $row['personel_adi']?></td>
							   <td><?php echo $row['eposta']?></td>
							   <td><?php echo $row['dahili']?></td>
							   <td><?php echo $row['gorevi']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&personel_no=".$row['personel_no']."'>Delete</a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>