@extends('app')

    @section('icerik') 
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> Hayvan Listesi <small></small></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li> 
                  <li class="breadcrumb-item"><a href="#">İşletme</a></li> 
                  <li class="breadcrumb-item"><a href="#">Hayvan Listesi</a></li>    
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div> 
        
        <div class="container">
              
            <div class="card" >
                <div class="card-header text-center">
                    <h3 class="card-title " ><button class="btn btn-primary duzenlemeButton hayEkle" >Yeni Hayvan Ekle</button></h3>
                </div>
                <h2 class="card-title text-center">Hayvan Listesi</h2>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Küpe No</th>
                      <th>Adı</th>
                      <th>Irk</th>
                      <th>Cinsiyet</th>
                      <th>Doğum Tarihi</th>
                      <th>Gebelik Durum</th>
                    </tr>
                    </thead>
                    <tbody>

                    @for ($i = 0; $i < count($hayvanlar); $i++)
                    <tr>
                      <td>  
                        <div class="btn-group">
                          <button type="button" class="btn btn-success dropdown-toggle dropdown-icon btn-xs" data-toggle="dropdown" aria-expanded="false">
                          </button>
                          <div class="dropdown-menu" style="">
                            <button type="button" idd="{{$hayvanlar[$i]->HayID}}" class="btn btn-info duzenleHay">Düzenle</button> 
                          <a   idd="{{$hayvanlar[$i]->HayID}}"  class="btn btn-info hayvanSil">Sil </a> 
                          </div>
                        </div>
                      
                      </td>
                      
                      
                      <td>{{$hayvanlar[$i]->kupeNo}}</td>
                      <td>{{$hayvanlar[$i]->adi}}</td>
                      <td>{{$hayvanlar[$i]->irk}}</td>
                      <td>{{$hayvanlar[$i]->cinsiyet}}</td>
                      <td>{{$hayvanlar[$i]->dagumTarih}}</td>
                      <td>
                      @if ($hayvanlar[$i]->gebelik_id != null  )
                      <?php
                       ?>
                      <div class="row text-center">
                        
                          <?php 
                            $tarih2 = date_create($hayvanlar[$i]->muhtemelDogum);
                            $tarih1 = date_create(date('d.m.Y'));
                            if ($tarih2 >= $tarih1) {
                              $diff = date_diff($tarih1,$tarih2); 
                            $gun = $diff->format("%a"); 
                            echo '<div class="col-1 offset-2 text-center" ><span class="badge bg-success">'.$gun.'Gün </span>';

                            $yuzde = ($gun*100) /270;
                            $yuzde=100- $yuzde;
                            echo '
                            </div> 
                            <div class="col-4 offset-2 text-center" >
                              <span class="badge bg-primary">% '.substr($yuzde,0,4).'</span>
                            </div>
                            <div class="col-12" style="padding-top: 10px"> 
                              <div class="progress progress-xs progress-striped active" >
                                <div class="progress-bar progress-bar-danger" style="width:'.$yuzde.'%"></div>
                              </div>
                            </div>
                        </div>'  ;
                            }
                            else { 
                                echo '<a  idd="'.$hayvanlar[$i]->gebeID.'"  class="btn btn-info dogumKont duzenlemeButton hayEkle">Doğum </a> ';

                            }
                           
                            ?>
                      
                      @else
                          Gebe Değil
                      @endif
                   

                    </td>
                     
                    </tr>
                    @endfor


                    



                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>



            <!-- /.Hayvan Ekle -->

              <section class="content">
              <div class="row">
                <div class="col-md-10 offset-1">
                  <div class="card card-outline card-info collapsed-card">
                    <div class="card-header">
                    <div class="callout animate__animated animate__slower callout-warning düzenlemeUyarisiDiv d-none">
                          <h5>DİKKAT!</h5> 
                          <p class="düzenlemeUyarisi"></p>
                    </div>
                      <h3 class="card-title">
                      <p>  Düzenleme Bölümü </p>
                        <small> Lütfen Yukarıdaki Tablodan Bir Blog Seçiniz Veya Ekle Butanuna  </small>
                      </h3>
                      <!-- tools box -->
                      <div class="card-tools">
                        <button id="HayduzenlemeButton" type="button" class="btn btn-tool btn-sm " data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fas fa-plus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                          <i class="fas fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display:none">
                      <div class="mb-3">
                      <form id="inekForm" method="post" action="hayvan">
                          @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Küpe No</label>
                              <input type="text" class="form-control" name="hayKupeNo" >
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Adi</label>
                              <input type="text" class="form-control" name="hayAdi" >
                            </div>
                            <div class="row">
                              <div class="col-sm-11"> 
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Cinsiyet</label>
                                      <select  name="irkHay" class="form-control">
                                          <option value="Beyaz" valuee="1">Beyaz</option>
                                          <option value="Simental" valuee="1">Simental</option>
                                          <option value="Holstein" valuee="1">Holstein</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-sm-1">
                                  <div class="form-group pt6">
                                      <label for="exampleInputPassword1" > </label>
                                      <span class="input-group-append">
                                          <button type="button" id="kategoriEkle" class="btn btn-info btn-flat">Düzenle!</button>
                                      </span>
                                  </div> 
                              </div> 
                        </div>
                            <div class="row">
                                  <div class="col-sm-11"> 
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Cinsiyet</label>
                                          <select  name="cinsiyetHay" class="form-control">
                                              <option value="Düve" valuee="1">Düve</option>
                                              <option value="İnek" valuee="1">İnek</option>
                                              <option value="Dana" valuee="1">Dana</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-1">
                                      <div class="form-group pt6">
                                          <label for="exampleInputPassword1" > </label>
                                          <span class="input-group-append">
                                              <button type="button" id="kategoriEkle" class="btn btn-info btn-flat">Düzenle!</button>
                                          </span>
                                      </div> 
                                  </div> 
                            </div>
                            
                              
                            <div class="form-group">
                              <label>Doğum:</label>
                                <div class="input-group dogumHay date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name="yasHay" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                          <!-- /.card-body -->
          
                          </div>
                          <div class="card-footer">
                            <input type="text" class="form-control" hidden name="hayId" >
                            <a   name="hayDuzenleBtn" class="btn btn-primary d-none hayDuzenleBtn">Düzenle</a> 
                            <button   name="hayEkleBtn" class="btn btn-primary hayEkleBtn">Ekle</button>
          
                          </div>
                      </form>
                      </div>
                       
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- ./row -->
            </section>










        </div>
                @yield('icerik')
    
                
        <!-- /.content -->
      </div>
    @endsection

    @section('css')

<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
  
<style>
.pt6{
padding-top: 6px;
}
</style>
    @endsection

    @section('js')

   
<!-- DataTables  & Plugins -->
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
<script> 
$(document).ready(function() { 


  $(".hayDuzenleBtn").on("click", function () {
      var form = $("#inekForm");    
        swal({
      title: "Emin Mi?",
      text: "Kaydı Düzenlemek İstediğine Eminmisin (BU İŞLEM GERİ ALINAMAZ)",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

      $.ajax({
            type: "POST",
            url: "/hayvanDuzenle",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {  
              location.reload();
            }
          }); 
        } else {
      swal("Neyseki Düzenlemekten Vaz Geçtin!");
    }
  });
  }); 













  $(".hayEkleBtn").click(function(e) { 
      e.preventDefault(); // avoid to execute the actual submit of the form. 
      var form = $("#inekForm");
      var url = form.attr('action');

      $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            { 
              location.reload();
            }
          }); 
  });  

 

  $(".hayvanSil").on("click", function () {


    var idd = $(this).attr("idd");
    var token = $('meta[name="csrf-token"]').attr('content');
    var td = $(this).parent().parent().parent().parent();
    var kayit =  td.children("td:eq(1)").html();
    var table = $('#example1').DataTable();

     swal({
  title: "Emin Mi?",
  text: kayit+" Nolu Kaydı Silmek İstediğine Eminmisin (BU İŞLEM GERİ ALINAMAZ)",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      
      $.ajax({
              type: "POST",
              url: "/hayvanSil",
              data: {'veri1': idd,'_token':token},
              success: function(data)
              {     
                swal(kayit+" Nolu Kayıt Silindi!", {
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

 
  $(".dogumKont").on("click", function () {

var button = $(this);
    var idd = $(this).attr("idd");
    var token = $('meta[name="csrf-token"]').attr('content'); 

     swal({
  title: "Emin Mi?",
  text: " Nolu Kaydı Silmek İstediğine Eminmisin (BU İŞLEM GERİ ALINAMAZ)",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      
      $.ajax({
              type: "POST",
              url: "/gebelikBitir",
              data: {'veri1': idd,'_token':token},
              success: function(data)
              {     
                swal(" Nolu doğum düzenlendi!", {
                  icon: "success",
                });              
                button.parent().parent().html("Gebe Değil");

              }
              });
     
    } else {
      swal("Neyseki Vaz Geçtin!");
    }
  }); 
}); 

 
}); 
   </script>
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





        $(".duzenleHay").on("click", function () {
            $( "input[name='hayKupeNo']" ).val($(this).parent().parent().parent().parent().children("td:eq(1)").html()); 
            $( "input[name='hayAdi']" ).val($(this).parent().parent().parent().parent().children("td:eq(2)").html());
            $( "select[name='irkHay']" ).val($(this).parent().parent().parent().parent().children("td:eq(3)").html());  
            $( "select[name='cinsiyetHay']" ).val($(this).parent().parent().parent().parent().children("td:eq(4)").html()); 
            $( "input[name='yasHay']" ).val($(this).parent().parent().parent().parent().children("td:eq(5)").html()); 
            $( "input[name='hayId']" ).val($(this).attr("idd")); 
            $(".hayDuzenleBtn").removeClass("d-none");
            $(".hayEkleBtn").addClass("d-none");
            $(".düzenlemeUyarisiDiv").removeClass("d-none");
            $(".düzenlemeUyarisiDiv").addClass("animate__heartBeat")  
            $(".düzenlemeUyarisiDiv p").html($(this).parent().parent().parent().parent().children("td:eq(1)").html()+" Küpe Numaralı İnek Düzenleniyor.")
            var n = $(document).height();
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

            if ($("#HayduzenlemeButton").children().hasClass("fa-plus"))
            {
                $("#HayduzenlemeButton").trigger( "click" );
            } 
        });


        $("#HayduzenlemeButton").click(function(e) {  
          if ($(".hayDuzenleBtn").hasClass("d-none")&&$(".hayEkleBtn").hasClass("d-none")) { 
          $(".hayDuzenleBtn").addClass("d-none");
           }
        }); 
   

        $(".hayEkle").on("click", function () { 
            $( "input[name='hayKupeNo']" ).val(""); 
            $( "input[name='hayAdi']" ).val("");
            $( "input[name='irkHay']" ).val(""); 
            $( "input[name='yasHay']" ).val("");  
            $(".düzenlemeUyarisiDiv").addClass("d-none"); 
            $(".düzenlemeUyarisiDiv").removeClass("animate__heartBeat")  
            if ($("#HayduzenlemeButton").children().hasClass("fa-plus"))
            {
            $("#HayduzenlemeButton").trigger( "click" );
            }
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

            $(".hayDuzenleBtn").addClass("d-none");
            $(".hayEkleBtn").removeClass("d-none");
        });
        






    $(function () {
      $("#example1").DataTable({
        "columns": [
          { "type": "html" },
          null,
          null,
          null,
          { "type": "date" },
          { "type": "html" },
          null
        ],
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false, 
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      
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
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
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