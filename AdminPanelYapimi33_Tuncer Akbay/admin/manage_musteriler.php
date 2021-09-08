<?php
require('top.inc.php');
isAdmin();
$musteri_adi='';
$msg='';
$telefon_no='';
$eposta='';
$musteri_no='';
if(isset($_GET['musteri_no']) && $_GET['musteri_no']!=''){
	$musteri_no=get_safe_value($con,$_GET['musteri_no']);
	$res=mysqli_query($con,"select * from musteriler where musteri_no='$musteri_no'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$musteri_adi=$row['musteri_adi'];
	}else{
		header('location:musteriler.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$musteri_adi=get_safe_value($con,$_POST['musteri_adi']);
	$telefon_no=get_safe_value($con,$_POST['telefon_no']);
	$eposta=get_safe_value($con,$_POST['eposta']);
	$musteri_no=get_safe_value($con,$_POST['musteri_no']);
	$res=mysqli_query($con,"select * from musteriler where musteri_adi='$musteri_adi'");
	$res=mysqli_query($con,"select * from musteriler where telefon_no='$telefon_no'");
	$res=mysqli_query($con,"select * from musteriler where eposta='$eposta'");
	$res=mysqli_query($con,"select * from musteriler where musteri_no='$musteri_no'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['musteri_no']) && $_GET['musteri_no']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($musteri_no==$getData['musteri_no']){
			
			}else{
				$msg="BU MUSTERI ZATEN LISTEDE VAR";
			}
		}else{
			$msg="BU MUSTERI ZATEN LISTEDE VAR";
		}
	}
	
	if($msg==''){
		if(isset($_GET['musteri_no']) && $_GET['musteri_no']!=''){
			mysqli_query($con,"update musteriler set musteri_adi='$musteri_adi' where musteri_no='$musteri_no'");
			mysqli_query($con,"update musteriler set telefon_no='$telefon_no' where musteri_no='$musteri_no'");
			mysqli_query($con,"update musteriler set eposta='$eposta' where musteri_no='$musteri_no'");
			
		}else{
			mysqli_query($con,"insert into musteriler(musteri_no, musteri_adi,eposta, telefon_no) values('$musteri_no','$musteri_adi','$eposta','$telefon_no')");
		}
		
		header('location:musteriler.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>MUSTERI EKLEME SIHIRBAZI</strong> </div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">

									<input type="text" name="musteri_no" placeholder="musteri no giriniz" class="form-control" required value="<?php echo $musteri_no?>"> <br>
									<input type="text" name="musteri_adi" placeholder="musteri adi giriniz" class="form-control" required value="<?php echo $musteri_adi?>"> <br>
									<input type="text" name="eposta" placeholder="yeni eposta bilgisi giriniz" class="form-control" required value="<?php echo $eposta?>"> <br>
									<input type="text" name="telefon_no" placeholder="yeni telefon_no bilgisi giriniz" class="form-control" required value="<?php echo $telefon_no?>"> <br>

								</div>
							   <button musteri_no="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span musteri_no="payment-button-amount">KAYDET</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>