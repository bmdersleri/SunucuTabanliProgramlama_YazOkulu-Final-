
<div class="content-wrapper" style="background-color:mediumpurple">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hakkımızda Ayarları</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Hakkımızda Ayarları</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

       <?php 
       if($_POST)
       {
         if(!empty($_POST["minibaslik"]) && !empty($_POST["anabaslik"]) && !empty($_POST["text"]))
         {
           $minibaslik=$VT->filter($_POST["minibaslik"]);
           $anabaslik=$VT->filter($_POST["anabaslik"]);
           $text=$VT->filter($_POST["text"]);
            
            $guncelle = $VT->SorguCalistir("UPDATE ayarlar", "SET minibaslik=?, anabaslik=?, text=? WHERE ID=?", array($minibaslik,$anabaslik,$text,1),1);
           
           if($guncelle!=false)
           {
            ?>
            <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
            <meta http-equiv="refresh" content="2;url=<?=SITE?>hakkımızda-ayarlari" />
            <?php
           }
           else {
            ?>
            <div class="alert alert-info">İşleminiz gerçekleştirilemedi.</div>
            <meta http-equiv="refresh" content="2;url=<?=SITE?>hakkımızda-ayarlari" />
            <?php
           }

         }
         else {
           ?>
            <div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
           <?php
         }
       }
       ?>
      <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">
       <div class="card-body card card-primary">
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                  <label>Mini Başlık</label>
                  <input type="text" class="form-control" placeholder="Mini Başlık ..." name="minibaslik" value="<?=$siteminibaslik?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="text" class="form-control" placeholder="Ana Başlık ..." name="anabaslik" value="<?=$siteanabaslik?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label>Adres</label>
                  <input type="text" class="form-control" placeholder="Text ..." name="text" value="<?=$sitetext?>">
                </div>
            </div>
               <button type="submit" class="btn btn-block btn-primary">GÜNCELLE</button> 
            </div>
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
      </div>  
      </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>