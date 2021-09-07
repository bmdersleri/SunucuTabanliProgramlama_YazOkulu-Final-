<?php
 $phone1=$_SESSION['phone']; 
include('dbconn.php');
$sql="Select * from inquery where Phone='$phone1'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html> 
<html>
<head>     
<script>
function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }

</script>
<title>Geçiş oluştur</title>     
<link rel="stylesheet" href="../css/createpass_1.css">

 </head>
 <body onload='document.form1.text1.focus()'> 
 <form action="new.php" method="post" name="form1">
<div class="back_ground">     
<h1>Geçiş oluştur</h1>         
	<div class="left">
		<input type="text" name="name1" onkeypress="return onlyAlphabets(event);"  placeholder="Name" value="<?php echo $fetch[1] ?>"  style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;"><br><br>             
		<label style="margin-left:22px;">Cinsiyet : </label><br><br>             
		<div style="margin-top: -8px;margin-left: 46px;">           
		<input <?php if($fetch[2]=="male"){echo "checked";} ?> type="radio" name="gender" value="male" style="margin-left: 18px;"><label>Erkek</label>             
		<input <?php if($fetch[4]=="female"){echo "checked";} ?> type="radio" name="gender" value="female"><label>Kadın</label><br></div>
		<input type="Number" name="phone" readonly="readonly" placeholder="Phone No" value="<?php Eko
		$phone1 ?>" style="width: 70%; height: 30px; color: #000; border-radius: 10px;border:none;
		margin-left: 22px; padding: 5px; margin-top: 18px;"><br><br>
		<label style="margin-left: 22px;">departman : </label><br><br>
		<div style="margin-top: -8px; margin-left: 60px;">                 
		<select name="department"  style="width: 80%; height: 30px; border-radius: 10px;border:none; margin-left: -40px; padding: 5px; margin-top: 10px; color: #000">
		<?php                          
		include ('dbconn.php');
		$sql="Select * from department";
		$query=mysqli_query($db,$sql);
						
			while($fetch=mysqli_fetch_array($query)) {
		?>
		<option value="<?php echo $fetch[1]?>"><?php echo $fetch[1]?></option>

		<?php
		}
		?>

		</select>
		</div><br>
			<label style="margin-left: 22px;">Kiminle Tanışmalı : </label><br><br>
			<div style="margin-top: -8px; margin-left: 60px;">
				<select name="person_meet"   style="border-radius: 10px; height: 30px;color: #000; width: 80%; margin-left: -40px;">
					<?php 
						include ('dbconn.php');
						$sql="Select * from emp_table";
						$query=mysqli_query($db,$sql);
						
						while($fetch=mysqli_fetch_array($query)) {
							?>
							<option value="<?php echo $fetch[1]?>"><?php echo $fetch[1]?></option>

							<?php
						}
					?>
					

				</select>
			</div>
			<input type="submit" name="submit" value="Create"  style="width: 40%; height: 26px; border-radius: 10px;border:none; margin-left: 100px; padding: 5px; margin-top: 35px; cursor: pointer; color: #000">
		</div>
		<div class="right">
			<div class="image_box">	
            
					<?php include('livevideo.php'); ?>
<input type="hidden" id="a" name="image">
            
			</div>
<!--			<input type="submit" value="capture" style="width: 80%; height: 25px; border-radius: 10px;border:none; margin-left: 10px; padding: 5px; margin-top: 10px;">-->
			<div class="image_box" style="margin-top:75px">	
            
			<?php include('takephoto.php'); 

			 ?>
    
			</div>
			<div class="qr">
				<?php include('qr.php'); 

				$_SESSION['qr']=$e;?>
			</div>
		</div>
	</div>
</form>
	

</body>
<script>
	function validateform()
	{
		var x= document.forms["myform"]["name1"].value;
		if(x=="")
		{
			alert("Name must be filled out");
			return false;
		}
	}
</script>
</html>
