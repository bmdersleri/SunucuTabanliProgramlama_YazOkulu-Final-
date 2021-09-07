<!DOCTYPE html>
<html>
<head>
  <title>Rapor</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
<style type="text/css">
    body
    {

      background-repeat: no-repeat;
      background-size: cover;
      margin: 0px;
      font-family: verdana;
    }
  </style>
</head>
<body>
<form action="report.php" method="post">
<div style="margin-left: 20px;padding: 26px;">
        <span style="color: white; font-size: 45px;">Rapor</span><br>
        <div style="margin-top: 10px;">
        <label style="font-size: 25px; color: white;">İlk Tarih </label>
        <input type="text" name="from" id="datepicker" placeholder="İlk Tarih" required style="width: 20%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>

        <label style="font-size: 25px; color: white;">Son Tarih </label>
        <input type="text" name="to" id="datepicker1" placeholder="Son Tarih" required style="width: 20%; height:1px; border-radius: 10px;border:none; margin-left: 58px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
        
        
         <input type="submit" value="Raporla" style="width: 30%; height:32px; border-radius: 10px;border:none; margin-left: 6px; margin-top: 11px; background-color: antiquewhite; cursor: pointer; color: black;" ><br><br>
         </div>
</div>
</form>
</body>
</html>
 
 
 <script>
  
    $( "#datepicker" ).datepicker({
	dateFormat: 'yy-mm-dd',
  minDate: -30,
  maxDate:0,
  } );
  
   $( "#datepicker1" ).datepicker({
	dateFormat: 'yy-mm-dd',
  minDate: -30,
  maxDate:0,
  } );
  
  
  
  
  </script>

