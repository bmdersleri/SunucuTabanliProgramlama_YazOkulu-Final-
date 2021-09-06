<?php
$sayfa = "Kullanıcılar";
include('inc/ahead.php');
if ($_SESSION["yetki"] != "1") {
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo "<script> Swal.fire({title:'Hata!',text:'Yetkisiz kullanıcı',icon:'error',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
    exit;
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active"><?= $sayfa ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="kullaniciEkle.php" class="btn btn-primary">Kullanıcı Ekle</a>
            </div>
            <div class="card-body">
                <div id="dataTable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Kullanıcı Adı</th>
                                <th>Yetki</th>
                                <th>Email</th>
                                <th>Aktif</th>
                                <th>Parola Güncelle</th>
                                <th>Güncelle</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sorgu = $baglanti->prepare("SELECT * FROM kullanici");
                            $sorgu->execute();
                            while ($sonuc = $sorgu->fetch()) {
                            ?>
                                <tr>
                                    <td><?= $sonuc["kadi"] ?>
                                    <td><?= $sonuc["yetki"]==1?'Admin':'Normal Kullanıcı' ?></td>
                                    <td><?= $sonuc["email"] ?></td>
                                    <td class="text-center">
                                    <link href="css/switch.css" rel="stylesheet"/>
                                        <label class="switch">
                                            <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                                            <input type="checkbox" id='<?= $sonuc['id'] ?>' class="aktifPasif" <?= $sonuc['aktif'] == 1 ? 'checked' : '' ?> />
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                            <a href="kullaniciParolaGuncelle.php?id=<?= $sonuc["id"] ?>">
                                                <span class="fa fa-key fa-2x"></span>
                                            </a>
                                        
                                    </td>
                                    <td class="text-center">
                                            <a href="kullaniciGuncelle.php?id=<?= $sonuc["id"] ?>">
                                                <span class="fa fa-edit fa-2x"></span>
                                            </a>
                                        
                                    </td>
                                    <td class="text-center">
                                        
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#silModal<?= $sonuc["id"] ?>"><span class="fa fa-trash fa-2x text-danger"></span></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="silModal<?= $sonuc["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                            <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=kullanici" class="btn btn-danger">Sil</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
<?php

include('inc/afooter.php');
?>
<script>
    $(document).ready(function() {
        $('.aktifPasif').click(function(event) {
            var id = $(this).attr("id"); //id değerini alıyoruz

            var durum = ($(this).is(':checked')) ? '1' : '0';
            //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

            $.ajax({
                type: 'POST',
                url: 'inc/aktifpasif.php', //işlem yaptığımız sayfayı belirtiyoruz
                data: {
                    id: id,
                    tablo: 'kullanici',
                    durum: durum
                }, //datamızı yolluyoruz
                success: function(result) {
                    $('#sonuc').text(result);
                    //gelen sonucu h2 tagında gösteriyoruz
                },
                error: function() {
                    alert('Hata');
                }
            });
        });
    });
</script>