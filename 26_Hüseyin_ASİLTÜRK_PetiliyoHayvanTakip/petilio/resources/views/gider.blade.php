@extends('app')

    @section('icerik') 
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> Gider <small></small></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li> 
                  <li class="breadcrumb-item"><a href="#">Gider</a></li> 
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
          
                    <div class="card collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title">Gider Ekleme</h3>
          
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <form id="giderForm">
                          
                            <div class="row" style="padding:10px">
                              <div class="col-12"> 
                                <div class="form-group">
                                  <label>Tür</label>
                                  <input type="text" name="tur" class="form-control" placeholder="Enter ...">
                                </div>
                            <div class="form-group">
                              <label>Açıklama</label>
                              <input type="text" name="ayrinti" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                              <label>Tutar</label>
                              <input type="text" name="tutar" class="form-control"id="sutBirinFiyat" > 
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
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
 

                                  <div class="float-right"> 
                                    <a id="giderEkle" class="btn btn-info"><i class="fas fa-share"></i> Ekle </a>  
                                  </div>

                              </div>
                            </div> 
                          </form> 
                      </div>

                      
                      <!-- /.card-body -->
                    </div>
                  
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-8">
                    
                    <div class="card card-primary card-outline">
                       
                      <div class="card-header">
                        <h3 class="card-title">Gider Listesi</h3>  
                        
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0"> 
                        <div class="card">
                         
                              <div class="card-body">
                               
                          <div class="row">
                       
                          <div id="giderDiv" class="col-12 animate__animated animate__flash"> 
                           
                                <table id="giderLis" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th></th>
                                    <th>Tür</th> 
                                    <th>Ayrıntı</th>   
                                    <th>Tarih</th>  
                                    <th>Tutar</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @for ($i = 0; $i < count($giderList); $i++)
                                        <?php 
                                        
                                  echo'<tr idd="'.$i.'">
                                        <td>
                                          <button type="button" idd="1" class="btn btn-default btn-sm sutSil">
                                            <i class="far fa-trash-alt"></i>
                                          </button>
                                          <button type="button" idd="1" class="btn btn-default btn-sm sutDuzenle">
                                            <i class="far fa-edit"></i>
                                          </button>  
                                        </td>
                                        <td>'.$giderList[$i]->tur.'</td> 
                                        <td>'.$giderList[$i]->ayrinti.'</td> 
                                        <td>'.$giderList[$i]->tarih.'</td>  
                                        <td>'.$giderList[$i]->tutar.'</td>  
                                       </tr>';
                                        
                                        ?>
                                    @endfor
                                 
                                  
                                  </tfoot>
                                </table>
                              </div>
                              <!-- /.card-body2 --> 
 
                        </div>



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



      $("#giderEkle").on("click", function () {
       
        swal({
        title: "Emin Miii?",
        text: "Eklenecek",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
          
          $.ajax({
                  type: "POST",
                  url: "/giderEkle",
                  data: $("#giderForm").serialize(), 
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








      $('#temelStokLis tr').on('dblclick', function (e) { 
         
       $("#stokAyrinti").removeClass("d-none");
       $("#temelStokDiv").addClass("d-none");
       $("#btn_geriDon").removeClass("d-none");
       $("#temelStokDiv").removeClass("animate__flash");
       $("#stokAyrinti").addClass("animate__tada");



       

      });

      $('#btn_geriDon').on('click', function (e) { 
         
         $("#stokAyrinti").addClass("d-none");
         $("#temelStokDiv").removeClass("d-none");
          $("#btn_geriDon").addClass("d-none");
          $("#temelStokDiv").addClass("animate__flash");
          $("#stokAyrinti").removeClass("animate__tada");
  
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
       

      $(function () {
        $("#giderLis").DataTable({
          "paging": true, 
          "searching": true,
          "ordering": true,
          "info": true, 
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#giderLis_wrapper .col-md-6:eq(0)');
        
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