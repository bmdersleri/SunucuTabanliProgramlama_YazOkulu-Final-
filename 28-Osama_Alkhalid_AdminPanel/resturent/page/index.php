<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Osama Final</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Osama Alkhalid</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Admin Panel</a></li>
                      
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Yeni restoran??m??za ho?? geldiniz</h1>
                    <h2 class="masthead-subheading mb-0">Size t??m hizmetleri sunmaktan mutluluk duyuyoruz</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">yeme??imizi izle</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/04.webp" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Tavuk D??neri</h2>
                            <p>Bu yemek T??rkiye'nin en pop??ler yemeklerinden biridir.
                                Biz bu yeme??i h??zl?? ve ??ok lezzetli haz??rlad??????m??z i??in umar??z elimizdeki en k??sa s??rede siz de deneyeceksiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/01.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Pizza </h2>
                            <p>??talyan pizzas?? d??nya ??ap??nda servis edilen en l??ks yemeklerden biridir.
Otantik ??talyan usul?? pizza haz??rlamak i??in ??zel bir ??ef g??revlendirdik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">HumBurger</h2>
                            <p>Amerikan mutfa????nda servis edilen en l??ks yemeklerden biri olan hamburger yeme??i y??llard??r bu yeme??i haz??rl??yoruz ve bu yemek ??ok pop??ler oldu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <center style="background-color:#461b1b;color:white;">
        <h3 style="font-size:100px">
   Yemeklerimiz 
  <small class="text"  >Kategori</small>
</h3>
        </center>
         <table class="table  " style="background-image:url(assets/img/bak.png);color:white;font-size:20px;text-align:center">
  <thead>
    <tr>
      <th scope="col">??r??n ??d</th>
      <th scope="col">kategori</th>
      <th scope="col">??r??n </th>
      <th scope="col">fiyat</th>
    </tr>
  </thead>
  <tbody>
      
        <?php


$sql = "SELECT * FROM product_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     
      echo "<tr>";
        echo "<th scope='row'>". $row["product_id"]. "</th>";
        echo "<td>" . $row["category_name"]. "</td>";
        echo "<td>" . $row["product_name"]. "</td>";
        echo "<td>" . $row["product_price"]. "</td>";
         
      echo "</tr>";

  }
    
} else {
  echo "0 results";
}

 
?>
        
     
   
   
  </tbody>
</table>
        
        
        
        
        <center><h3>Lokanta hakkinda</h3></center>
        
        <center>
            <?php 
                $sql = "SELECT * FROM restaurant_table";
                $result = mysqli_query($conn, $sql);

 
 
  while($row = mysqli_fetch_assoc($result)) {
     
     
         
        
 
  
    
 
            
            ?>
        <div class="card" style="width: 18rem;">
  <img src="../<?php echo $row["restaurant_logo"]; ?>" class="card-img-top" alt="..." width="40px"  >
  <div class="card-body">
    <h5 class="card-title">Lokanta adi:<?php echo "<span>" . $row["restaurant_name"]."</span>";  ?></h5>
    <p class="card-text">Lokanta tag:<?php echo "<span>" . $row["restaurant_tag_line"]."</span>";  ?></p>
  </div>
  <ul class="list-group list-group-flush">
     
    
    <li class="list-group-item">Lokanta telefon:  <?php echo "<span>" . $row["restaurant_contact_no"]."</span>";  ?></li>
       <li class="list-group-item">Lokanta e-posta:  <?php echo "<span>" . $row["restaurant_email"]."</span>";  ?></li>
      <li class="list-group-item">Lokanta saat:  <?php echo "<span>" . $row["restaurant_timezone"]."</span>";  ?></li>
      <li class="list-group-item">Lokanta adress:  <?php echo "<span>" . $row["restaurant_address"]."</span>";  ?></li>
  </ul>
  
</div>
        <?php  } ?>
        </center>
        

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small"> Osama &copy; Alkhalid Final Odev 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
