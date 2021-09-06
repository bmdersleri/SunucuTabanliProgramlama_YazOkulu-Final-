<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>
<h1 class="text-primary"><i class="fas fa-users"></i>Öğrenciler <small class="text-warning"> Tüm Öğrenci Listesi!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli</a></li>
     <li class="breadcrumb-item active" aria-current="page">Toplam Öğrenci / Admin Paneli</li>
  </ol>
</nav>
<?php if(isset($_GET['delete']) || isset($_GET['edit'])) {?>
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
    <div class="toast-header">
      <strong class="mr-auto">Öğrenci Düzenleme Bildirimi</strong>
      <small><?php echo date('d-M-Y'); ?></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?php 
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='success') {
            echo "<p style='color: green; font-weight: bold;'>Öğrenci Silme İşlemi Başarıyla Gerçekleşti!</p>";
          }  
        }
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='error') {
            echo "<p style='color: red'; font-weight: bold;>Öğrenci Silinemedi!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='success') {
            echo "<p style='color: green; font-weight: bold; '>Öğrenci Başarıyla Güncellendi!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='error') {
            echo "<p style='color: red; font-weight: bold;'>Öğrenci Güncellenemedi!</p>";
          }  
        }
      ?>
    </div>
  </div>
    <?php } ?>
<table class="table  table-striped table-hover table-bordered" id="data">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Liste No</th>
      <th scope="col">İsim</th>
      <th scope="col">Numara</th>
      <th scope="col">Şehir</th>
      <th scope="col">İletişim</th>
      <th scope="col">Fotoğraf</th>
      <th scope="col">İşlem</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query=mysqli_query($db_con,'SELECT * FROM `student_info` ORDER BY `student_info`.`datetime` DESC;');
      $i=1;
      while ($result = mysqli_fetch_array($query)) { ?>
      <tr>
        <?php 
        echo '<td>'.$i.'</td>
          <td>'.ucwords($result['name']).'</td>
          <td>'.$result['roll'].'</td>
          <td>'.ucwords($result['city']).'</td>
          <td>'.$result['pcontact'].'</td>
          <td><img src="images/'.$result['photo'].'" height="50px"></td>
          <td>
            <a class="btn btn-xs btn-warning" href="index.php?page=editstudent&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
              <i class="fa fa-edit"></i></a>

             &nbsp; <a class="btn btn-xs btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="index.php?page=delete&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
             <i class="fas fa-trash-alt"></i></a></td>';?>
      </tr>  
     <?php $i++;} ?>
    
  </tbody>
</table>
<script type="text/javascript">
  function confirmationDelete(anchor)
{
   var conf = confirm('Bu kaydı silmek istediğinizden emin misiniz?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>