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
				<!-- Gallery -->
                	<div class="gallery">
                    	<div class="gallery_top">
                        	<div class="gallery_heading">
                            	<h2>Our Gallery</h2>
                            </div>
                            <div class="select_gallery">
                            	<a  class="photo pactive" href="#">&nbsp;</a>
                            	<a class="movie " href="#">&nbsp;</a>
                            	
                            </div>
                            <div class="clear"></div>
                        </div>
                    	<!-- Col1 -->
                        	<div class="categorydiv">
                            	<ul>
                                	<li><a class="selected" href="#"> Fun Fair</a></li>
                                    <li><a href="#"> Biulding</a></li>
                                    
                                </ul>
                            </div>
                    		<div class="thumbdiv">
                            	<ul>
								
								<?php 
								$gallerys = $db->select($pro->prifix.$pro->gallery);
								
								if($gallerys)
								{
                                    foreach($gallerys as $val)
                                    {									
								
								?>
								
                                	<li>
									<a href="upload/<?php echo $val[$pro->gallery.'_image']; ?>" rel="galleryimg" class="galleryimg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibu" ><img src="upload/<?php echo $val[$pro->gallery.'_image']; ?>"  alt="" /></a>
									</li>
									<?php
									}
							    }		
									
								?>	
									
                                </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>  
<?php include"lib/footer.php"; ?>