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
				
				
				
                	<div class="col1">
                    	<!-- Banner -->
                        	<div id="banner">
								<div id="slider2">
								
								<?php 
								$sliders = $db->select($pro->prifix.$pro->slider);
								if($sliders)
								{
									foreach($sliders as $slider)
									{
								?>
                               		<div class="contentdiv">
                                    	<a href="#"><img src="upload/<?php echo $slider[$pro->slider.'_image']; ?>" alt=""/></a>
                                        <div class="banner_des">
                                        	<h4><?php echo $slider[$pro->slider.'_name']; ?></h4>
                                        	<p></p>
                                        </div>
                                    </div> 
                                   <?php 
								    }
								}
								   
								   ?>
                                    
                                   
                                    
                                	</div> 
                                	<div id="paginate-slider2" class="pagination">
									</div>
                       			<script>eval(mod_pagespeed_cDZtPf0YR_);</script>
                              
							 </div>
							 
							 
                         <!-- Content Links -->
						 <!---
                         	<div class="content_links">
                            	<ul>
                            		<li><a class="our_university" href="#">Our University</a></li>
                                    <li><a class="admission" href="#">Admissions</a></li>
                                    <li><a class="accommodaiton" href="#">Accommodations</a></li>
                                    <li><a class="community" href="#">Community</a></li>
                                    <li><a class="schorship" href="#">Scholorships</a></li>
                                    <li class="last"><a class="take_tour" href="#">Take a Tour</a></li>
                                </ul>
                            </div>  
							---->
                         <!-- Content Heading -->
						 
						 <?php 
						 $home = $db->selectone($pro->prifix.$pro->home);
						 
						 echo $home[$pro->home.'_desc'];
						 ?>
						 
                          <div class="clear"></div>
                             <!-- Content Block -->
                             	
                    </div>
               <!-- Col2 -->
                	<div class="col2">
                    	<div class="ads">
                        	<a href="#"><img src="images/xads.gif.pagespeed.ic.rBwtCOZOhx.gif" alt=""/></a>
                        </div>
                      		<!-- Top Student -->  
                        		<div class="rtab">
                                	<div class="tab_navigation">
                                    	<ul>
                                        	<li class="active"><a href="#rtab1">Top Students</a></li>
                                        	<li><a href="#rtab2">Almuni</a> </li>
                                        </ul>
                                    </div>
                                    <div class="rtab_content" id="rtab1" style="display:none;">
                                    	<ul>
                                        	<li>
                                            	 
                                                <div class="description">
                                                	<h6><a href="#">Neha Morgen</a></h6>
                                                    <p><a href="#" class="gray">MBA, March 2011</a></p>
                                                </div> 
                                           </li>
                                           <li>
                                            	
                                                <div class="description">
                                                	<h6><a href="#">Anuj Simon</a></h6>
                                                    <p><a href="#" class="gray">BBA February 2012</a></p>
                                                </div> 
                                           </li>
                                           <li>
                                            	
                                                <div class="description">
                                                	<h6><a href="#">Aman rathor</a></h6>
                                                    <p><a href="#" class="gray">ACCA January 2011</a></p>
                                                </div> 
                                           </li>
                                           <li class="nobg">
                                            
                                                <div class="description">
                                                	<h6><a href="#">Maria naj</a></h6>
                                                    <p><a href="#" class="gray">MBA December 2013</a></p>
                                                </div> 
                                           </li>
                                        
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="rtab_content" id="rtab2" style="display:none;">
                                    	<ul>
                                        	<li>
                                            	 
                                                <div class="description">
                                                	<h6><a href="#">Neha Morgen</a></h6>
                                                    <p><a href="#" class="gray">MBA, March 2011</a></p>
                                                </div> 
                                           </li>
                                           <li>
                                            	
                                                <div class="description">
                                                	<h6><a href="#">Anuj Simon</a></h6>
                                                    <p><a href="#" class="gray">BBA February 2012</a></p>
                                                </div> 
                                           </li>
                                           <li>
                                            
                                                <div class="description">
                                                	<h6><a href="#">Aman rathor</a></h6>
                                                    <p><a href="#" class="gray">ACCA January 2011</a></p>
                                                </div> 
                                           </li>
                                           <li class="nobg">
                                            
                                                <div class="description">
                                                	<h6><a href="#">Maria naj</a></h6>
                                                    <p><a href="#" class="gray">MBA December 2013</a></p>
                                                </div> 
                                           </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    
                                </div>
								
								
								
								
                    				
              		</div>
                <div class="clear"></div>
			<!-- Slder -->	
			
			 
				
				
				
            </div>	
		<div class="clear"></div>
	</div>
</div>   
<?php include"lib/footer.php"; ?>