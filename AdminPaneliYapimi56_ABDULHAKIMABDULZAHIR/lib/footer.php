 
<!-- Footer Section -->
<div id="bottom_seciton">
	<div id="footer">
		<!--Find your way -->	
        	<div class="find_your_way" style="width:32%;">
				<h5>Find your Way</h5>        
        		<ul>
        			<li><a href="#">Home</a></li>
        			<li><a href="#">About us</a></li>
        			<li><a href="#">Media</a></li>
        			<li><a href="#">Gallery</a></li>
        		</ul>
			</div>    
   
      
    	<!-- Addmission -->	
        	<div class="Addmissoin" style="width:32%;" >
				<h5>Addmission</h5>        
        		<ul>
        			<li><a href="#">School</a></li>
        			<li><a href="#">Graduate</a></li>
        			<li><a href="#">Law</a></li>
        			<li><a href="#">Undergraduate</a></li>
        		</ul>
			</div>    
			
			<?php 
			
			$cnt = $db->selectone($pro->prifix.$pro->contact);
			
			?>
    	<!-- Contact Us -->	
        	<div class="contact_us" style="width:32%;" >
				<h5>Contact Us</h5>        
        		<ul>
        			<li class="telephone_no"><?php echo $cnt[$pro->contact."_phone"]; ?></li>
        			<li class="mailing_address">
                    	<?php echo $cnt[$pro->contact."_address"]; ?>
                    </li>
        			<li class="email_address"><a href="#"><?php echo $cnt[$pro->contact."_email"]; ?></a></li>
        		</ul>
			</div>    
   		<div class="clear"></div>     
    </div>
</div>



<!-- Bototm seciton -->
	<div id="bottom_Section">
	<!-- page bottm -->
       	<div id="pagebottom">
    		<!-- copyright -->
            <div class="copyright">&copy; 2016 <a href="#"></a> All Rights Reserved</div>
            	<a href="#" class="top">Top</a>
    			<!-- Social Networks -->
            	<div class="socail_networks">
        			<ul>
            			<li class="servcies">Follows us our servcies</li>
            			<li><a href="#"><img src="images/xfacebook_icon.gif.pagespeed.ic.Z4vFezYoJn.jpg" alt=""/> </a></li>
                		<li><a href="#"><img src="images/xlinkedin_icon.gif.pagespeed.ic.lxOg9ZmwA1.jpg" alt=""/> </a></li>
                		<li><a href="#"><img src="images/xtwitter_icon.gif.pagespeed.ic.p6VPm9PKgo.jpg" alt=""/> </a></li>
                		<li><a href="#"><img src="images/xrssfeed_icon.gif.pagespeed.ic.WYZORN_Wc-.jpg" alt=""/> </a></li>
                		<li><a href="#"><img src="images/xsocial_icon.gif.pagespeed.ic.KOP9aKnr0D.jpg" alt=""/> </a></li>
               		</ul>
        		</div>
             <div class="clear"></div>     	
    	</div>
	</div>
</body>
</html>

