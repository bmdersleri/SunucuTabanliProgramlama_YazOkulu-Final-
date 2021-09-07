<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Yönetici Ekle</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		<script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
        function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  
        else
            charCode = evt.which;  
        if (charCode == 32) 
            return true;
        if (charCode > 31 && charCode < 65)
            return false;
        if (charCode > 90 && charCode < 97) 
            return false;
        if (charCode > 122)
            return false;
        return true;
    }
       </script>
	<style type="text/css">
		body
		{
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0px;
			
		}
	</style>
</head>
<body>
<form action="admin_user_insert_0.php" method="post" enctype="multipart/form-data">
	<div class="admin_transparent">
		<div class="admin_main">
			<span style="color: white; font-size: 64px;font-family: sans-serif;">Admin Hesabı</span>
			<div class="admin_center">
				<input type="text" name="username" placeholder="Kullanıcı adınızı giriniz" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
				<input type="text" name="name1" onkeypress="return onlyAlphabets(event);" name="name" placeholder="Adınızı giriniz" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
				<div style="width: 80%;">   
					<label style="font-size: 25px; color: white;">Cinsiyet : </label>			<input type="radio" name="gender" value="Male" style="margin-left: 18px;"><label style="font-size: 25px; color: white;">Erkek</label>   
					<input type="radio" name="gender" value="Female"><label style="font-size: 25px; color: white;">Kadın</label><br></div>
				<input type="password" name="password" placeholder="Şifrenizi Giriniz" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 18px; background-color: antiquewhite; color: black;"><br><br>
				<input id="phone" type="text" pattern="\d{10}" title="Lütfen tam olarak 10 hane girin" onkeypress="Telefon()" maxlength="10" name="phone" placeholder="Telefon Numaranızı Girin" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
				<select name="user" style="width: 70%;  border-radius: 10px;border:none; margin-left: 22px; padding: 8px;margin-top: 10px; color: black;" >
					
					<option value="admin">Admin</option>
					<option value="guard">Kullanıcı</option>
				</select><br><br>
				<div class="box">
					<input type="file" name="image" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
					<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Bir dosya seçin&hellip;</strong></label>
				</div>
				<br>
				<div class="sign">
					<input type="submit" value="Üye ol" style="width: 30%; height:32px; border-radius: 10px;border:none; margin-left: 22px; margin-top: 10px; background-color: antiquewhite; cursor: pointer; color: black;" ><br><br>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="../javascript/custom-file-input.js"></script>

</body>
</html>