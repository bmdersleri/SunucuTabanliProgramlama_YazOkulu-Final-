<?php 
include"lib/head.php";

   // form button seting 
   
   if(isset($_REQUEST['action']))
    {   
        
	  $action = $db->encrypt_decrypt('decrypt',$_REQUEST['action']); 
	  if($action == 'add')
	    { 
	
	      //$check_lavel = $db->select();		  
		  $button = 'save';
	    }
		elseif($action =='edit'){
		     $id     = $db->encrypt_decrypt('decrypt',$_REQUEST['id']);
		     $efdata = $db->selectone($pro->prifix.$pro->gallery,"where ".$pro->gallery."_id=".$id);
		        
				$button = 'edit';
		  
		}
		elseif($action == 'delete' )
		{
		  $id     = $db->encrypt_decrypt('decrypt',$_REQUEST['id']);	
		}
		elseif($action == 'active')
		{ 
		  $id     = $db->encrypt_decrypt('decrypt',$_REQUEST['id']);
		  $status=0;
		}
		elseif($action == 'dactive')
		{ 
		  $id     = $db->encrypt_decrypt('decrypt',$_REQUEST['id']);
		  $status=1;
		}
	
    }
	
	/*======= insert code satart =========*/

   if(isset($_REQUEST['save']))
   {
	     
	 
	 $img_name= rand().'_'.$_FILES['image']['name'];
	    
		$check  = $db->img_valid($_FILES['image']['type']);
	 
	    if($check == true)
	    { 
		  move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$img_name);
	      $data = array(
	         $pro->gallery.'_image'    =>$img_name,
	         $pro->gallery.'_status'   =>1,
	        );
			 
			 $ins = $db->insert($pro->prifix.$pro->gallery,$data);
			 //print_r($db->geterror()); exit;
			 if($ins)
			 
		     echo "<script>window.location='".$pro->admin_url().'gallery.php'."'</script>";
		}
		else{
			
			echo"<script>alert('invalid image')</script>";
		}
	
   }
/*======= ///insert code end=========*/


/*======= Update code satart =========*/

   if(isset($_REQUEST['edit']))
   {
	   
	 
	 $img_name= rand().'_'.$_FILES['image']['name'];
	    
		if($_FILES['image']['name'] != '' )
		{
          unlink('../upload/'.$efdata[$pro->gallery.'_image']);	
          move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$img_name);		  
		    $check  = $db->img_valid($_FILES['image']['type']);
	 
	        if($check == true)
	        {
		
	            $data = array(
	             $pro->gallery.'_image'     =>$img_name,
	             $pro->gallery.'_status'    =>1,
	            );
			
		    }
		    else{
			
			 echo"<script>alert('invalid image')</script>";
		    }
		}
		else{
			
			$data = array(
	          $pro->gallery.'_image'     =>$efdata[$pro->gallery.'_image'],
	          $pro->gallery.'_status'    =>1,
	        );
			
		}
		
		
		  $upd = $db->update($pro->prifix.$pro->gallery,$data,"where ".$pro->gallery.'_id='.$id);
				 echo "<script>window.location='".$pro->admin_url().'gallery.php'."'</script>";
	     
   }
/*======= ///Update code end =========*/

/*======= ///status code start =========*/
   if(isset($action) && ($action=='active' || $action=='dactive'))
   { 
     
     $data = array($pro->gallery.'_status' =>$status,);
	 $upd = $db->update($pro->prifix.$pro->gallery,$data,"where ".$pro->gallery.'_id='.$id); 
	 echo "<script>window.location='".$pro->admin_url().'gallery.php'."'</script>";
	
    }

/*======= ///Status code end =========*/

/*======== Delete code start here ==========*/

   if(isset($id) and $action== 'delete')
   {
	   $db->delete($pro->prifix.$pro->gallery,"where ".$pro->gallery.'_id='.$id);
	   echo "<script>window.location='".$pro->admin_url().'gallery.php'."'</script>";
   }

/*======== Delete code end here ==========*/


?>

<!---========== script start here=============--->



<!---========== delete script start here=============--->
<script>
function del()
{
	
	return confirm('Are You Soure Want To Delete Thnis');
}

</script>
<!---========== delete script and here=============--->

<!---========== script end here=============--->


 <body class="animated-content">
        
        <?php include"lib/header.php"; ?>

        <div id="wrapper">
            <div id="layout-static">
                <?php include"lib/sidebar.php"; ?>
				
				
				
				
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="#">gallery</a></li>

<!----------//////// Add Button Start Here ------------>

 <div class="row">
   <div class="col-md-3 pull-right">
    <a href="<?php echo $pro->admin_url().'gallery.php?action='.$db->encrypt_decrypt('encrypt','add'); ?>" class="btn btn-primary btn-lg btn-block">Add gallery</a>
  </div>
 </div>	
 <!----------//////// Add Button end Here ------------>
 
                            </ol>
												
							
							
                            <div class="container-fluid">
							
							
							
							
							
<!------ //// insert Update form start here  -------->							
							
 
<?php 
if(isset($action) && ($action == 'edit' || $action == 'add'))
{

	//print_r($efdata);
?>
 
<div data-widget-group="group1">

<form method="post" enctype="multipart/form-data" class="form-horizontal row-border">

	<div class="panel panel-default" >
		<div class="panel-heading">
			<h2>gallery </h2>
			
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
		
			
			
				
				
		
				
					<div class="form-group">
					<label class="col-sm-2 control-label">Upload image</label>
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn btn-default btn-file">
								<span class="fileinput-new">Select file</span>
								<span class="fileinput-exists">Change</span>
								<input type="file" name="image" >
							</span>
							<span class="fileinput-filename"></span>
							<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
						</div>
						
						<?php 
						if(isset($efdata[$pro->gallery.'_image']))
						{
						?>
						<div>
						<img src="<?php echo $pro->base_url().'upload/'.$efdata[$pro->gallery.'_image']; ?>" width="80" >
						</div>
						<?php } ?>
					</div>
				</div>
				

				
		     </div>
		
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-primary btn" type="submit" name="<?php echo  $button; ?>" >Submit</button>
					
				</div>
			</div>
		</div>
		
		</form>
		
	</div>

</div>

<?php 

}
?>
<!---------///// insert Update form enad here -------------->






<!---------///// data table start here -------------->

<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Data Tables</h2>
					
					<div class="panel-ctrls">
					<div class="input-group">
            	<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
				<input type="text" class="form-control" placeholder="Search...">
			</div>
					
					</div>
				</div>
				<div class="panel-body no-padding">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
							   
												
								<th>image</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						
						
						<?php 
						
						$cn = "order by ".$pro->gallery.'_id desc';
						$udatas = $db->pagination($pro->prifix.$pro->gallery,$cn,10,5);
						//print_r($udatas);
						
						if($udatas)
						{
						    foreach($udatas as $udata)
						    {
								
						?>
						<tbody>
							<tr class="odd gradeX" >
							
							
							 
							   
								
								<td>
								<img src="../upload/<?php echo $udata[$pro->gallery.'_image']; ?>" width="100" >
								
								</td>
								
								
								 <td>
								  <?php 
								  if($udata[$pro->gallery.'_status']==1)
								  {
								  echo "<a href='".$pro->admin_url()."gallery.php?action=".$db->encrypt_decrypt('encrypt','active')."&id=".$db->encrypt_decrypt('encrypt',$udata[$pro->gallery.'_id'])."' >active"; 
								  }
								  else{
									  
									echo "<a href='".$pro->admin_url()."gallery.php?action=".$db->encrypt_decrypt('encrypt','dactive')."&id=".$db->encrypt_decrypt('encrypt',$udata[$pro->gallery.'_id'])."' >dactive";   
								  }
								  ?>
							   </td>
								   <td class="center"> 
								   <a class="btn btn-success-alt btn-label" href="<?php echo $pro->admin_url().'gallery.php?action='. $db->encrypt_decrypt('encrypt','edit').'&id='.$db->encrypt_decrypt('encrypt',$udata[$pro->gallery.'_id']); ?>"><i class="ti ti-pencil"></i> Edit</a>
								   
								   <a onclick='return del();' class="btn btn-danger-alt btn-label" href="<?php echo $pro->admin_url().'gallery.php?action='. $db->encrypt_decrypt('encrypt','delete').'&id='.$db->encrypt_decrypt('encrypt',$udata[$pro->gallery.'_id']); ?>"><i class="ti ti-trash"></i> Delete</a>
								   </td>
								   
							   </tr> 
						</tbody>
						
						<?php
						
						    } 
						
						} 

						?>
					</table>
				</div>
				
				<div class="panel-footer">
				<?php 
				if($udatas)
			    {
				  echo $db->priv();
				  echo $db->nav();
				  echo $db->nexts();
				}
				?>
				
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------//// Dtat table end here ------>








                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
			
				
<?php include"lib/footer.php"; ?>
    <!-- End loading page level scripts-->

    </body>
</html>