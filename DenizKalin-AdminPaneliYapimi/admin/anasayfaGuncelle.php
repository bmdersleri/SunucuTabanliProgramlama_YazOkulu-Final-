<?php
$sayfa="Ana Sayfa";
include("inc/ahead.php");
$sorgu=$baglanti->prepare("select * from anasayfa where id=:id");
$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sonuc=$sorgu->fetch();

if($_POST){
    $guncelleSorgu=$baglanti->prepare("update anasayfa set ustBaslik=:ustBaslik, altBaslik=:altBaslik where id=:id");
    $guncelle=$guncelleSorgu->execute([
            'ustBaslik'=>$_POST["ustBaslik"],
            'altBaslik'=>$_POST["altBaslik"],
            'id'=>(int)$_GET["id"]

    ]);
    if($guncelle) {
        echo' <script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>';
        echo"<script>Swal.fire({title:'Başarılı', text:'Güncellendi', icon:'success', confirmButtonText:'Kapat' })</script>";

    }
}
?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ana Sayfa Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Ana Sayfa Güncelle</li>


                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>

                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label> Üst Başlık</label>
                                        <input type="text" name="ustBaslik" required class="form-control" value="<?=$sonuc["ustBaslik"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label> Alt Başlık</label>
                                        <input type="text" name="altBaslik" required class="form-control" value="<?=$sonuc["altBaslik"]?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Güncelle" class="btn btn-primary">
                                    </div>

                                </form>
                        </div>

                    </div>
                </main>
<?php
include("inc/afooter.php");
?>