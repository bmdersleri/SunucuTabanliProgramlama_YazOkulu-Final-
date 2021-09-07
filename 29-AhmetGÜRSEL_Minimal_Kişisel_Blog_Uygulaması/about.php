<?php include('path.php');
include(ROOT_PATH . "/app/database/dbFunction.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hakkımda</title>
  <link rel="stylesheet" href="./assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef21085440.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body class="flex flex-col min-h-screen" style="font-family: 'Rubik', sans-serif;">

  <!-- header -->
  <?php include(ROOT_PATH . "/app/components/header.php"); ?>

  <!-- about -->
  <div class="content container mx-auto flex-grow" style="width: 900px;">
    <div class="singlePost px-5">
      <div class="post my-5 text-justify">
        <p>
        <div class="float-left mr-5" style="width: 350px; height: 350px;"><img src="<?php echo BASE_URL . '/assets/images/about_picture.jpg'; ?>" class="float-left rounded-2xl" alt=""></div>
        <span class="text-semibold text-2xl">Merhabalar,</span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Ben Ahmet Gürsel. Mehmet Akif Ersoy Üniversitesi Bilgisayar Mühendisliği 3. sınıf öğrencisiyim.
        2012 yılında dereceyle kazandığım Akdeniz Elektrik-Elektronik Mühendisliği bölümüyle üniversite hayatım başladı.
        Başarılı geçen 4 dönemden sonra 2014 yılında Dünya'nın önde gelen firmalarından bir tanesi olan <strong>Fresenius Medical Care'de</strong> stajımı
        tamamladım. Yine 2014 yılında hala üniversite öğrencisiyken arkadaşlarımla beraber kurduğumuz firmada AR-GE ve
        Gömülü Sistem Tasarım & Programlama görevlerini üstlendim. Daha sonrasında kurduğumuz TUBITAK destekli diğer
        firmamız ile beraber hızlı bir büyüme gerçekleştirdik. 5 yıllık bir süreç sonunda hayatımda yeni amaçlar edinmek ve konfor alanımdan çıkarak
        kendimi bir adım daha öteye taşıyabilmek amacıyla tüm ortaklık ve görevlerimden ayrıldım. 2020 yılının başında aldığım
        hızlı bir kararla tekrar üniversite sınavına girerek bilgisayar mühendisliğini kazandım. Yaşadığımız pandeminin etkisi ve derslerime
        odaklanmak amacıyla bir süredir herhangi bir yerde çalışmıyorum.
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Şu an için ağırlıklı olarak web üzerinde geliştirme yapıyorum ve özellikle frond-end
        alanında uzmanlaşmak için çaba sarfediyorum. Genellikle Javascript dili ve bu dil etrafında oluşturulmuş frameworkler üzerinde çalışıyorum.
        Bu alanda yeteneklerimi geliştirmek ve ekstra yetenekler kazanmak amacıyla online eğitimler ve çeşitli programlara katılıyorum. Yazılımın yanı sıra
        kendimde tasarımcı bakış açısı oluşturabilmek ve geliştirebilmek amacıyla farklı kaynaklar üzerinde çalışmalar yapıyorum.
        Yaşam boyu öğrenme felsefesini benimsediğim için sürekli yeni teknolojiler ve çözümler öğrenmekten büyük keyif alıyorum.
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Aşağıdaki ikonlara tıklayarak sosyal medya hesaplarımı takip edebilir ya da <strong>ahmetgursel@protonmail.com</strong> email adresi
        üzerinden benimle iletişime geçebilirsin.




        </p>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>