<?php
include('login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script type="text/javascript" src="login.css"></script>
    <title>Document</title>
</head>
<body>
    <div class="cont">
      <div class="logo">Giriş Paneli</div>
        <div class="demo">
          
          <div class="login"></div>
          
          <form action="" method="post"> 
            
            <div class="login__form">
              
              <div class="login__row">
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                </svg>
                 
                <input type="text" class="login__input name" name = "mail" placeholder="Kullanıcı Adı"/>
              </div>
              <div class="login__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="login__input pass" name = "pass" placeholder="Şifreniz"/>
              </div>
              <button type="submit" class="login__submit">Giriş Yap</button>
               
            </form>
            </div>
          </div>
          
</body>
</html>