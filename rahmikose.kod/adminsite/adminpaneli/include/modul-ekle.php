<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modül Ekle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Yeni Modül Ekleme </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      
      <?php
	  if($_POST)
	  {
		  $calistir=$VT->ModulEkle();
		  if($calistir!=false)
		  {
			  echo '<div class="alert alert-success">Modül başarıyla eklenmiştir.</div>';
			  ?>
            <meta http-equiv="refresh" content="2;url=<?=SITE?>">
            <?php
		  }
		  else
		  {
			  echo '<div class="alert alert-danger">Modül Eklenirken  hatayla karşılaştı. Hatalar şunlar olabilir.<br>
			  1. Lütfen boş alan olup olmadığını kontrol ediniz.<br>
			  2. Aynı isimde kayıtlı bir sayfa olmadığına dikkat ediniz.<br>
			  3. Sistemden kaynaklı bir sorunla karşılaşmış olabilirsiniz.<br>
			  4. İlk iki maddeyi dikkatli okuyunuz ve tekrar deneyiniz. Tekrar hata alırsanız lütfen sistemi yeniden başlatın.</div>';
		  }
	  }
	 
	  ?>
       
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="#" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekle</label>
                    <input type="text" class="form-control" name="baslik" placeholder="Sayfa ismini yazınız">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="durum" value="1" checked="checked">
                    <label class="form-check-label" for="exampleCheck1">Aktif Et</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modül Ekle</button>
                </div>
              </form>
            </div>
       </div>
       
       <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>