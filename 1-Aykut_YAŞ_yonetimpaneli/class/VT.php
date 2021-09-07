<?php
class VT{

    var $sunucu="localhost";
    var $user="root";
    var $password="root6228";
    var $dbname="yonetimpaneli";
    var $baglanti;

    function __construct()
    {
        try{
        $this->baglanti=new PDO("mysql:host=".$this->sunucu.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);
        }catch(PDOException $error){

            echo $error->getMessage();
            exit();
        }
    }

    public function VeriGetir($tablo,$wherealanlar="",$wherearraydeger="",$ordeby="ORDER BY ID ASC",$limit="")
    {
        $this->baglanti->query("SET CHARACTER SET ut8");
        $sql="SELECT * FROM ".$tablo;
        if(!empty($wherealanlar) && !empty($wherearraydeger))
        {
            $sql.=" ".$wherealanlar;
            if(!empty($ordeby)){$sql.=" ".$ordeby;}
            if(!empty($limit)){$sql.=" LIMIT ".$limit;}
            $calistir=$this->baglanti->prepare($sql);
            $sonuc=$calistir->execute($wherearraydeger);
            $veri=$calistir->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            if(!empty($ordeby)){$sql.=" ".$ordeby;}
            if(!empty($limit)){$sql.=" LIMIT ".$limit;}
            $veri=$this->baglanti->query($sql,PDO::FETCH_ASSOC);
        }

        if($veri!=false && !empty($veri))
        {
            $datalar=array();
            foreach($veri as $bilgiler)
            {
                $datalar[]=$bilgiler;
            }
            return $datalar;
        }
        else
        {
            return false;
        }
    }


    public function SorguCalistir($tablo,$alanlar="",$degerlerarray="",$limit="")
    {
        $this->baglanti->query("SET CHARACTER SET ut8");
        if(!empty($alanlar) && !empty($degerlerarray))
        {
            $sql=$tablo." ".$alanlar;
            if(!empty($limit)){$sql.=" LIMIT ".$limit;}
            $calistir=$this->baglanti->prepare($sql);
            $sonuc=$calistir->execute($degerlerarray);
        }
        else
        {
            $sql=$tablo;
            if(!empty($limit)){$sql.=" LIMIT ".$limit;}
            $sonuc=$this->baglanti->exec($sql);
        }

        if($sonuc!=false)
        {
            return true;
        }
        else
        {
            return false;
        }
        $this->baglanti->query("SET CHARACTER SET ut8");
    }

    public function seflink($val)
    {
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#','?','*','!','.','(',')');
		$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp','','','','','','');
		$string = strtolower(str_replace($find, $replace, $val));
		$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
		$string = trim(preg_replace('/\s+/', ' ', $string));
		$string = str_replace(' ', '-', $string);
		return $string;
    }

    public function ModulEkle()
    {
        if(!empty($_POST["baslik"]))
        {
            $baslik=$_POST["baslik"];
            if(!empty($_POST["durum"])){$durum=1;} else {$durum=2;}
            $tablo=str_replace("-","",$this->seflik($baslik));

            $modulekle=$this->SorguCalistir("INSERT INTO moduller","SET baslik=?, tablo=?, durum=?, tarih=?",array($baslik,$tablo,$durum,date("Y-m-d")));
            if($modulekle!=false)
            {
                return true;
            }
            else
            {
                return false;
            }

        }
        else
        {
            return false;
        }
    }

}

?>