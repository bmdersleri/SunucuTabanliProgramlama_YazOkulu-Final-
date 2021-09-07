<?php
session_start();//sesssion işlemlerinin yapılacağını belirtiyoruz.
session_destroy();//var olan oturumu ortadan kaldırıyoruz.
setcookie("cerez","",time()-1);//var olan çerezi ortadan kaldırıyoruz.
header("location:index.php");//login.php ye yönlendirdim.
?>