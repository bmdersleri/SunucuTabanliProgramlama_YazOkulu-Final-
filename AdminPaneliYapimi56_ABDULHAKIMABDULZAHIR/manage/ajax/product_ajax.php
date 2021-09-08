<?php 
include"../../include/dbclass.php";
include"../../include/project_class.php";
$db  = new db();
$pro = new project();

    if(isset($_REQUEST['cid']))
    {
      $id  = $_REQUEST['cid'];
?>
         
		                   <option value="" >Select</option>
							<?php 
							$parent_select= $db->select($pro->prifix.$pro->category,"where ".$pro->category."_type=2 and ".$pro->category."_parent='".$id."'");
							
							
							for($i=0;$i<count($parent_select);$i++)
							{
							?>
							<option value="<?php echo $parent_select[$i][$pro->category.'_id']; ?>"  
							
							 >
							
						<?php echo @$parent_select[$i][$pro->category.'_name']; ?>
							</option>
							<?php 
							}
							
							
	}
    if(isset($_REQUEST['scid']))
	{
      $id = $_REQUEST['scid'];
	
							?>
                    
				    <option value="" >Select</option>
							<?php 
							$parent_select= $db->select($pro->prifix.$pro->category,"where ".$pro->category."_type=3 and ".$pro->category."_parent='".$id."'");
							
							
							
							
							
						for($i=0;$i<count($parent_select);$i++)
						{
							?>
							<option value="<?php echo $parent_select[$i][$pro->category.'_id']; ?>"  
							
							 >
							
						<?php echo @$parent_select[$i][$pro->category.'_name']; ?>
							</option>
				   
<?php                   
                        }
 
	}
?>				   
				   