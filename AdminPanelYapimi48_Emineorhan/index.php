<?php include 'include/header.php'; ?>

<?php 

$anasayfa = $db->prepare ("SELECT * FROM anasayfa WHERE  id=:idd");
$anasayfa -> execute(["idd" => 1]) ;
$anasayfaRow = $anasayfa->fetch(PDO::FETCH_OBJ);

?>

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><?= $anasayfaRow -> yazi1   ?></h2>
								<p><?= $anasayfaRow -> yazi2   ?></p>
							</header>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Sunucu Tabanlı Programlama</h2>
							</header>

							<p>Sunucu Tabanlı Programlama dersi için yapmış olduğum bu final projesinde 
								crud işlemleri (ekle,sil,güncelle,listele), sayfalar arası geçişler, 
								admin paneli bulunmaktadır.
							</p>

<?php 

$calismalarim = $db->query("SELECT * FROM calismalar")->fetchAll(PDO::FETCH_OBJ);



?>








							<div class="row">
								<?php 
								foreach	($calismalarim as $row){
								?>
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="assets/upload/<?= $row->resim ?>" alt="" height="100"/></a>
										<header>
											<h3><?= $row->baslik ?></h3>
										</header>
									</article>
</div>
<?php } ?>
		
							</div>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Hakkımda</h2>
							</header>

							

							<p>Ben Emine Orhan.Kastamonu Üniversitesi Bilgisayar Mühendisliği 4. Sınıf öğrencisiyim. 
								Ankara Altındağ Gazi Anadolu Lisesinden mezun olduktan sonra Kastamonu Üniversitesine başladım.
								Hala aktif olan bir öğrencilik hayatım var. Öğrenciliğimin yanı sıra yapmış olduğum çeşitli çalışmalar 
								hakkında sizlere bu blog sitesinde bilgiler vermeyi amaçlamaktayım. Bilginin çok derin kapsamlı olduğunu 
								ve aynı zamanda paylaştıkça çoğaldığının kanaatindeyim. Umarım yapmış olduğum çalışmalar ve çalıışmalarım
								hakkında yazmış olduğum yazılarım siz değerli okurlarıma ışık olmuş olur. Kıymetli zamanlarınızdan ayırıp 
								blogumu ziyaret ettiğiniz için de ayrıca teşekkür ederim :)
							
							</p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>İletişim</h2>
							</header>

							<p>
								EMİNE ORHAN
								TELEFON : 0505 505 55 55
								E POSTA : orhanemine46310@gmail.com
								ADRES : ATATÜRK CADDESİ PINARBAŞI MAHALLESİ
								        KIRMIZI SOKAK 22/4

										ÇANKAYA/ANKARA
							</p>

							

						</div>
					</section>

		<?php include 'include/footer.php'; ?>
