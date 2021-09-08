<?php include"lib/head.php"; ?>
<body>
<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
		<?php include"lib/nav.php"; ?>
        <!-- Content Seciton -->
        	<div id="content_section">
        		<!-- News Updates -->
            	<?php include"lib/flik.php"; ?>
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col12">
                    	<!-- Content Links -->
                    
                            <div class="clear"></div>
                                <!-- Note -->
                           
                             
                             <div class="contactblock">
                             <h4>About </h4>
                              <?php 
							  
					$about = $db->selectone($pro->prifix.$pro->about);
						 
						 echo $about[$pro->about.'_desc'];
							  
							  
							  ?>
                             </div>
                    <div class="clear"></div>
                    </div>
               <!-- Col2 -->
 <?php include"lib/footer.php"; ?>             