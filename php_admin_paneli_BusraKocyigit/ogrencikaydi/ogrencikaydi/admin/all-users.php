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
<h1 class="text-primary"><i class="fas fa-users"></i>  Yöneticiler<small class="text-warning"> Tüm Yönetici Listesi!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli </a></li>
     <li class="breadcrumb-item active" aria-current="page">Toplam Yönetici</li>
  </ol>
</nav>

<table class="table  table-striped table-hover table-bordered" id="data">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Liste No</th>
      <th scope="col">İsim</th>
      <th scope="col">E-posta</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Fotoğraf</th>
      <th scope="col">Durum</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query=mysqli_query($db_con,'SELECT * FROM `users`');
      $i=1;
      while ($result = mysqli_fetch_array($query)) { ?>
      <tr>
        <?php 
        echo '<td>'.$i.'</td>
          <td>'.ucwords($result['name']).'</td>
          <td>'.$result['email'].'</td>
          <td>'.ucwords($result['username']).'</td>
          <td><img src="images/'.$result['photo'].'" height="50px"></td>
          <td>'.$result['status'].'</td>';?>
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