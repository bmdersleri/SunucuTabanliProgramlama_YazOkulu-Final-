<?php include 'includes/adminheader.php';
?>
    <div id="wrapper">
<?php ?>
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <div class="col-xs-4">
            <a href="http://localhost/Haber Yönetim/admin/publishnews.php" class="btn btn-primary">Yeni ekle</a>
            </div>
            TÜM GÖNDERİLER
                        </h1>
                         

<?php if($_SESSION['role'] == 'superadmin')  
{ ?>
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Yazar</th>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>resim</th>
                        <th>Etiketler</th>
                        <th>Tarih</th>
                        <th>Gönderiyi görüntüle</th>
                        <th>Düzenleme</th>
                        <th>Sil</th>
                        <th>Yayınla</th>
                    </tr>
                </thead>
                <tbody>

                 <?php

$query = "SELECT * FROM posts ORDER BY id DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $post_id = $row['id'];
    $post_title = $row['title'];
    $post_author = $row['author'];
    $post_date = $row['postdate'];
    $post_image = $row['image'];
    $post_content = $row['content'];
    $post_tags = $row['tag'];
    $post_status = $row['status'];

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_author</td>";
    echo "<td>$post_title</td>";
    echo "<td>$post_status</td>";
    echo "<td><img  width='100' src='../allpostpics/$post_image' alt='Post Image' ></td>";
    echo "<td>$post_tags</td>";
    echo "<td>$post_date</td>";
    echo "<td><a href='post.php?post=$post_id' style='color:green'>Gönderiyi Görüntüle</a></td>";
    echo "<td><a href='editposts.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Bu yayını silmek istediğinizden emin misiniz?')\" href='?del=$post_id'><i class='fa fa-times' style='color: red;'></i>Sil</a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Bu yayını yayınlamak istediğinizden emin misiniz?')\"href='?pub=$post_id'><i class='fa fa-times' style='color: red;'></i>Yayınla</a></td>";

    echo "</tr>";

}
}
else {
    echo "<script>alert('Henüz bir haber yok! Şimdi Göndermeye Başla');
    window.location.href= 'publishnews.php';</script>";
}
?>


                </tbody>
            </table>
</form>
</div>
</div>
</div>

 <?php
    if (isset($_GET['del'])) {
        $post_del = mysqli_real_escape_string($conn, $_GET['del']);
        $del_query = "DELETE FROM posts WHERE id='$post_del'";
        $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('gönderi başarıyla silindi');
            window.location.href='posts.php';</script>";
        }
        else {
         echo "<script>alert('hata oluştu.tekrar deneyin!');</script>";   
        }
        }
        if (isset($_GET['pub'])) {
        $post_pub = mysqli_real_escape_string($conn,$_GET['pub']);
        $pub_query = "UPDATE posts SET status='published' WHERE id='$post_pub'";
        $run_pub_query = mysqli_query($conn, $pub_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('gönderi başarıyla yayınlandı');
            window.location.href='posts.php';</script>";
        }
        else {
         echo "<script>alert('hata oluştu.tekrar deneyin!');</script>";   
        }
        }

?>
<?php 
}
else if($_SESSION['role'] == 'admin') {
    ?>
    <div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Yazar</th>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>resim</th>
                        <th>Etiketler</th>
                        <th>Tarih</th>
                        <th>Gönderiyi görüntüle</th>
                        <th>Düzenleme</th>
                        <th>Sil</th>
                        <th>Yayınla</th>
                    </tr>
                </thead>
                <tbody>

                 <?php
$currentuser = $_SESSION['firstname'];
$query = "SELECT * FROM posts WHERE author = '$currentuser' ORDER BY id DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $post_id = $row['id'];
    $post_title = $row['title'];
    $post_author = $row['author'];
    $post_date = $row['postdate'];
    $post_image = $row['image'];
    $post_content = $row['content'];
    $post_tags = $row['tag'];
    $post_status = $row['status'];

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_author</td>";
    echo "<td>$post_title</td>";
    echo "<td>$post_status</td>";
    echo "<td><img  width='100' src='../allpostpics/$post_image' alt='Post Image' ></td>";
    echo "<td>$post_tags</td>";
    echo "<td>$post_date</td>";
    echo "<td><a href='post.php?post=$post_id' style='color:green'>Gönderiyi Görüntüle</a></td>";
    echo "<td><a href='editposts.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Bu yayını silmek istediğinizden emin misiniz?')\" href='?del=$post_id'><i class='fa fa-times' style='color: red;'></i>Sil</a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Bu yayını yayınlamak istediğinizden emin misiniz?')\"href='?pub=$post_id'><i class='fa fa-times' style='color: red;'></i>Yayınla</a></td>";

    echo "</tr>";

}
}
else {
    echo "<script>alert('Henüz bir haber yayınlamadınız! Şimdi Göndermeye Başla');
    window.location.href= 'publishnews.php';</script>";
}
?>


                </tbody>
            </table>
</form>
</div>
</div>
</div>

 <?php
    if (isset($_GET['del'])) {
        $post_del = mysqli_real_escape_string($conn, $_GET['del']);
        $del_query = "DELETE FROM posts WHERE id='$post_del'";
        $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('gönderi başarıyla silindi');
            window.location.href='posts.php';</script>";
        }
        else {
         echo "<script>alert('hata oluştu.tekrar deneyin!');</script>";   
        }
        }
        if (isset($_GET['pub'])) {
        $post_pub = mysqli_real_escape_string($conn,$_GET['pub']);
        $pub_query = "UPDATE posts SET status='published' WHERE id='$post_pub'";
        $run_pub_query = mysqli_query($conn, $pub_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('gönderi başarıyla yayınlandı');
            window.location.href='posts.php';</script>";
        }
        else {
         echo "<script>alert('hata oluştu.tekrar deneyin!');</script>";   
        }
        }

?>
<?php 
}
else {
    ?>
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">
 <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>Resim</th>
                        <th>Etiketler</th>
                        <th>Tarih</th>
                        <th>Yayını Görüntüle</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $currentuser = $_SESSION['firstname'];

$query = "SELECT * FROM posts WHERE author = '$currentuser' ORDER BY id DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $post_id = $row['id'];
    $post_title = $row['title'];
    $post_author = $row['author'];
    $post_date = $row['postdate'];
    $post_image = $row['image'];
    $post_content = $row['content'];
    $post_tags = $row['tag'];
    $post_status = $row['status'];

    echo "<tr>";
    echo "<td>$post_title</td>";
    echo "<td>$post_status</td>";
    echo "<td><img  width='100' src='../allpostpics/$post_image' alt='Post Image' ></td>";
    echo "<td>$post_tags</td>";
    echo "<td>$post_date</td>";
    echo "<td><a href='post.php?post=$post_id' style='color:green'>Gönderiyi Görüntüle</a></td>";
    echo "<td><a href='editposts.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Bu yayını silmek istediğinizden emin misiniz?')\" href='?del=$post_id'><i class='fa fa-times' style='color: red;'></i>sil</a></td>";

    echo "</tr>";

}
}
else {
    echo "<script>alert('Henüz bir haber yayınlamadınız! Şimdi Göndermeye Başla');
    window.location.href= 'publishnews.php';</script>";
}
?>
 </tbody>
            </table>
</form>
</div>
</div>
</div>
<?php
    if (isset($_GET['del'])) {
        $post_del = mysqli_real_escape_string($conn , $_GET['del']);
        $del_query = "DELETE FROM posts WHERE id='$post_del' AND author='$currentuser'";
        $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('gönderi başarıyla silindi');
            window.location.href='posts.php';</script>";
        }
        else {
         echo "<script>alert('hata oluştu.tekrar deneyin!');</script>";   
        }
        }
        ?>
<?php    
}
?>
        </div>
    </div>
</div>
</div>
</div>
 <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html


