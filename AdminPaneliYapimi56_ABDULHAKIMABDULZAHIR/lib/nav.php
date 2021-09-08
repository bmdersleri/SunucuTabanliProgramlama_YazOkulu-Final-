<div id="masterhead">
				<!-- Logo -->
				<?php 
				$logo_data = $db->selectone($pro->prifix.$pro->logo);
				?>
                	<div class="logo"><a href="index.php"><img src="upload/<?php echo $logo_data[$pro->logo.'_image']; ?>" alt="" style="width:120px;" /></a></div>
                	<!-- masterhead Right Section -->
						<div class="topright_sec">
                    		<!-- top navigation -->
                    			<div class="topnavigation">
								<!----
                               		<ul>
                                  		<li class="first">&nbsp;</li>
                                    	<li><a href="news.html">News</a></li>
                                    	<li><a href="#">Events</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                    	<li><a href="#">Jobs</a></li>
                                    	<li><a href="#">Student Profile </a></li>
                                    	<li><a href="#">Our Campuses</a></li>
                                        <li><a class="nobg" href="#"><img src="images/xrss.gif.pagespeed.ic.wUgLvb7fdU.png" alt=""/></a></li>
                                    	<li class="last">&nbsp;</li>
                                    </ul>
								
								----->
                                </div>
                                <div class="clear"></div>
                    			<!-- top search -->
                                	<div class="top_search">
                                    	<div class="advance_search"><a href="#">Advance Option</a></div>
                                        <ul>
                                        	<li><input name="txt" value="Search you any keyword" onfocus="if(this.value=='Search you any keyword') {this.value='';}" onblur="if(this.value=='') {this.value='Search you any keyword';}" type="text"/></li>
                                            <li><a class="search" href="#">Search</a></li>
                                         </ul>
                                    </div>
                         	<div class="clear"> </div>       	
                    	</div>
						
						
						
                    <div class="clear"></div>
                    	  <!-- Navigation -->
                              <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu">
                                  	  <ul>
                                  	      <li class="first"><a class="selected" href="index.php">Home</a></li>
										  
										  
                                          <li><a href="about.php">About Us</a></li>
										  
										   <li><a href="media.php">Media</a></li>
										   
										   
                                          <li><a href="gallery.php">Gallery</a></li>
                                         <li><a href="contact.php">Contact Us</a></li>
                                         
                                                                                    
                                      </ul>				
                                  </div>
                           <!-- navigation ends -->       		                            
             	     <div class="clear"></div>	
                 </div> 

				 
		    </div>