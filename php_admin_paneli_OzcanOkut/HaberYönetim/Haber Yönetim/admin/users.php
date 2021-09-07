<?php include ('includes/connection.php'); 
include "includes/adminheader.php";
if (isset($_SESSION['role'])) {
$currentrole = $_SESSION['role'];
}
if ( $currentrole == 'user') {
echo "<script> alert('YALNIZCA YÖNETİCİ KULLANICILARI GÖREBİLİR');
window.location.href='./index.php'; </script>";
}
else if ($currentrole == 'superadmin') {
    ?>
 

    <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">

                        
                        <h1 class="page-header">
                        Tüm kullanıcılar
                        </h1>



    <table class="table table-bordered table-hover">
    <thead>
        <tr>
             <th>Id</th>
             <th>Kullanıcı adı</th>
             <th>Ad</th>
             <th>Soyadı</th>
             <th>E-posta</th>
             <th>Rol</th>
             <th>Rol Değiştir</th>
             <th>Sil</th>
        </tr>
    </thead>

    <tbody>
        
        <?php 
            
            $query = "SELECT * FROM users";
            $select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_users) > 0 ) {
            while ($row = mysqli_fetch_array($select_users)) {
                $user_id = $row['id'];
                $username = $row['username'];
                $user_firstname = $row['firstname'];
                $user_lastname = $row['lastname'];
                $user_email = $row['email'];
                $user_role = $row['role'];
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$username</td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
            echo "<td><a href='users.php?change_to_admin=$user_id''>Admin yap</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')\" href='users.php?delete=$user_id'><i class='fa fa-times fa-lg'></i>Sil</a></td>";
                echo "</tr>";
             }
        ?>

    </tbody>
 </table>

<?php 
}

    if (isset($_GET['delete'])) {
        $the_user_id = $_GET['delete'];
        $query0 = "SELECT role FROM users WHERE id = '$the_user_id'";
        $result = mysqli_query($conn , $query0) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_array($result);
            $id1 = $row['role'];
        }
        if ($id1 == 'superadmin') {
            echo "<script>alert('süper yönetici silinemez');</script>";
        }
        else {

        $query = "DELETE FROM users WHERE id = '$the_user_id'";

        $delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0 ) {
            echo "<script>alert('kullanıcı başarıyla silindi');
            window.location.href= 'users.php';</script>";
        }
    }
}

    
    if (isset($_GET['change_to_admin'])) {
        $the_user_id = $_GET['change_to_admin'];

        $query0 = "SELECT role FROM users WHERE id = '$the_user_id'";
        $result = mysqli_query($conn , $query0) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_array($result);
            $id1 = $row['role'];
        }
        if ($id1 == 'admin') {
            echo "<script>alert('KULLANICI ZATEN YÖNETİCİDİR');</script>";
        }
        else if ($id1 == 'superadmin') {
            echo "<script>alert('Süper yöneticinin rolü değiştirilemiyor');</script>";
        }
else {
        $query = "UPDATE users SET role = 'admin' WHERE id = '$the_user_id'";

        $change_to_admin_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0 ) {
            echo "<script>alert('başarıyla yönetici olarak değiştirildi');
            window.location.href= 'users.php'; </script>";
        }
    }
}
    ?>
    </div>
 </div>
 </div>
 </div>
 </div>
 <?php 
}
else {
    ?>
    <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                        Tüm kullanıcılar
                        </h1>



    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            
             <th>Ad</th>
             <th>Soyadı</th>
             <th>E-posta</th>
             <th>Rol</th>
            
        </tr>
    </thead>

    <tbody>
        
        <?php 
            
            $query = "SELECT * FROM users";
            $select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_users) > 0 ) {
            while ($row = mysqli_fetch_array($select_users)) {
                $user_id = $row['id'];
                $username = $row['username'];
                $user_firstname = $row['firstname'];
                $user_lastname = $row['lastname'];
                $user_email = $row['email'];
                $user_role = $row['role'];
                echo "<tr>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
                echo "</tr>";
             }
        ?>

    </tbody>
 </table>

<?php 
}
    ?>
    </div>
 </div>
 </div>
 </div>
 </div>

<?php

}
?>
    <?php include ('includes/adminfooter.php');
    ?>

