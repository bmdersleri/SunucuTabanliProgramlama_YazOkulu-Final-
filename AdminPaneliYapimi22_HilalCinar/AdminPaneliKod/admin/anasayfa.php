<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 


   $konular = $db->prepare("select * from konular inner join kategoriler on kategoriler.kategori_id =
   
   konular.konu_kategori ");
   $konular->execute(array());
   $konular->fetchALL(PDO::FETCH_ASSOC);
   $konu = $konular->rowCount();
   
   $ko = $db->prepare("select * from konular inner join kategoriler on kategoriler.kategori_id =
   
   konular.konu_kategori   where konu_durum=?");
   $ko->execute(array(0));
   $ko->fetchALL(PDO::FETCH_ASSOC);
   $konuonay = $ko->rowCount();
   
   
     $uyeler = $db->prepare("select * from uyeler ");
	   $uyeler->execute(array());
	   $uyeler->fetchALL(PDO::FETCH_ASSOC);
	   $uye = $uyeler->rowCount();
   
   $uyeonay = $db->prepare("select * from uyeler   where uye_onay=?");
   $uyeonay->execute(array(0));
   $uyeonay->fetchALL(PDO::FETCH_ASSOC);
   $uyeo = $uyeonay->rowCount();
   
   
       $yorumlar = $db->prepare("select * from yorumlar ");
	   $yorumlar->execute(array());
	   $yorumlar->fetchALL(PDO::FETCH_ASSOC);
	   $yorum = $yorumlar->rowCount();
   
   $yorumonay = $db->prepare("select * from yorumlar   where yorum_onay=?");
   $yorumonay->execute(array(0));
   $yorumonay->fetchALL(PDO::FETCH_ASSOC);
   $yonay = $yorumonay->rowCount();
   
       $kategoriler = $db->prepare("select * from kategoriler ");
	   $kategoriler->execute(array());
	   $kategoriler->fetchALL(PDO::FETCH_ASSOC);
	   $kategori = $kategoriler->rowCount();
	   
	     $sayfalar = $db->prepare("select * from sabit_sayfalar ");
		   $sayfalar->execute(array());
		   $sayfalar->fetchALL(PDO::FETCH_ASSOC);
		   $sayfa = $sayfalar->rowCount();

		   
		   
		   ///baslangıc
function dizinboyutu($dizin) {
    $bayt = 0;
    $dzn = opendir($dizin);
    if (!$dzn)
        return -1;
    while (($dosya = readdir($dzn)) !== false) {
        if ($dosya[0] == '.') continue; 
        if (is_dir($dizin . $dosya)){
			$bayt += dizinboyutu($dizin . $dosya . DIRECTORY_SEPARATOR);	
		}else{
			$bayt += filesize($dizin . $dosya);
		}
    }
	closedir($dzn);
	return $bayt;
}


		   //bitis

?>


<div class="admin-icerik-sag"> 
			<h2>Admin Paneli Anasayfa</h2>
			<div class="anasayfa"> 
			<h3><a href="/admin/?do=konular">Konular</a></h3>
			<p>Toplam Konu : <?php echo $konu;?> <br />
			Onay Bekleyen Konu : <?php echo $konuonay;?>
			
			</p>
			</div>
			<div class="anasayfa"> 
			<h3><a href="/admin/?do=uyeler">Üyeler</a></h3>
			<p>
			Toplam Üye : <?php echo $uye;?> <br />
			Onay Bekleyen Üye : <?php echo $uyeo;?>
			
			</p>
			</div>
			<div class="anasayfa"> 
			<h3><a href="/admin/?do=yorumlar">Yorumlar</a></h3>
			<p>
			Toplam Yorum : <?php echo $yorum;?> <br />
			Onay Bekleyen Yorum : <?php echo $yonay;?>
			
			</p>
			</div>
			<div class="anasayfa"> 
			<h3><a href="/admin/?do=kategoriler">Kategoriler</a></h3>
			<p>Toplam Kategori : <?php echo $kategori;?></p>
			</div>
			<div class="anasayfa"> 
			<h3><a href="/admin/?do=sabit_sayfalar">Sabit Sayfalar</a></h3>
			<p>Toplam Sayfa : <?php echo $sayfa;?></p>
			</div>
			<div style="clear:both;"></div>
			<div class="surum">
            <strong>PHP Sürümü :</strong> <span style="color:green"><?php echo phpversion(); 	?> Version</span><br />
             <strong>Toplam Dosya Boyutu  :</strong> <span style="color:green">
			<?php echo dizinboyutu('../../www/')." Bayt"; // Çıktıyı Bayt(byte) olarak verir?>
			 </span>			
			</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			