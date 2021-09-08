<?php
require('top.inc.php');
isAdmin();
$categories='';
$msg='';
$adet='';
$fiyat='';
$id='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from urunlistesi where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
	}else{
		header('location:urunler.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($con,$_POST['categories']);
	$adet=get_safe_value($con,$_POST['adet']);
	$fiyat=get_safe_value($con,$_POST['fiyat']);
	$id=get_safe_value($con,$_POST['id']);
	$res=mysqli_query($con,"select * from urunlistesi where categories='$categories'");
	$res=mysqli_query($con,"select * from urunlistesi where adet='$adet'");
	$res=mysqli_query($con,"select * from urunlistesi where fiyat='$fiyat'");
	$res=mysqli_query($con,"select * from urunlistesi where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="URUN ZATEN LISTEDE VAR";
			}
		}else{
			$msg="URUN ZATEN LISTEDE VAR";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update urunlistesi set categories='$categories' where id='$id'");
			mysqli_query($con,"update urunlistesi set adet='$adet' where id='$id'");
			mysqli_query($con,"update urunlistesi set fiyat='$fiyat' where id='$id'");
			
		}else{
			mysqli_query($con,"insert into urunlistesi(id, categories,fiyat, adet) values('$id','$categories','$fiyat','$adet')");
		}
		
		header('location:urunler.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>URUN EKLEME SIHIRBAZI</strong> </div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">

									<input type="text" name="id" placeholder="urun no giriniz" class="form-control" required value="<?php echo $id?>"> <br>
									<input type="text" name="categories" placeholder="urun adi giriniz" class="form-control" required value="<?php echo $categories?>"> <br>
									<input type="text" name="fiyat" placeholder="yeni fiyat bilgisi giriniz" class="form-control" required value="<?php echo $fiyat?>"> <br>
									<input type="text" name="adet" placeholder="yeni adet bilgisi giriniz" class="form-control" required value="<?php echo $adet?>"> <br>

								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">KAYDET</span>
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