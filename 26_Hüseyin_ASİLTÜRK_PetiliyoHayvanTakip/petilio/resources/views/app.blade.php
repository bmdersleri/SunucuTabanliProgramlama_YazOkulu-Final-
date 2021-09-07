<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Petiliyo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   
@yield('css')

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
    <!--  <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->  
        <span class="brand-text font-weight-light">Petiliyo</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a href="/gelir" class="nav-link">Gelir</a>
          </li>
          <li class="nav-item">
            <a href="/gider" class="nav-link">Gider</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">İşletme</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="/hayvan" class="dropdown-item">Hayvan Listesi </a></li> 
            </ul>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="/stok" class="dropdown-item">Stok Listesi </a></li> 
            </ul>
          </li>
       <ul class="navbar-nav">

      <a id="dropdownSubMenu2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kullanıcı</a>

      <li class="nav-item dropdown">
         <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
          <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a></li> 

         <li><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form></li>
        </ul>  
     </li>
  </ul>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Burak Yıldırım
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Kullanıcıdan Mesaj Var...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Saat Önce</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            
            
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Tüm Mesajları Gör</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">11</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">11 Bildirim</span>
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 Yaklaşan Doğum
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 Yaklaşan Stok Bitimi
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Tüm Bildirimler</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>   
  </nav> 

            @yield('icerik')
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
       <h5 class="text-center">Hızlı Menü</h5>
      <div class="card control-sidebar-dark collapsed-card"  >
        <div class="card-header">
          <h3 class="card-title"  >Süt Geliri</h3>

          <div class="card-tools"  >
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0"  >
          <form id="gunlukSutEkle" action="">
            <input type="hidden" name="_token" value="D7CpgWAGhFs8yv13eMNu0oHYJXtfbsQtmNa78Pay">                            <div class="row" style="padding:10px">
                <div class="col-12">
                  <div class="form-group"  >
                    <label  >Litre</label>
                    <input type="text" class="form-control" name="miktar" id="litreSutFiyat" onkeypress="return isDoKey(event)">
                  </div>
                  <div class="form-group"  >
                    <label  >Birim Fiyatı</label>
                    <input type="text" disabled="" class="form-control" id="sutBirinFiyat" value="2.75₺" valuee="2.75">
                    <input type="text" class="form-control" hidden="" name="bFiyat" value="2.75">


                  </div> 
                  <div class="form-group row"  >
                     <div class="custom-control custom-radio col-5 offset-1">
                      <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="Sabah" name="ogun" checked="">
                      <label for="customRadio4" class="custom-control-label"  >Sabah</label>
                    </div>

                    <div class="custom-control custom-radio col-5  offset-1"  >
                      <input class="custom-control-input custom-control-input-danger custom-control-input-outline" value="Akşam" type="radio" id="customRadio5" name="ogun">
                      <label for="customRadio5" class="custom-control-label"   >Akşam</label>
                    </div>
                  


                  </div> 
                  <div class="form-group"  > 
                    <label  >Gün:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" name="tarih" class="form-control datetimepicker-input" value="10/03/2021" data-target="#reservationdate">
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                    <a class="nav-link"  >
                      <i class="fas fa-filter"></i> Toplam  <span id="toplamSutUcreti"> </span>₺
                    </a> 
                    <div class="float-right">
                      <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Temizle</button> 
                      <a id="sutGeliriEkle" class="btn btn-info"><i class="fas fa-share"></i> Ekle </a> 

                    </div>
                </div>
              </div> 
            </form> 
        </div>

        
        <!-- /.card-body -->
     </div>
    <div class="card control-sidebar-dark collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Stok Düşme</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <form id="gunlukSutEkle" action="">
          <input type="hidden" name="_token" value="D7CpgWAGhFs8yv13eMNu0oHYJXtfbsQtmNa78Pay">                            <div class="row" style="padding:10px">
              <div class="col-12">
                <div class="row">
                  <div class="col-sm-10"> 
                      <div class="form-group">
                          <label for="exampleInputPassword1">Stok Seç</label>
                          <select name="irkHay" class="form-control">
                              <option value="Beyaz" valuee="1">Yem</option>
                              <option value="Simental" valuee="1">Diğer</option> 
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-1" style="padding-top: 12px">
                      <div class="form-group pt6">
                          <label for="exampleInputPassword1"> </label>
                          <span class="input-group-append">
                            <button type="button" idd="1" title="Türleri Düzenlemek veya Eklemek İçin Tıklayınız" class="btn btn-default btn-sm sutDuzenle">
                              <i class="far fa-edit"></i>
                            </button>
                          </span>
                      </div> 
                  </div> 
            </div>
            <div class="form-group">
              <label>Açıklama</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
             
            <div class="form-group">
              <label>Miktar</label>
              <input type="text" class="form-control" name="miktar" id="litreSutFiyat" onkeypress="return isDoKey(event)">
            </div>  
             
 
                  <div class="float-right">
                     <a id="sutGeliriEkle" class="btn btn-info"><i class="fas fa-share"></i> Stok Düş </a>  
                  </div>

              </div>
            </div> 
          </form> 
      </div>

      
      <!-- /.card-body -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@yield('js')
</body>
</html>
