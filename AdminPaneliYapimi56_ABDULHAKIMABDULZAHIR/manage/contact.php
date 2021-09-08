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
		     $efdata = $db->selectone($pro->prifix.$pro->contact,"where ".$pro->contact."_id=".$id);
		        
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
	     
	 $phone    = $_REQUEST['phone'];
	 $email    = $_REQUEST['email'];
	 $address    = $_REQUEST['address'];
		
	      $data = array(
	         $pro->contact.'_phone'   =>$phone,
			 $pro->contact.'_email'   =>$email,
			 $pro->contact.'_address'   =>$address,
	         $pro->contact.'_status' =>1,
	        );
			 
			 $ins = $db->insert($pro->prifix.$pro->contact,$data);
			 //print_r($db->geterror()); exit;
			 if($ins)
			 
		     echo "<script>window.location='".$pro->admin_url().'contact.php'."'</script>";
		
	
   }
/*======= ///insert code end=========*/


/*======= Update code satart =========*/

   if(isset($_REQUEST['edit']))
   {
	   
	 $phone    = $_REQUEST['phone'];
	 $email    = $_REQUEST['email'];
	 $address    = $_REQUEST['address'];
	 
		
	      $data = array(
	         $pro->contact.'_phone'   =>$phone,
			 $pro->contact.'_email'   =>$email,
			 $pro->contact.'_address'   =>$address,
	         $pro->contact.'_status' =>1,
	        );
		
		 
		  $upd = $db->update($pro->prifix.$pro->contact,$data,"where ".$pro->contact.'_id='.$id);
				 echo "<script>window.location='".$pro->admin_url().'contact.php'."'</script>";
	
   }
/*======= ///Update code end =========*/

/*======= ///status code start =========*/
   if(isset($action) && ($action=='active' || $action=='dactive'))
   { 
     
     $data = array($pro->contact.'_status' =>$status,);
	 $upd = $db->update($pro->prifix.$pro->contact,$data,"where ".$pro->contact.'_id='.$id); 
	 echo "<script>window.location='".$pro->admin_url().'contact.php'."'</script>";
	
    }

/*======= ///Status code end =========*/

/*======== Delete code start here ==========*/

   if(isset($id) and $action== 'delete')
   {
	   $db->delete($pro->prifix.$pro->contact,"where ".$pro->contact.'_id='.$id);
	   echo "<script>window.location='".$pro->admin_url().'contact.php'."'</script>";
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
<li><a href="#">contact</a></li>

<!----------//////// Add Button Start Here ------------>
<!-----
 <div class="row">
   <div class="col-md-3 pull-right">
    <a href="<?php echo $pro->admin_url().'contact.php?action='.$db->encrypt_decrypt('encrypt','add'); ?>" class="btn btn-primary btn-lg btn-block">Add contact</a>
  </div>
 </div>	------>
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
			<h2>contact </h2>
			
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
		
			
			<div class="form-group">
					<label class="col-sm-2 control-label">Phone</label>
					<div class="col-sm-8">
						<input type="text" maxlength="10" class="form-control" placeholder="Phone" name="phone" value="<?php echo @$efdata[$pro->contact.'_phone'] !='' ? $efdata[$pro->contact.'_phone']  : ''; ?>" >
					</div>
				</div>
				
				
					<div class="form-group">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo @$efdata[$pro->contact.'_email'] !='' ? $efdata[$pro->contact.'_email']  : ''; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Address</label>
					<div class="col-sm-8">
						<textarea name="address" class="form-control" ><?php echo @$efdata[$pro->contact.'_address'] !='' ? $efdata[$pro->contact.'_address']  : ''; ?></textarea>
						
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
							 
					        <th>Mobile No</th>
                            <th>Email</th>
                            <th>Address</th>							
							<th>action</th>
							</tr>
						</thead>
						
						
						<?php 
						
						$cn = "order by ".$pro->contact.'_id desc';
						$udatas = $db->pagination($pro->prifix.$pro->contact,$cn,10,5);
						//print_r($udatas);
						
						if($udatas)
						{
						    foreach($udatas as $udata)
						    {
								
						?>
						<tbody>
							<tr class="odd gradeX" >
							
							
							    
							
							    
								
								<td>
								<?php echo $udata[$pro->contact.'_phone']; ?>
								</td>
									<td>
								<?php echo $udata[$pro->contact.'_email']; ?>
								</td>
								
									<td>
								<?php echo $udata[$pro->contact.'_address']; ?>
								</td>
								 
								   <td class="center"> 
								   <a class="btn btn-success-alt btn-label" href="<?php echo $pro->admin_url().'contact.php?action='. $db->encrypt_decrypt('encrypt','edit').'&id='.$db->encrypt_decrypt('encrypt',$udata[$pro->contact.'_id']); ?>"><i class="ti ti-pencil"></i> Edit</a>
							<!----	   
							 <a onclick='return del();' class="btn btn-danger-alt btn-label" href="<?php echo $pro->admin_url().'contact.php?action='. $db->encrypt_decrypt('encrypt','delete').'&id='.$db->encrypt_decrypt('encrypt',$udata[$pro->contact.'_id']); ?>"><i class="ti ti-trash"></i> Delete</a>  ---->
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