<?php
require('top.inc.php');
isAdmin();
$personel_adi='';
$msg='';
$dahili='';
$eposta='';
$personel_no='';
$gorevi='';
if(isset($_GET['personel_no']) && $_GET['personel_no']!=''){
	$personel_no=get_safe_value($con,$_GET['personel_no']);
	$res=mysqli_query($con,"select * from iletisim where personel_no='$personel_no'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$personel_adi=$row['personel_adi'];
	}else{
		header('location:iletisim.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$personel_adi=get_safe_value($con,$_POST['personel_adi']);
	$dahili=get_safe_value($con,$_POST['dahili']);
	$eposta=get_safe_value($con,$_POST['eposta']);
	$personel_no=get_safe_value($con,$_POST['personel_no']);
	$gorevi=get_safe_value($con,$_POST['gorevi']);
	$res=mysqli_query($con,"select * from iletisim where personel_adi='$personel_adi'");
	$res=mysqli_query($con,"select * from iletisim where dahili='$dahili'");
	$res=mysqli_query($con,"select * from iletisim where eposta='$eposta'");
	$res=mysqli_query($con,"select * from iletisim where personel_no='$personel_no'");
	$res=mysqli_query($con,"select * from iletisim where gorevi='$gorevi'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['personel_no']) && $_GET['personel_no']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($personel_no==$getData['personel_no']){
			
			}else{
				$msg="BU PERSONEL ZATEN LISTEDE VAR";
			}
		}else{
			$msg="BU PERSONEL ZATEN LISTEDE VAR";
		}
	}
	
	if($msg==''){
		if(isset($_GET['personel_no']) && $_GET['personel_no']!=''){
			mysqli_query($con,"update iletisim set personel_adi='$personel_adi' where personel_no='$personel_no'");
			mysqli_query($con,"update iletisim set dahili='$dahili' where personel_no='$personel_no'");
			mysqli_query($con,"update iletisim set eposta='$eposta' where personel_no='$personel_no'");
			mysqli_query($con,"update iletisim set gorevi='$gorevi' where personel_no='$personel_no'");
			
		}else{
			mysqli_query($con,"insert into iletisim(personel_no, personel_adi,eposta, dahili, gorevi) values('$personel_no','$personel_adi','$eposta','$dahili','$gorevi')");
		}
		
		header('location:iletisim.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>PERSONEL EKLEME SIHIRBAZI</strong> </div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">

									<input type="text" name="personel_no" placeholder="personel no giriniz" class="form-control" required value="<?php echo $personel_no?>"> <br>
									<input type="text" name="personel_adi" placeholder="personel adi giriniz" class="form-control" required value="<?php echo $personel_adi?>"> <br>
									<input type="text" name="eposta" placeholder="yeni eposta bilgisi giriniz" class="form-control" required value="<?php echo $eposta?>"> <br>
									<input type="text" name="dahili" placeholder="yeni dahili bilgisi giriniz" class="form-control" required value="<?php echo $dahili?>"> <br>
									<input type="text" name="gorevi" placeholder="yeni gorev bilgisi giriniz" class="form-control" required value="<?php echo $gorevi?>"> <br>

								</div>
							   <button personel_no="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span personel_no="payment-button-amount">KAYDET</span>
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