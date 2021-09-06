<?php 
include("../inc/vt.php"); 
if ($_POST) { 
	
	$field = $_POST['field']; 
	$value = $_POST['value'];

	$value = str_replace('{0}','+',$value); 
	
	$id = $_POST['id'];


		
		if ($connection->query("UPDATE products SET $field = '$value' WHERE id =$id")) 
		{
			echo true; 
		}
		else
		{
			echo false;
		}



}

?>
