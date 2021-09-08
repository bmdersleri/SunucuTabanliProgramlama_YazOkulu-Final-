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
                             
                             	<div class="block1">
                                <h5>Quick Inquiry</h5>
                                	<ul class="inquiry">
                                		<li><input name="txtName" value="Name" type="text"
                                        	onfocus="if(this.value=='Name') {this.value='';}"
                        					onblur="if(this.value=='') {this.value='Name';}"
                                        
                                         /></li> 
                                        <li><input name="txtEmail" value="Email" 
                                        	onfocus="if(this.value=='Email') {this.value='';}"
                        						onblur="if(this.value=='') {this.value='Email';}"
                                         type="text" /></li> 
                                        <li><input name="txtPhoneno" value="Phone Number"
                                        	onfocus="if(this.value=='Phone Number') {this.value='';}"
                        						onblur="if(this.value=='') {this.value='Phone Number';}"
                                         type="text" /></li>
                                        <li> 
                                        	<select name="txtcountry">
                                        		<option>USA</option>
                                                <option>Uk</option>
                                                <option>Pakistan</option>
                                            </select>
                                        </li>
                                        <li> 
                                        	<textarea  rows="0" cols="0" name="txtMessage" class="txtarea">Comments</textarea>
                                        </li>
                                    
                                    
                                    </ul>
                                    <div class="action1"> 
                        						<a href="#" class="btn1 left">Submit</a>  
                            					<a href="#" class="right">Cancel</a>
                    							</div>
                                </div>
                             	<div class="block2">
                                	<h5>Our Location</h5>
                                	<div class="map">
                                    	<a href="#"><img src="images/map.gif"  alt="" /></a>
                                    </div>
                                    <div class="map_cities">
                                    	<ul>
                                        	<li><a href="#"><span>London</span></a> </li>
                                            <li><a href="#"><span>Surrey</span></a> </li>
                                    	    <li><a href="#"><span>Kent</span></a> </li>
                                    	    <li><a href="#"><span>Manchester</span></a> </li>
                                    	    
                                        </ul>
                                    </div>
                                </div>	
                             
                             <div class="clear"></div>
                             </div>
                    <div class="clear"></div>
                    </div>
               <!-- Col2 -->
 <?php include"lib/footer.php"; ?>             