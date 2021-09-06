<?php
session_start();
$kullaniciadi="root";
$sifre="";
$sunucu="localhost";
$database="ots";

$baglan=new mysqli($sunucu,$kullaniciadi,$sifre,$database) or die("Unable to connect");


if(isset($_POST['login'])) {

    $admin_Kullanici_Adi=$_POST['admin_Kullanici_Adi'];
    $admin_sifre=md5($_POST['admin_sifre']);

        if($admin_Kullanici_Adi && $admin_sifre){
            $sorgula = $baglan->query("select * from admin where admin_Kullanici_Adi = '$admin_Kullanici_Adi' and admin_sifre = '$admin_sifre'");

            $verisay = $sorgula->num_rows;

            if($verisay>0){
                $_SESSION['admin_Kullanici_Adi'] = $admin_Kullanici_Adi;

                header('Location:index.php');
            } else {
                header('Location:login.php?login=no');
            }
        }
    
}
if(isset($_POST['register'])) {

    $admin_Kullanici_Adi=$_POST['admin_Kullanici_Adi'];
    if($_POST['admin_sifre']==$_POST['admin_sifre_kontrol']){
        $admin_sifre=md5($_POST['admin_sifre']);
    }
    $admin_email=$_POST['admin_email'];
    if(isset($_POST['terms'])){
        $license_term =$_POST['terms'];
    }
    

        if($admin_Kullanici_Adi && $admin_sifre && $admin_email ){
            
            $kayit_varmi = $baglan->query("select * from admin where admin_Kullanici_Adi = '$admin_Kullanici_Adi' or admin_email = '$admin_email'");
            $sorgusay = $kayit_varmi->num_rows;
            
            
            if($sorgusay==0 && $license_term == 'agree'){
                $kayit_alm = $baglan->query("insert into  admin (admin_Kullanici_Adi, admin_sifre, admin_email) values ('$admin_Kullanici_Adi','$admin_sifre','$admin_email')");
                header('Location:index.php');
                
                
            } else {
                
                header('Location:register.php?register=denied');
                
            }
            
        }
    
}

if(isset($_POST['kayit_Baslik'])) {

$id=0;
$ayar_güncelle = $baglan->query("update ayarlar  set site_adi='".$_POST['site_adi']."',title='".$_POST['site_adi']."',site_aciklama='".$_POST['site_aciklama']."' where site_id ='$id'");

header('Location:site_basligi_ayarlar.php');

}
if(isset($_POST['kayit_Detay'])) {

    $id=0;
    $ayar_güncelle = $baglan->query("update ayarlar  set site_telefon='".$_POST['site_telefon']."'
    ,site_adres='".$_POST['site_adres']."',site_bg='".$_POST['site_bg']."' where site_id ='$id'");
    
    header('Location:site_basligi_ayarlar.php');
    
    }

    if(isset($_POST['kayit_Menu'])) {

        $id=0;
        $ayar_güncelle = $baglan->query("update menu  set menu_bir='".$_POST['menu_bir']."'
        ,menu_bir_url='".$_POST['menu_bir_url']."',menu_iki='".$_POST['menu_iki']."'
        ,menu_iki_url='".$_POST['menu_iki_url']."',menu_uc='".$_POST['menu_uc']."'
        ,menu_uc_url='".$_POST['menu_uc_url']."' where menu_id ='$id'");
        
        header('Location:topmenu_ayarlar.php');
        
        }
        if(isset($_POST['kayit_Footer'])) {

            $id=0;
            $ayar_güncelle = $baglan->query("update ayarlar  set telif_hakki='".$_POST['telif_hakki']."'
            ,telif_url='".$_POST['telif_url']."',copyright_isim='".$_POST['copyright_isim']."'
             where site_id ='$id'");
            
            header('Location:footer_ayarlar.php');
            
            }

            if(isset($_POST['menu_Kayit_Et'])) {
                $menu_ad = $_POST['menu_ad'];
                $menu_link = $_POST['menu_link'];
                if($menu_ad && $menu_link  ){
            
                    $menu_varmi = $baglan->query("select * from menuler where menu_ad = '$menu_ad' or menu_link = '$menu_link'");
                    $menu_say = $menu_varmi->num_rows;
                    
                    
                    if($menu_say==0){
                        $menu_kaydet = $baglan->query("insert into  menuler (menu_ad, menu_link) values ('$menu_ad','$menu_link')");
                        header('Location:Menu-Ayar.php');
                        
                        
                    } else {
                        
                        header('Location:menu-ekle.php?menu-ekle=denied');
                        
                    }
                    
                }
            }

            if(isset($_POST['menu_Düzenle'])) {
                $menu_ad_düzen = $_POST['menu_ad_düzenle'];
                $menu_link_düzen = $_POST['menu_link_düzenle'];
                $menu_id = $_POST['menu_id'];
                if($menu_ad_düzen && $menu_link_düzen  ){
            
                    $menu_varmi = $baglan->query("select * from menuler where menu_ad = '$menu_ad_düzen'");
                    $menu_say = $menu_varmi->num_rows;
                    
                    
                    if($menu_say==0){
                        
                        $menu_güncelle = $baglan->query("update menuler  set menu_ad='".$_POST['menu_ad_düzenle']."'
                        ,menu_link='".$_POST['menu_link_düzenle']."'
                        where menu_id ='$menu_id'");
                        
                        header('Location:Menu-Ayar.php');
                        
                        
                    } else {
                        
                        header('Location:menu-Duzenle.php?menu-ekle=denied');
                        
                    }
                    
                }
            }

            if($_GET['menukaldir']=="ok"){

                $menukaldir = $baglan->query("delete from  menuler where menu_id='".$_GET['menu_id']."'");
                header('Location:Menu-Ayar.php');
                

            }

            if(isset($_POST['kayit_Mail'])) {
                $smtpuser = $_POST['smtpuser'];
                $smtphost = $_POST['smtphost'];
                $smtpport = $_POST['smtpport'];
                $smptpass = $_POST['smptpass'];
                $smtpid = 0;
                if($smtpuser && $smtphost && $smtpport && $smptpass  ){
            
                    $mail_sor = $baglan->query("select * from kurumsal_email where smtpid = '$smtpid'");
                    $mail_say = $mail_sor->num_rows;
                    
                    
                    if($mail_say>0){
                        
                        $mail_guncelle = $baglan->query("update kurumsal_email  set smtpuser='".$_POST['smtpuser']."'
                        ,smtphost='".$_POST['smtphost']."', smtpport='".$_POST['smtpport']."', smptpass='".$_POST['smptpass']."'
                        where smtpid ='$smtpid'");
                        
                        header('Location:Mail-Ayar.php');
                        
                        
                    } elseif($mail_say == 0) {
                        
                        $mail_kaydet = $baglan->query("insert into  kurumsal_email (smtpuser, smtphost,smtpport,smptpass) values ('$smtpuser','$smtphost','$smtpport','$smptpass')");
                        header('Location:Mail-Ayar.php');
                        
                    }
                    
                }
            }
?>