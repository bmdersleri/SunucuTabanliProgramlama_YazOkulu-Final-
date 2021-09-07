<?php

setcookie('sepet', '_', time() - 2629743); //′Cookie_Isim′ isimli çerezi sil
setcookie("sepet",$_POST["urun_id"],time()+2629743,"/","localhost",false,false);
echo 1;

?>