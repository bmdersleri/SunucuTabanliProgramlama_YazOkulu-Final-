<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 

?>


  
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Ayarları</h1>
          </div>
          <hr>
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Menu Ayarları</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <div >
           <p style="text-align:left; margin-left:2%;"> Buradan segmentten yeni menu ekleyebilirsiniz.</p>
          </div>
          <br>
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
            
            <div class="card card-dark">
            
              <div class="card-header">
                <h3 class="card-title">Menu Ekleme</h3>
              </div>
              
              
             
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Menu Adı</label>
                    <div class="col-sm-10">
                      <input type="text" name="menu_ad" class="form-control"  id="inputEmail3"  placeholder="Exp: Araştırmalar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Menu Linki</label>
                    <div class="col-sm-10">
                      <input type="text" name="menu_link"class="form-control" id="inputPassword3" placeholder="Exp: www.oldthiefstudio.com or localy arastirma.php">
                    </div>
                    
                  </div>
                  
                    
                  </div>
                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark" name="menu_Kayit_Et"> Menu Kaydet</button>
                  
                </div>
                
              </form>
            </div>
            
            </div>
      </div>
    </section>
    
  </div>
<?php include 'footer.php'; ?>