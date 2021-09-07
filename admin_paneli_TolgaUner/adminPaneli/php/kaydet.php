<?php 

if (isset($_POST['kaydet'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
 
	$isim = validate($_POST['isim']);
	$soyad = validate($_POST['soyad']);
	$sınıf = validate($_POST['sınıf']);
	$numara = validate($_POST['numara']);
	
	
	
	 $user_data = 'isim='.$isim. '&soyad='.$soyad.  '&sınıf='.$sınıf. '&numara='.$numara;
	
	if(empty($isim))
	{
		header("Location: ../admin.php?error=İsim girin&user_data");
	}
	elseif(empty($soyad))
	{
		header("Location: ../admin.php?error=soyad girin&user_data");
	}
	
	elseif(empty($sınıf))
	{
		header("Location: ../admin.php?error=sınıf girin&user_data");
	}
	
	elseif(empty($numara))
	{
		header("Location: ../admin.php?error=numara girin&user_data");
	}
	else{
		$sql ="INSERT INTO users(isim,soyad,sınıf,numara) 
			   VALUES('$isim', '$soyad','$sınıf','$numara')";
			   
			   $result = mysqli_query($conn,$sql);
			   if($result)
			   {
				   header("Location: ../liste.php?başarı=başarıyla oluştu");
			   }
			   else {
				   header("Location: ../admin.php?errorr=hata oluştu&$user_data ");
			   }
	}
	
	
}