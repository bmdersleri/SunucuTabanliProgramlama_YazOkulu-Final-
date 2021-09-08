<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Fotoğraflar";
include('inc/baglan.php');
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

/*
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $ustBaslik = $_POST['ustBaslik'];
    $sira = $_POST['sira'];
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($baslik <> "" && isset($_FILES['foto'])) {


            $dosya_adi = strtolower($_FILES['foto']['name']);
            if (file_exists('../img/' . $dosya_adi)) {
                $hata .= " $dosya_adi diye bir dosya var";
            } else {
                $boyut = $_FILES['foto']['size'];
                if ($boyut > (9024 * 9024)) {
                    $hata .= ' Dosya boyutu 5MB den büyük olamaz.';
                } else {
                    $dosya_tipi = $_FILES['foto']['type'];
                    $dosya_uzanti = explode('.', $dosya_adi);
                    $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                    if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                        //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                        $hata .= ' Hata, dosya türü JPEG veya PNG olmalı.';
                    } else {
                        $foto = $_FILES['foto']['tmp_name'];
                        copy($foto, '../img/' . $dosya_adi);


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'foto' => $dosya_adi,
                            'baslik' => $baslik,
                            'ustBaslik' => $ustBaslik,
                            'sira' => $sira,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO fotograf SET foto=:foto, baslik=:baslik,sira=:sira, ustBaslik=:ustBaslik;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo '<script>swal("Başarılı","Ürün Eklendi","success").then((value)=>{ window.location.href = "fotograf.php"}); </script>';
                        }


                    }
                }
            }
    }
    if($hata!=""){
        echo '<script>swal("Hata","'.$hata.'","error");</script>';
    }
}
*/

if (isset($_POST['kaydet'])) {
if ($_FILES["foto"]["size"]<5024*5024){//Dosya boyutu  aldık ve 1Mb'tan az olmasını söyledik.

            if (($_FILES["foto"]["type"]=="image/jpeg")
            || ($_FILES["foto"]["type"] == "image/png")){  //Dosya tipi aldık ve sadece jpeg olmasını söyledik.

                $aciklama    =     $_POST["ustBaslik"];  //Post ile gelen resimaciklamayı aciklama değişkenine atadık.
                $dosya_adi   =    $_FILES["foto"]["name"];  //Dsoya adını aldık.

                //Resimi kayıt ederken yeni bir isim oluşturalım
                $uret=array("cv","fg","th","lu","er");
                $uzanti=substr($dosya_adi,-4,4);
                $sayi_tut=rand(1,10000);

                $yeni_ad="../img/".$uret[rand(0,4)].$sayi_tut.$uzanti;

                //Dosya yeni adıyla yuklenenresimler klasörüne kaydedilecek

                if (move_uploaded_file($_FILES["foto"]["tmp_name"],$yeni_ad)){
                    echo 'Dosya başarıyla yüklendi.';

                    //Bilgileri veritabanına kayıt ediyoruz..

                    $sorgu = $db->prepare("INSERT INTO fotograf SET foto=:foto,ustBaslik=:ustBaslik");
                    /*$sorgu->execute(array(':foto'=> $yeni_ad,':ustBaslik'=>$aciklama));*/
                    if($sorgu){
                        echo 'Veritabanına kaydedildi.';
                    }else{
                        echo 'Kayıt sırasında bir sorun oluştu!';
                    }
                }else{
                    echo 'Dosya Yüklenemedi!';
                }
            }else{
                echo 'Dosya yalnızca jpeg formatında olabilir!';
            }
        }else{
            echo 'Dosya boyutu 1 Mb ı geçmemeli!';
        }

	$kaydet=$db->prepare("INSERT INTO fotograf SET
		baslik=:baslik,
		sira=:sira,
		ustBaslik=:ustBaslik,
		foto=:foto
		");
	$insert=$kaydet->execute(array(
		'baslik' => $_POST['baslik'],
		'sira' => $_POST['sira'],
		'ustBaslik' => $_POST['ustBaslik'],
		'foto' => $yeni_ad
		));

//resim yükleme post işlemi


//resim yükleme post işlemi bitiş


	if ($insert) {

		Header("Location:fotografEkle.php?durum=eklendi");

	} else {

		Header("Location:fotografEkle.php?durum=no");
	}

}

?>
<script src="vendor/CKEditor5/ckeditor.js"></script>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Ürün Ekle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="fotografEkle.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input required type="file" name="foto" class="form-control-file" id="foto">
                    </div>
                    <div class="form-group">
                        <label>Üst Başlık</label>
                        <input required type="text" class="form-control" name="ustBaslik" placeholder="Üst başlık">
                    </div>
                    <div class="form-group">
                        <label>Başlık</label>
                        <input required type="text" class="form-control" name="baslik" placeholder="Başlık">
                    </div>

                    <div class="form-group">
                        <label>Sıra</label>
                        <input required type="text" class="form-control" name="sira" placeholder="Sıra">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="kaydet">Kaydet</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


        <!-- /.container-fluid -->


        <?php
        include('inc/footer.php');
        ?>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable({
                    language: {
                        info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
                        infoEmpty: "Gösterilecek hiç kayıt yok.",
                        loadingRecords: "Kayıtlar yükleniyor.",
                        zeroRecords: "Tablo boş",
                        search: "Arama:",
                        sLengthMenu: "Sayfada _MENU_ kayıt göster",
                        infoFiltered: "(toplam _MAX_ kayıttan filtrelenenler)",
                        buttons: {
                            copyTitle: "Panoya kopyalandı.",
                            copySuccess: "Panoya %d satır kopyalandı",
                            copy: "Kopyala",
                            print: "Yazdır",
                        },

                        paginate: {
                            first: "İlk",
                            previous: "Önceki",
                            next: "Sonraki",
                            last: "Son"
                        },
                    }
                });
            });

        </script>
        <link rel="stylesheet" type="text/css" href="css/switch.css">