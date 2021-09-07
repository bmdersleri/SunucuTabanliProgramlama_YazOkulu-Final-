@extends('app')

    @section('icerik') 
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> Gelir <small></small></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li> 
                  <li class="breadcrumb-item"><a href="#">Gelir</a></li> 
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div> 
        
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>0</h3>
  
                  <p>Süt</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div> 
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>0</h3>
  
                  <p>Satış</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div> 
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>0</h3>
  
                  <p>Diğer</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div> 
              </div>
            </div>
            <!-- ./col -->
            
            </div>
            <!-- ./col -->
          </div>
        
        

          <div class="container">


        <div class="card" > 
             <div class="card-body">
            

              <section class="content">
                <div class="row">
                  <div class="col-md-4">
                    <a class="btn btn-primary btn-block mb-3">Gelir Ekleme</a>
          
                    <div class="card collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title">Süt Geliri</h3>
          
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <form id="gunlukSutEkle" action="">
                          @csrf
                            <div class="row" style="padding:10px">
                              <div class="col-12">
                                <div class="form-group">
                                  <label>Litre</label>
                                  <input type="text" class="form-control" name="miktar" id="litreSutFiyat" onkeypress="return isDoKey(event)" >
                                </div>
                                <div class="form-group">
                                  <label>Birim Fiyatı</label>
                                  <input type="text" disabled class="form-control"id="sutBirinFiyat" value="2.75₺" valuee="2.75" >
                                  <input type="text" class="form-control" hidden name="bFiyat"  value="2.75" >

 
                                </div> 
                                <div class="form-group row">
                                  @php
                                      if ((string)date("A")!="PM") {
                                        echo ' <div class="custom-control custom-radio col-5 offset-1">
                                    <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="Sabah"  name="ogun" checked="">
                                    <label for="customRadio4" class="custom-control-label">Sabah</label>
                                  </div>

                                  <div class="custom-control custom-radio col-5  offset-1">
                                    <input class="custom-control-input custom-control-input-danger custom-control-input-outline" value="Akşam"  type="radio" id="customRadio5" name="ogun">
                                    <label for="customRadio5" class="custom-control-label">Akşam</label>
                                  </div>';
                                      } 
                                      else {
                                        echo ' <div class="custom-control custom-radio col-5 offset-1">
                                    <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="Sabah" name="ogun" >
                                    <label for="customRadio4" class="custom-control-label">Sabah</label>
                                  </div>

                                  <div class="custom-control custom-radio col-5  offset-1">
                                    <input class="custom-control-input custom-control-input-danger custom-control-input-outline" value="Akşam" type="radio" id="customRadio5" checked="" name="ogun">
                                    <label for="customRadio5" class="custom-control-label">Akşam</label>
                                  </div>';
                                      }
                                  @endphp

                                


                                </div> 
                                <div class="form-group">
                                  <label>Gün:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" name="tarih" class="form-control datetimepicker-input" value="{{date("d/m/Y")}}" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                  <a class="nav-link">
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
                    <!-- /.card -->
                    <div class="card collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title">Diğer Gelir</h3>
          
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        
                        <div class="row" style="padding:10px">
                          <div class="col-12">
                            <div class="form-group">
                              <label>Cinsi</label>
                              <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                              <label>Litre</label>
                              <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                              <label>Birim Türü</label>
                              <input type="text" class="form-control" placeholder="2.35 ₺">
                            </div>
                            <div class="form-group">
                              <label>Birim Fiyatı</label>
                              <input type="text" class="form-control" placeholder="2.35 ₺">
                            </div> 
                              <a class="nav-link">
                                <i class="fas fa-filter"></i> Toplam  65₺ 
                              </a> 
                              <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Ekle</button>
                                <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Temizle</button>
                              </div>
                          </div>
                        </div>



                      </div>

                      
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-8">
                    
                    <div class="card card-primary card-outline">
                       
                      
                      <!-- /.card-header -->
                      <div class="card-body p-0"> 
                        <div class="card">  
                          <div class="card-header">
                            <h3 class="card-title">Süt Geliri</h3>
                           
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            
                          </div>
                              <div class="card-body">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                                  Tahsilat Yap
                                </button>
                          <div class="row">
                       
                          <div class="col-12"> 
                                <table id="sutGelirDonem" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th></th>
                                    <th>Tarih</th> 
                                    <th>Öğün</th> 
                                    <th>Miktar</th>
                                    <th>B. Fiyat</th>
                                    <th>T.Fiyat</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @for ($i = 0; $i < count($gunlukSut); $i++)
                                        <?php 
                                        
                                  echo'<tr>
                                        <td>
                                          <button type="button" idd="'.$gunlukSut[$i]->id.'" class="btn btn-default btn-sm sutSil">
                                            <i class="far fa-trash-alt"></i>
                                          </button>
                                          <button type="button" idd="'.$gunlukSut[$i]->id.'" class="btn btn-default btn-sm sutDuzenle">
                                            <i class="far fa-edit"></i>
                                          </button>  
                                        </td>
                                        <td>'.$gunlukSut[$i]->tarih.'</td>
                                        <td>'.$gunlukSut[$i]->ogun.'</td>
                                        <td>'.$gunlukSut[$i]->miktar.'</td>
                                        <td>'.$gunlukSut[$i]->bFiyat.'</td>
                                        <td>'.($gunlukSut[$i]->miktar)*($gunlukSut[$i]->bFiyat).'</td>
                                       </tr>';
                                        
                                        ?>
                                    @endfor
                                 
                                  
                                  </tfoot>
                                </table>
                              </div>
                              <!-- /.card-body --> 
                        </div>



                      </div>  
                    </div>

                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h3 class="card-title">Tüm Gelir</h3>
          
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0"> 
                        <div class="card">  
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>Cinsi</th>
                                    <th>Birimi</th>
                                    <th>T. Birim</th>
                                    <th>B. Fiyatı</th>
                                    <th>T. Fiyatı</th> 
                                    <th>Ek Gider</th> 
                                    <th>Tarih</th> 
                                    <th>Açıklama</th> 
                                  </tr>
                                  </thead>
                                  <tbody>
                                
                                    @for ($i = 0; $i < count($tumGelir); $i++)
                                    <tr>  
                                    <td>{{ $tumGelir[$i]->cinsi }}</td>
                                    <td>{{ $tumGelir[$i]->birimi }}</td>
                                    <td>{{ $tumGelir[$i]->tBirim }}</td>
                                    <td>{{ $tumGelir[$i]->bFiyat }}</td>
                                    <td>{{ $tumGelir[$i]->tFiyat }}</td>
                                    <td>{{ $tumGelir[$i]->EkGider }}</td>
                                    <td>{{ $tumGelir[$i]->tarih }}</td>
                                    <td>{{ $tumGelir[$i]->Aciklama }}</td>
                                  </tr>
                                    @endfor
                                  
                                  
                                  </tfoot>
                                </table>
                              </div>
                              <!-- /.card-body -->
                          </div>


                        <!-- İÇERİK -->
 
                      </div>  
                      <div class="card-footer p-0">
                        <div class="mailbox-controls">   
                          <a class="nav-link">
                            <i class="fas fa-filter"></i> Tam Toplam  65₺ 
                          </a>  
                        </div>
                      </div>
                    </div> 
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>








            </div> 
        </div>
    
      </div>





        
                
        <!-- /.content -->
      </div>
      
    </div>
  


<!-- MODAL -->
            <div class="modal fade" id="modal-sm">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tahsilatı Yapılacak Ay</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div> 
                  <?php

$aylar = array(

		1=>"Ocak",

		2=>"Şubat",

		3=>"Mart",

		4=>"Nisan",

		5=>"Mayıs",

		6=>"Haziran",

		7=>"Temmuz",

		8=>"Ağustos",

		9=>"Eylül",

		10=>"Ekim",

		11=>"Kasım",

		12=>"Aralık"

);

?>
                  <div class="modal-body">
                    <form id="aylikSutToplamiGetir" action="aylikSutToplamiGetir" method="POST">
                      @csrf
                     <div class="form-group">
                      <label>Tahsilatı Yapılmayan Aylar</label>
                      <select id="alikSutMiktarAylari" name="sutAy" class="custom-select form-control-border border-width-2">
                        <option value="0" selected>Seçim Yap</option>
                        @for ($i = 0; $i < count($tahsilEdilecekAySut); $i++)
                            @php
                                echo "<option value=".$tahsilEdilecekAySut[$i]->yil.$tahsilEdilecekAySut[$i]->ay." >".$aylar[$tahsilEdilecekAySut[$i]->ay]."-".$tahsilEdilecekAySut[$i]->yil."</option>";
                            @endphp 
                        @endfor
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="stopaj">Ek Giderler <code>  Stopaj vb.</code></label>
                      <input type="text" name="stopaj" class="form-control form-control-border border-width-2" id="stopaj" onkeypress="return isDoKey(event)" placeholder="Gider Gir">
                    </div>
                    <a class="nav-link">
                      <i class="fas fa-filter"></i> Ayın Toplam Geliri  <span id="aylikToplamSutUcreti"> </span>₺
                    </a>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Çık</button> 
                    <a id="aylikSutEklemesi" class="btn btn-primary"><i class="fas fa-share"></i> Tahsil Et </a> 

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="SutTahsilat">
                      <label class="custom-control-label" for="SutTahsilat">Tahsilat İşlemi Geri Alınamaz</label>
                    </div>
                  </div>
                </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>


    @endsection

    @section('css')
   <!-- DataTables -->
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
<!-- DATEEEEEEE -->

   <!-- daterange picker -->
   <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- Bootstrap4 Duallistbox -->
   <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
   <!-- BS Stepper -->
   <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
   <!-- dropzonejs -->
   <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">


   
    @endsection

    @section('js')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    

    
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>

    <script>

      
      $('#stopaj').keyup(function(e)
       { 
       if ($('#alikSutMiktarAylari').val()!=0) {
         
          var dusenFiyat =  ($("#stopaj").val().length != 0 ) ?  parseFloat($("#stopaj").val()) : 0 ; 
          var sonuc =  parseFloat(toplamFiyat-dusenFiyat) 
          $("#aylikToplamSutUcreti").html(sonuc); 
       }
       else
       {alert("Dönem Seçin");
       $('#stopaj').val("");
       }


      });






    $('#aylikSutEklemesi').on('click', function (e) { 
      
      var form = $("#aylikSutToplamiGetir");
      var url = form.attr('action');  
      var token = $('meta[name="csrf-token"]').attr('content');
      $( "input[name='sutAy']" ).val(); 
      $( "input[name='stopaj']" ).val();  

        $.ajax({
            type: "POST",
            url: "/aylikSutTahsilEt",
            data: form.serialize(), 
            success: function(data)
            {      
              alert(data) 
            }
        }); 

    });



      
      var toplamFiyat;
$('#alikSutMiktarAylari').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    var token = $('meta[name="csrf-token"]').attr('content');
  
    $.ajax({
        type: "POST",
        url: "/aylikSutToplamiGetir",
        data: {'valueSelected': valueSelected,'_token':token},
        success: function(data)
        {      
          
          toplamFiyat =   parseFloat(data);
          var dusenFiyat =  ($("#stopaj").val().length != 0 ) ?  parseFloat($("#stopaj").val()) : 0 ; 
          var sonuc =  parseFloat(toplamFiyat-dusenFiyat) 
          $("#aylikToplamSutUcreti").html(sonuc);  
        }
    }); 

});

$("#sutGeliriEkle").on("click", function () {
 
      var form = $("#gunlukSutEkle");
      var url = form.attr('action'); 
        swal({
        title: "Emin Mi?",
        text: "Eklenecek",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
          
          $.ajax({
                  type: "POST",
                  url: "/gelir",
                  data: form.serialize(), 
                  success: function(data)
                  {     
                    swal(data+" Kayıt Eklendi!", {
                      icon: "success",
                    });   
                    setInterval(function() { location.reload();
                     }, 1000);
                  }
                  });
        
        } else {
          swal("Neyseki Vaz Geçtin!");
        }
        }); 

});



$(".sutDuzenle").on("click", function () { 
   var idd = $(this).attr("idd");
   var token = $('meta[name="csrf-token"]').attr('content');
   var td = $(this).parent().parent();  
  $("input[name='miktar']").val(td.children("td:eq(3)").html());
  var gun =  td.children("td:eq(1)").html().substring(8, 10);
  var ay = td.children("td:eq(1)").html().substring(5, 7); 
  var yil = td.children("td:eq(1)").html().substring(0, 4);  
  alert(gun+"-"+ay+"-"+yil);
  $("input[name='tarih']").val(gun+"-"+ay+"-"+yil ); 
  $("input[name='ogun']").filter('[value="'+td.children("td:eq(2)").html()+'"]').attr('checked', true); 
  $("input[name='bFiyat']").val(td.children("td:eq(4)").html()); 
           var birimFiyat =   parseFloat(td.children("td:eq(4)").html());
           var litreFiyat =   parseFloat(td.children("td:eq(3)").html()); 
          $("#toplamSutUcreti").html(litreFiyat*birimFiyat);
 });






$(".sutSil").on("click", function () {
   
  var idd = $(this).attr("idd");
  var token = $('meta[name="csrf-token"]').attr('content');
  var td = $(this).parent().parent(); 
  var table = $('#sutGelirDonem').DataTable();

   swal({
   title: "Emin Misin?",
   text: "Eklenecek",
   icon: "warning",
   buttons: true,
   dangerMode: true,
   })
   .then((willDelete) => {
   if (willDelete) {
     
     $.ajax({
             type: "POST",
             url: "/gelirSutSil",
             data: {'veri1': idd,'_token':token},
             success: function(data)
             {     
               swal(data+" Kayıt Eklendi!", {
                 icon: "success",
               });   
               table
                .row(td)
                .remove()
                .draw(); 
             }
             });
   
   } else {
     swal("Neyseki Vaz Geçtin!");
   }
   }); 

});


    </script>






    <script> 
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
} 
function isDoKey(event) {
  if (event.which != 46 && (event.which < 47 || event.which > 59))
    {
        event.preventDefault();
        if ((event.which == 46) && ($(this).indexOf('.') != -1)) {
            event.preventDefault();
        }
    }
}
       $('#litreSutFiyat').keyup(function(e)
       { 
           var birimFiyat =   parseFloat($("#litreSutFiyat").val());
           var litreFiyat =   parseFloat($("#sutBirinFiyat").attr("valuee")); 
          $("#toplamSutUcreti").html(litreFiyat*birimFiyat);
          return true;
      });

      $(function () {
        $("#example1").DataTable({
          "paging": true, 
          "searching": true,
          "ordering": true,
          "info": true, 
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        
      });
      $(function () {
        $("#sutGelirDonem").DataTable({ 
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false, 
        "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#sutGelirDonem_wrapper .col-md-6:eq(0)');
        
      });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'DD-MM-YYYY',
        
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'DD/MM/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
  // DropzoneJS Demo Code End
    </script>
    @endsection