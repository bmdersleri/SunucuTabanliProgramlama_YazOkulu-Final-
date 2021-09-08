<?php
if(!empty($_GET["tablo"]))
{
	$tablo = $VT->filter($_GET["tablo"]);
	$kontrol = $VT->VeriGetir("moduller","WHERE tablo=? AND durum=?",array($tablo,1),"ORDER BY ID ASC",1);
	if($kontrol != false)
	{
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$kontrol[0]["baslik"]?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active"><?=$kontrol[0]["baslik"]?> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
      <a href="<?=SITE?>ekle/<?=$kontrol[0]["tablo"]?>" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus"></i> YENİ EKLE</a>
      </div>
      </div>
      
      <form action = "#" method="post" enctype="multipart/form-data">
      <div class="card-body">
           <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kategori Seç</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              <!-- /.col -->
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label> Başlık </label>
                <input type="text" class="form-control" placeholder="Başlık . . ." name="baslik">
                </div>
                <div class="col-md-12">
                <div class="form-group">
                <label> Açıklama </label>
                <textarea class="textarea" placeholder="Açıklama Alanı." name="metin"
                		  style="width:100%; height:350px; font-size:14px; line-height:18px; border:1px solid #dddddd; padding:10px;"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label> Anahtar </label>
                <input type="text" class="form-control" placeholder="Anahtar . . ." name="anahtar">
                </div>
            <!-- /.row -->
          </div>
          <div class="col-md-12">
                <div class="form-group">
                <label> Description </label>
                <input type="text" class="form-control" placeholder="Description . . ." name="description">
                </div>
              <div class="col-md-12">
              <div class="form-group">
                <label> Resim </label>
                <input type="text" class="form-control" placeholder="Resim seçiniz. . . ." name="resim">
                </div>
                
                <div class="col-md-12">
                <div class="form-group">
                <label> Sıra No </label>
                <input type="number" class="form-control" placeholder="Sıra No . . ." name="sirano">
                </div>
          <!-- /.card-body -->
          
        </div>
        
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
	}
	else
	{
		?>
        <meta http-equiv="refresh" content="0; url=<?=SITE?>">
        <?php
	}
}
else
{
  ?>
  		?>
        <meta http-equiv="refresh" content="0; url=<?=SITE?>">
        <?php
}