<?php include 'include/header.php'; ?>

<?php
$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:idd");
$anasayfa->execute(["idd" => 1]);

$anasayfaRow = $anasayfa->fetch(PDO::FETCH_OBJ);

 ?>

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>

								<h2 class="alt"><?= $anasayfaRow->yazilar1 ?></a>.</h2>
								<p><?= $anasayfaRow->yazilar2 ?></p>
                <p><?= $anasayfaRow->resim ?></p>
							</header>



						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Proje Çalışmalarım</h2>
							</header>

							<p</p>

<?php

$projecalismalarim = $db->query("SELECT * FROM projecalismalarim")->fetchAll(PDO::FETCH_OBJ);

?>

							<div class="row">
                <?php
                   foreach ($projecalismalarim as $row) {


                 ?>
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="detay.php?id=<?= $row->id ?>" class="image fit"><img src="assets/upload/<?= $row->resim ?>" alt="" height="100"/></a>
										<header>
											<h3><?= $row->baslik ?></h3>
										</header>
									</article>

								</div>
              <?php } ?>
							</div>

						</div>
					</section>

  <?php
          $hakkimda = $db->prepare("SELECT * FROM hakkimda WHERE id=:idd");
          $hakkimda->execute(["idd" => 1]);

          $hakkimdaRow = $hakkimda->fetch(PDO::FETCH_OBJ);

  ?>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Hakkımda</h2>
							</header>

							<a href="#" class="image featured"><img src="assets/upload/<?= $hakkimdaRow->resim ?>" alt="" height="300"/></a>

							<p><?= $hakkimdaRow->aciklamalar ?></p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>İletişim</h2>
							</header>

							<p>Herkese merhaba!Bana ulaşmak isterseniz aşağıdaki alandan mesaj göndermeniz yeterli.Sorularınızı ve ilginizi bekliyorum.Saygılarımla.</p>

							<form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="adsoyad" placeholder="İsim Soyisim" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email adresi" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Mesaj"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Gönder" />
									</div>
								</div>
							</form>
<?php

       if($_POST){
         $kaydet = $db->prepare("INSERT INTO iletisim SET
                               isim =:isim,
                               email =:email,
                               mesaj=:mesaj");

         $kaydet -> execute([
           "isim"   => $_POST["adsoyad"],
           "email"  => $_POST["email"],
           "mesaj"  => $_POST["message"]

         ]);
         if ($kaydet) {
           echo "Mesajınız başarıyla gönderildi";
         }else {
           echo "Bir hata meydana geldi";
         }

       }
?>

						</div>
					</section>

		<?php include 'include/footer.php'; ?>
