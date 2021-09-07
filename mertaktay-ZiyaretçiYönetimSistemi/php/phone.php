<!DOCTYPE html>
<html>
<head>
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
       </script>
	<title>Telefon Numarası</title>
	<link rel="stylesheet" href="../css/custom.css">
	<style type="text/css">
		body
		{
			margin:0px;
	background:-webkit-linear-gradient(#384e72, #4b648c ,#60789e,#4b648c, #384e72);
		}
	</style>
</head>
<body>
 <form action="pass.php" method="post">
                        <div class="main">
                        <h2>Telefon Numarası</h2>
                        <input id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" name="phone" style="width: 300px; height: 12px; border-radius: 10px; padding: 10px; color: black;">
                        <span id="message"></span><br><br>
                        <input type="submit" value="Oluştur" style="width: 150px; height: 25px; border-radius: 10px; border: none;">
                        </div>
                </form>
</body>
</html>