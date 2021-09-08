<?php 
include"../../include/dbclass.php";
include"../../include/project_class.php";

$db  = new db();
$pro = new project();
$id= $_REQUEST['id'];
$eid= $_REQUEST['eid'];

?>
                            <option value="" >Select</option>
							<?php 
							$parent_select= $db->select($pro->prifix.$pro->category,"where ".$pro->category."_type=2 and ".$pro->category."_parent='".$id."'");
							
							
							
							
							
							for($i=0;$i<count($parent_select);$i++)
							{
							?>
							<option value="<?php echo $parent_select[$i][$pro->category.'_id']; ?>"  
							
							<?php echo isset($eid) ? $eid == $parent_select[$i][$pro->category.'_id'] ? 'selected':''  : ''; ?> >
							
						<?php echo @$parent_select[$i][$pro->category.'_name']; ?>
							</option>
							<?php 
							}
							?>
