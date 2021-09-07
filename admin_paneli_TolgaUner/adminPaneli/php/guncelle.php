<?php  

if(isset($_GET['id']))
{
	
	include "db_conn.php";
	
		function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
 
	$id = validate($_GET['id']);
	
	$sql="SELECT * FROM users WHERE id=$id ";
$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
}
else{
	header("Location: liste.php");
}

}else if(isset($_POST['güncelle'])){
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
	$id = validate($_POST['id']);
	
	
	if(empty($isim))
	{
		header("Location: ../guncelle.php?id=$id&error=İsim girin");
	}
	elseif(empty($soyad))
	{
		header("Location: ../guncelle.php?id=$id&error=soyad girin");
	}
	
	elseif(empty($sınıf))
	{
		header("Location: ../guncelle.php?id=$id&error=sınıf girin");
	}
	
	elseif(empty($numara))
	{
		header("Location: ../guncelle.php?id=$id&error=numara girin");
	}
	else{
		$sql ="UPDATE users
			   SET isim='$isim', soyad='$soyad',sınıf='$sınıf',numara='$numara'
			   WHERE id=$id   ";
			   
			   $result = mysqli_query($conn,$sql);
			   if($result)
			   {
				   header("Location: ../liste.php?başarı=başarıyla güncellendi");
			   }
			   else {
				   header("Location: ../guncelle.php?id=$id&error=hata oluştu&$user_data ");
			   }
	}
}


else{
	
	header("Location: liste.php");
	
}

?>