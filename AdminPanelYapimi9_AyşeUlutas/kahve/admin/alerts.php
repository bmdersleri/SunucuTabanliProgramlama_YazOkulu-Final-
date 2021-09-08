

<script src="sweetalert2.min.js"></script>

<link rel="stylesheet" href="sweetalert2.min.css">







<script type="text/javascript">

  const Toast = Swal.mixin({

    toast: false,

    position: 'center',

    showConfirmButton: false,

    timer: 5000,

    timerProgressBar: true,



  })



</script>





<?php if (@$_GET['durum'] == "kodVar") { ?>



  <script type="text/javascript">

    Toast.fire({

      icon: 'warning',

      title: 'Bu kod daha zaten kullanımda'

    })



  </script>



<?php } ?>







<?php if (@$_GET['durum'] == "basarili") { ?>



  <script type="text/javascript">

   Toast.fire({

    icon: 'success',

    title: 'İşlem Başarılı.'

  })



</script>



<?php } ?>







<?php if (@$_GET['durum'] == "giris") { ?>



  <script type="text/javascript">

   Toast.fire({

    icon: 'success',

    title: 'Başarıyla giriş yaptınız. Hoşgeldiniz!'

  })



</script>



<?php } ?>












<?php if (@$_GET['durum'] == "yeniUye") { ?>



  <script type="text/javascript">

   Toast.fire({

    icon: 'success',

    title: 'Başarıyla üye olundu. Yönetici hesabınızı onaylayınca sisteme giriş yapabileceksiniz. Teşekkürler'

  })



</script>



<?php } ?>













<?php if (@$_GET['durum'] == "guncelleme") { ?>



  <script type="text/javascript">

   Toast.fire({

    icon: 'success',

    title: 'Profil başarıyla güncellendi.'

  })



</script>



<?php } ?>











<?php if (@$_GET['durum'] == "sifreBasarili") { ?>



  <script type="text/javascript">

   Toast.fire({

    icon: 'success',

    title: 'Şifreniz başarıyla değiştirildi.'

  })



</script>



<?php } ?>









<?php if (@$_GET['durum'] == "basarisiz") { ?>



  <script type="text/javascript">

    Toast.fire({

      icon: 'error',

      title: 'İşlem Başarısız'

    })



  </script>



<?php } ?>









<?php if (@$_GET['durum'] == "onay") { ?>



  <script type="text/javascript">

    Toast.fire({

      icon: 'warning',

      title: 'Hesabınız onaylanmamış'

    })



  </script>



<?php } ?>













<?php if (@$_GET['durum'] == "sifreYanlis") { ?>



  <script type="text/javascript">

    Toast.fire({

      icon: 'error',

      title: 'Yanlış Şifre Girdiniz.'

    })



  </script>



<?php } ?>







<?php if (@$_GET['durum'] == "musteriVar") { ?>



  <script type="text/javascript">



    Toast.fire({

      icon: 'warning',

      title: 'Bu e-posta adresi kullanımda'

    })



  </script>



<?php } ?>





<?php if (@$_GET['durum'] == "sifreUyusmuyor") { ?>



  <script type="text/javascript">





    Toast.fire({

      icon: 'error',

      title: 'İşlem Başarısız, Şifreler uyuşmuyor'

    })



  </script>



<?php } ?>







<?php if (@$_GET['durum'] == "girisBasarisiz") { ?>



  <script type="text/javascript">



    Toast.fire({

      icon: 'error',

      title: 'Başarısız Giriş'

    })





  </script>



<?php } ?>



