<?php 

 $baglan = mysqli_connect("localhost","root","","panel");
 if(!$baglan)
 {
	 die("connection failed:".mysqli_connect_error());
 }
 else
 {
	 echo "";
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>Teknolojik Etkinlik</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/switcher.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
</head>
<body>
<div id="main">
  <!-- Tray -->
  <div id="tray" class="box">
    <p class="f-left box">
      <!-- Switcher -->
      <span class="f-left" id="switcher"> <a href="javascript:void(0);" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="" /></a> </span> </p>

  </div>
  <!--  /tray -->
  <hr class="noscreen" />
  <!-- Menu -->
  <div id="menu" class="box">
    <ul class="box f-right">
      <li><a href="giris.php"><span><strong>Giriş Yap</strong></span></a></li>
    </ul>
    <ul class="box">
     <div style="margin-left:240px"> 
	  <li><a href="anasayfa.php"><span>ANASAYFA</span></a></li>
      <li><a href="hakkimizda.php"><span>HAKKIMIZDA</span></a></li>
      <li><a href="kurumsal.php"><span>REFERANSLAR</span></a></li>
      <li><a href="etkinlikler.php"><span>ETKİNLİKLER</span></a></li>
      <li><a href="iletisim.php"><span>İLETİŞİM</span></a></li>
	 </div>
     
    </ul>
  </div>
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Columns -->
  <div id="cols" class="box">
    <!-- Aside (Left Column) -->
    <div id="aside" class="box">
      <div class="padding box">
        <!-- Logo (Max. width = 200px) -->
        <p id="logo"><a href="#"><img src="tmp/indir.jpg" alt="" /></a></p>
       
	 
      </div>
      
    </div>
    <!-- /aside -->
    <hr class="noscreen" />
    <!-- Content (Right Column) -->
    <div id="content" class="box">
      <h1>HAKKIMIZDA</h1>

      
      <div class="fix"></div>
      <!-- 3 columns -->
      <h3 class="tit">3 Columns (33-33-33)</h3>
      <div class="col33">
        <p class="t-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et risus. Maecenas non nunc. Proin eleifend viverra sapien. Donec id augue. Duis erat nunc, volutpat a, bibendum quis, placerat vitae, enim. Etiam consectetur, velit in viverra tempus, urna augue sollicitudin tellus, vitae interdum arcu mi at est. Donec ornare, libero vitae facilisis molestie, mi sapien venenatis felis, sed mattis lectus nisi ac massa. Cras suscipit, neque ac auctor interdum, pede nibh porta lectus, nec aliquet nulla ipsum ac nibh. Morbi feugiat ipsum id metus. In urna sapien, porttitor sed, consectetur quis, lacinia eu, ante. Donec at ipsum. Sed arcu tellus, dapibus sit amet, auctor nec, rutrum non, lacus. Nam ut lorem eu orci placerat iaculis. Proin bibendum. Suspendisse consequat.</p>
      </div>
      <!-- /col33 -->
      <div class="col33 center">
        <p class="t-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et risus. Maecenas non nunc. Proin eleifend viverra sapien. Donec id augue. Duis erat nunc, volutpat a, bibendum quis, placerat vitae, enim. Etiam consectetur, velit in viverra tempus, urna augue sollicitudin tellus, vitae interdum arcu mi at est. Donec ornare, libero vitae facilisis molestie, mi sapien venenatis felis, sed mattis lectus nisi ac massa. Cras suscipit, neque ac auctor interdum, pede nibh porta lectus, nec aliquet nulla ipsum ac nibh. Morbi feugiat ipsum id metus. In urna sapien, porttitor sed, consectetur quis, lacinia eu, ante. Donec at ipsum. Sed arcu tellus, dapibus sit amet, auctor nec, rutrum non, lacus. Nam ut lorem eu orci placerat iaculis. Proin bibendum. Suspendisse consequat.</p>
      </div>
      <!-- /col33 -->
      <div class="col33">
        <p class="t-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et risus. Maecenas non nunc. Proin eleifend viverra sapien. Donec id augue. Duis erat nunc, volutpat a, bibendum quis, placerat vitae, enim. Etiam consectetur, velit in viverra tempus, urna augue sollicitudin tellus, vitae interdum arcu mi at est. Donec ornare, libero vitae facilisis molestie, mi sapien venenatis felis, sed mattis lectus nisi ac massa. Cras suscipit, neque ac auctor interdum, pede nibh porta lectus, nec aliquet nulla ipsum ac nibh. Morbi feugiat ipsum id metus. In urna sapien, porttitor sed, consectetur quis, lacinia eu, ante. Donec at ipsum. Sed arcu tellus, dapibus sit amet, auctor nec, rutrum non, lacus. Nam ut lorem eu orci placerat iaculis. Proin bibendum. Suspendisse consequat.</p>
      </div>
      <!-- /col33 -->
      <div class="fix"></div>
      <h3 class="tit">KOORDİNATÖRLERİMİZ</h3>
 
<div class="container" >
	<div class="row">
		<div class="span5">
            <table style="font-size:18px;" class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>AD SOYAD</th>
                      <th>E-MAİL</th>
                      <th>TELEFON NUMARASI</th>
                      <th>ÜNVAN</th>                                          
                  </tr>
              </thead>   
              <tbody>
	 <?php
	  $bul = "SELECT * FROM koordinatorler";
	  $veriler =mysqli_query($baglan,$bul);
	  if(mysqli_num_rows($veriler)>0)
	  {
	     while($veri = $veriler->fetch_assoc())
		 {
	  
	  ?>
	           <tr style="font-size:40px;">
			   
                    <td><span class="label label-warning"><?php echo $veri["adsoyad"];?></span></td>
                    <td><span class="label label-important"><?php echo $veri["email"];?></span></td>
                    <td><span class="label label-success"><?php echo $veri["telefon"];?></span></td>
                    <td><span class="label"><?php echo $veri["unvan"];?></span></td>                                        
                </tr>
                <tr>
		 <?php  }} ?>                                          
              </tbody>
            </table>
            </div>
	</div>
</div>
    </div>
    <!-- /content -->
  </div>
  <!-- /cols -->
  <hr class="noscreen" />
  <!-- Footer -->
  <div id="footer" class="box">
    <p class="f-left">&copy; 2009 <a href="#">Your Company</a>, All Rights Reserved &reg;</p>
    <p class="f-right">Templates by <a href="http://www.adminizio.com/">Adminizio</a></p>
  </div>
  <!-- /footer -->
</div>
<!-- /main -->
</body>
</html>
