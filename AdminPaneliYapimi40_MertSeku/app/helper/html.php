<?php

function error($ms){
	return '<div class="message error">' . $ms . '</div>';
}

function warning($ms){
	return '<div class="message warning">' . $ms . '</div>';
}

function info($ms){
	return '<div class="message info">' . $ms . '</div>';
}

function success($ms){
	return '<div class="message success">' . $ms . '</div>';
}

function uyar($ms){
	return '<div class="notif">' . $ms . '</div>';
}

function mesaj($ms){
	return '<div class="message ys">' . $ms . '</div>';
}

function lang($code){
	global $_lang;
	global $_default_lang;
	$result = $_lang[$code] ?? $_default_lang[$code] ?? $code ?? null;
	return $result;
}

function tarih($t,$f=null){
	return date("d-m-Y", time($t));
	if($f==null)
		return $t;
}

function zamanOnce ( $zaman ){
	$zaman =  strtotime($zaman);
	$zaman_farki = time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "az önce";
		} else {
			return $saniye .' saniye önce';
		}
	} else if ( $dakika < 60 ){
		return $dakika .' dakika önce';
	} else if ( $saat < 24 ){
		return $saat.' saat önce';
	} else if ( $gun < 7 ){
		return $gun .' gün önce';
	} else if ( $hafta < 4 ){
		return $hafta.' hafta önce';
	} else if ( $ay < 12 ){
		return $ay .' ay önce';
	} else {
		return $yil.' yıl önce';
	}
}

function dateAgo ( $zaman ){
	$zaman =  strtotime($zaman);
	$zaman_farki = time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "Just";
		} else {
			return $saniye .' second ago';
		}
	} else if ( $dakika < 60 ){
		return $dakika .' minute ago';
	} else if ( $saat < 24 ){
		return $saat.' hour ago';
	} else if ( $gun < 7 ){
		return $gun .' day ago';
	} else if ( $hafta < 4 ){
		return $hafta.' week ago';
	} else if ( $ay < 12 ){
		return $ay .' month ago';
	} else {
		return $yil.' year ago';
	}
}


function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}

function parantezEkle($s){
	return preg_replace("[-%parantez-]", "-%parantez-(", $s);
}

function soru_durum($soruid){
	$cevap_sayi= num(query("select yorumid from yorum where yer='soru' and yerid=$soruid"));
	$oy_sayi = num(query("select id from begen where neresi='soru' and neresiid=$soruid"));
	$dogru_sayi = num(query("select * from yorum where dogru=1 and yer='soru' and yerid=$soruid"));
	$class = "";
	if($dogru_sayi>0){
		$class = " success";
		$yazi = "ÇÖZÜLDÜ";
		$numara = 3;
	}else{
		if($cevap_sayi<=0){
			$yazi = "CEVAP BEKLİYOR";
			$numara = 1;
		}else{
			$yazi = "CEVAPLANDI";
			$numara = 2;
		}
	}
	return array('oy_sayi' => $oy_sayi,'cevap_sayi' => $cevap_sayi,'durum_yazi' => $yazi,'durum_class' => $class,'durum_numarasi' => $numara);
}

function soru_listesi($f){
	$icrk = query("select * from soru_icerik where soruid={$f['soruid']} order by id desc limit 1");
	$s = fetch($icrk);
	$html = "";
	$etiket = array();
	$n = query("select * from soru_detay as d where d.detay='etiket' and d.soruid={$s['id']}");
	if(($len = num($n)) > 0){
		$i = 0;
		while($ss = fetch($n)){
			$dot = "";
			if($i++ < $len-1){
				$dot = ",";
			}
			if(trim($ss['veri']) != "")
				$etiket[] = '<a href="' . site_url('etiket/' . $ss['veri']) . '" class="category"> ' . $ss['veri'] . $dot . '</a>';
		}
	}
	$k = query("select * from uye where uyeid='{$f['kim']}'");
	$kim = fetch($k);
	$etiket = implode($etiket, "");
	extract(soru_durum($s['soruid']));
	$s['icerik'] = strip_tags(html_replace($s['icerik'], true));
	$s['icerik'] = strlen($s['icerik'])>=170 ? mb_substr($s['soru'],0,170) . '..' : $s['icerik'];
	$html .= '<div class="question' . $durum_class . '"><div class="i">
	<span class="view"><span>' . $f['gorulme'] . '</span> <span>GÖRÜLME</span></span>
	<span class="reply"><span>' . $cevap_sayi . '</span> <span>CEVAP</span></span>
	<span class="vote"><span>' . $oy_sayi . '</span> <span>OY</span></span>
	</div><div class="s">
	<a href="' . site_url('soru/' . $s['seourl']) . '.html" class="title">' . $s['baslik'] . '</a>
	<span class="time">' . zamanOnce($s['tarih']) . ' <a href="'. site_url('kul/' . $kim['kad']) .'">@'. $kim['kad'] .'</a> sordu  ·</span>' . $etiket . '<a href="' . site_url('soru/' . $s['seourl']) . '.html">
	<p class="content">' . $s['icerik'] . '</p></a>
	<span class="status v' . $durum_numarasi . '">' . $durum_yazi . '</span></div></div>';

	return $html;
}
