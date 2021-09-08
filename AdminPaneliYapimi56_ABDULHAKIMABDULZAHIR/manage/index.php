<?php 
include"../include/dbclass.php";
include"../include/project_class.php";

$db  = new db();
$pro = new project();

   if(isset($_REQUEST['login']))
   {
	   $uname = $_REQUEST['uname'];
	   $pwd   =   $_REQUEST['pwd']; 
	   
	   $check  = $db->selectone($pro->prifix.$pro->admin,"where ".$pro->admin ."_username='".$uname."' and ".$pro->admin ."_password='".$pwd."'");

	   
	   if(!empty($check))
	   {
	
		 $_SESSION['auth_id']  = $check[$pro->admin.'_id'];  
         echo"<script>window.location='dashboard.php';</script>";		 
		   
	   }
	     else{
	   
			echo"<script>alert('Username & Password is Not matched !!!!!!!');</script>";
		}
	   
   }
 
	



?>
<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Admin </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet' type='text/css'>
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">               <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">


    
    </head>

    <body class="focused-form animated-content">
        
        
<div class="container" id="login-form">
	<a href="index.php" class="login-logo"><h1 style="font-weight:900;" >Admin </h1></a>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				
				<form method="post" class="form-horizontal" id="validate-form">
				
				<!-----
					<div class="panel-heading">
						<h2>Login Form</h2>
					</div>
					------>
					
					<div class="panel-body">
						
						
							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
										<input type="text" class="form-control" placeholder="Username" name="uname" data-parsley-minlength="6" placeholder="At least 6 characters" required>
									</div>
		                        </div>
							</div>

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd" >
									</div>
		                        </div>
							</div>

					</div>
					<div class="panel-footer">
						<div class="clearfix">
							<label for="">
							<input type="checkbox"></input>
							Remember me
							</label>
							<button type="text" name="login" class="btn btn-primary pull-right">Login</button>
						</div>
					</div>
					
					</form>
				</div>
				
			</div>
		</div>
</div>

    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="assets/js/application.js"></script>
<script type="text/javascript" src="assets/demo/demo.js"></script>
<script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

    </body>

</html>