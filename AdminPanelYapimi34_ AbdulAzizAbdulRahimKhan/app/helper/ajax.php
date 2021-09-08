<?php

function arama($term){
	$q = query("Select * from soru,soru_icerik where baslik LIKE '%".$term."%' order by soruid desc");
	$json = array();
	while($f = fetch($q)){
		$durum = soru_durum($f['soruid']);
		$json[] = array(
			'href' => site_url('soru/'.$f['seourl'].'.html'),
			'baslik' => $f['baslik'],
			'goruntulenme_sayi' => $f['gorulme'],
			'oy_sayi' => $durum['oy_sayi'],
			'cevap_sayi' => $durum['cevap_sayi'],
			'numara' => $durum['durum_numarasi']
		);
	}
	echo json_encode($json);
}

function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function urunresimyukle(){
	if(session('login')){
		if (isset($_FILES[ 'dosya' ])){
			$nameParse = explode(".", $_FILES[ 'dosya' ][ 'name' ]);
			if(count($nameParse)==2){
				$uzanti = $nameParse[1];
				if($uzanti == "jpg" || $uzanti == "png"){
					$image = new Upload( $_FILES[ 'dosya' ]);
					if($image->uploaded){
						$image->image_convert = 'jpg';
						$image->image_resize = true;
						$image->image_ratio_crop = true;
						$image->file_new_name_body =  session('userid');
						$image->file_overwrite = true;
						$image->image_x = 200;
						$image->image_y = 200;
						$yol='/assets/yukleme/uye';
						$image->Process(realpath('.') . $yol);
						$image->file_max_size = '1024';
						$image->allowed = array ('image/*');

						if ($image->processed) {
							$y['success'] = site_url('kul/' . session('username') . '.jpg?v='.rand(0,99999));
							$name = $image->file_dst_name;
						} else {
							 $y['error'] = 'hata';
						}
					}else{
						$y['error'] = 'hata';
					}
				}else{
					$y['error'] = 'hata';
				}
			}else{
				$y['error'] = 'hata';
			}
		}else{
			$y['error'] = 'hata';
		}
	}else{
		$y['error'] = 'hata';
	}
	return json_encode($y);
}

function image_upload($newName, $dir= "/assets/upload", $size = [200, 200], $page){
	if (!isset($_FILES[ 'dosya' ])){
		$y['error'] = 'hata';
	}

	$nameParse = explode(".", $_FILES[ 'dosya' ][ 'name' ]);

	if(count($nameParse) != 2){
		$y['error'] = 'hata';
	}

	$uzanti = $nameParse[1];
	if(!($uzanti == "jpg" || $uzanti == "png")){
		$y['error'] = 'hata';
	}

	if(!isset($y['error'])){
		$image = new Upload( $_FILES['dosya']);
		if($image->uploaded){
			$image->image_convert = 'jpg';
			$image->file_overwrite = true;
			if($page != "editor"){
				$image->image_resize = true;
				$image->image_ratio_crop = true;
				$image->image_x = $size[0];
				$image->image_y = $size[1];
			}
			// $image->file_max_size = strval(1024 * 1000 * 5);
			// $image->allowed = 'image/*';

			$newName = str_replace("[random]", generateRandomString(10), $newName);
			if(strstr($newName, '/')){
				$exp = explode('/', $newName);
				$image->file_new_name_body =  $exp[1];
				$id =  $exp[0];
				$image->Process(realpath('.') . $dir . '/' . $exp[0]);
			}else{
				$id =  $newName;
				$image->file_new_name_body =  $newName;
				$image->Process(realpath('.') . $dir);
			}
			if ($image->processed) {
				$y['success'] = $dir . '/' . $newName . '.jpg';
				$y['url'] = site_url($dir . '/' . $newName . '.jpg');
				$y['rand'] = rand(0, 500);
				$y['id'] = $id;
				$y['page'] = $page;
				$name = $image->file_dst_name;
			} else {
				$y['error'] = 'hata';
			}
		}else{
			$y['error'] = 'hata';
		}
	}else{
		$y['error'] = 'hata';
	}

	return json_encode($y);
}

function soruOy($url, $oy){
	$m = array();
	if(!session('login')){ $m["error"] = "giris";}
	$userid = session('userid');
	$s = query("select * from soru as so, soru_icerik as si where so.soruid=si.soruid and si.seourl='$url'");
	if(num($s)<=0){
		$m["error"] = "Soruya ulaşamıyoruz lütfen sonra tekrar deneyin.";
	}
	if(!($oy==1 || $oy==-1)){
		$m["error"] = "Oyla oynanmış !";
	}
	if(!isset($m["error"])){
		$f = fetch($s);
		$g = query("select * from begen where neresiid={$f['soruid']} and kim=$userid and neresi='soru'");
		if(num($g)<=0){
			$g = query("insert into begen set tur=$oy, neresiid={$f['soruid']}, kim=$userid, neresi='soru'");
			if($g){
				$m['success'] = "success";
			}else{
				$m['error'] = "vt";
			}
		}else{
			$begeni = fetch($g);
			if($begeni['tur']==$oy){
				$g = query("delete from begen where neresi='soru' and neresiid=".$begeni['neresiid']);
				$m['success'] = "kaldir";
			}else{
				$g = query("update begen set tur=$oy where neresi='soru' and neresiid=".$begeni['neresiid']);
				$m['success'] = "degistir";
			}
		}
	}
	return json_encode($m);
}

function cevapDogru($id, $url){
	$m = array();
	if(!session('login')){ $m["error"] = "giris";}

	$s = query("select * from soru as so, soru_icerik as si where so.soruid=si.soruid and si.seourl='$url'");
	if(num($s)<=0){
		$m["error"] = "Soru yok";
	}
	if(!isset($m["error"])){
		$f = fetch($s);
		if($f['kim'] != session('userid')){
			$m["error"] = "Soru size ait değil bu işlemi gerçekleştiremezsiniz.";
		}

		$s = query("select * from yorum where yer='soru' and yorumid=$id");
		if(num($s) <= 0){
			$m["error"] = "Cevap yok select * from yorum where yer='cevap' and yorumid=$id";
		}

		$q = query("select * from yorum where yerid='{$f['soruid']}' and dogru=1");
		if(num($q) > 0){
			$m["error"] = "Daha önce doğru cevap belirlenmiş";
		}
	}
	if(!isset($m["error"])){
			$g = query("update yorum SET dogru=1 where yorumid={$id}");
			if($g){
				$m['success'] = "success";
			}else{
				$m['error'] = "vt";
			}
	}
	return json_encode($m);
}

function cevapOy($id, $oy){
	$m = array();
	if(!session('login')){ $m["error"] = "giris";}
	$userid = session('userid');
	$s = query("select * from yorum where yorumid='$id'");
	if(num($s)<=0){
		$m["error"] = "Cevapa ulaşamıyoruz lütfen sonra tekrar deneyin.";
	}
	if(!($oy==1 || $oy==-1)){
		$m["error"] = "Oyla oynanmış !";
	}
	if(!isset($m["error"])){
		$f = fetch($s);
		$g = query("select * from begen where neresiid={$f['yorumid']} and kim=$userid and neresi='yorum'");
		if(num($g)<=0){
			$g = query("insert into begen set tur=$oy, neresiid={$f['yorumid']}, kim=$userid, neresi='yorum'");
			if($g){
				$m['success'] = "success";
			}else{
				$m['error'] = "vt";
			}
		}else{
			$begeni = fetch($g);
			if($begeni['tur']==$oy){
				$g = query("delete from begen where neresi='yorum' and kim=$userid and neresiid=".$begeni['neresiid']);
				$m['success'] = "kaldir";
			}else{
				$g = query("update begen set tur=$oy where neresi='yorum' and kim=$userid and neresiid=".$begeni['neresiid']);
				$m['success'] = "degistir";
			}
		}
	}
	return json_encode($m);
}

function search($term){
	$q = query("Select * from urun where baslik LIKE '%".$term."%' order by bakma desc limit 10");
	$json = array();
	while($f = fetch($q)){
		$json[] = array(
			'link' => $f['seourl'],
			'resim' => $f['urunid'],
			'baslik' => $f['baslik'],
			'fiyat' => ($f['fiyat'] > 0 ? $f['fiyat'] : "Online Satış Yok"),
			'model' => $f['model']
		);
	}
	echo json_encode($json);
}

function yorum($yorum, $url){
	$yorumu = $yorum;
	$yorum = html_replace($yorum);
	$json = array();
	$userid = session('userid');
	if(!$userid){
		$json['error'] = "Cevap yazabilmek için giriş yapmalısınız";
	}
	if(trim(strip_tags($yorumu))==""){
		$json['error'] = "Lütfen bir cevap yazın";
	}
	if(strlen(trim(strip_tags($yorumu)))<=10){
		$json['error'] = "Cevap yazabilmeniz için en az 10 karakter uzunluğunda olmalı";
	}
	$s = query("select * from soru as so, soru_icerik as si where so.soruid=si.soruid and si.seourl='{$url}'");
	if(num($s)<=0){
		$json['error'] = "İlgili soru bulunamadı!";
	}

	if(!isset($json['error'])){
		$f = fetch($s);
		$s = query("select * from yorum where uyeid=$userid and yorum='{$yorum}' and yerid={$f['soruid']} and yer='soru'");
		if(num($s)>0){
			$json['error'] = "Cevabınız az önce eklendi!";
		}else{
			$user = fetch(query("select * from uye where uyeid=$userid"));
			$q = query("insert into yorum (uyeid,yorum,yerid,yer)values({$userid},'{$yorum}',{$f['soruid']},'soru')");
			if($q){
				$json['success'] = '<div class="answer"><div class="ans-main ti"><div class="vote"><div class="up"><i class="fa fa-angle-double-up"></i></div><div class="down"><i class="fa fa-angle-double-down"></i></div><div class="to">0</div></div>'. html_replace($yorum, true) .'<div class="user"><span class="img"><img src="' . asset_url('yukleme/uye/'. $userid .'.jpg') . '" alt="4412142" height="50px"></span><a href="http://localhost/yorumsatiri/kul/4"><span class="name">@'. $user['kad'] .'</span></a></div></div></div>';
			}else{
				$json['success'] = "Cevap eklenemiyor!";
			}
		}
	}
	echo json_encode($json);
}

function altYorum($yorum, $id){
	$yorumu = $yorum;
	$yorum = html_replace($yorum);
	$json = array();
	$userid = session('userid');
	$username = session('username');
	if(!$userid){
		$json['error'] = "Yorum yazabilmek için giriş yapmalısınız";
	}
	if(trim(strip_tags($yorumu))==""){
		$json['error'] = "Lütfen bir cevap yazın";
	}
	if(strlen(trim(strip_tags($yorumu)))<=10){
		$json['error'] = "Yorum yazabilmeniz için en az 10 karakter uzunluğunda olmalı";
	}
	$s = query("select * from yorum where yorumid={$id}");
	if(num($s)<=0){
		$json['error'] = "İlgili cevap bulunamadı!";
	}

	if(!isset($json['error'])){
		$f = fetch($s);
		$s = query("select * from yorum where uyeid=$userid and yorum='{$yorum}' and yerid={$id} and yer='yorum'");
		if(num($s)>0){
			$json['error'] = "Yorumunuz az önce eklendi!";
		}else{
			$q = query("insert into yorum (uyeid,yorum,yerid,yer)values({$userid},'{$yorum}',{$id},'yorum')");
			if($q){
				$json['success'] = '<div class="comment"><div class="user"><span class="img"><img src="'.site_url('kul/'.$username.'.jpg').'" alt="4" height="50px"></span><a href="'.site_url('kul/'.$username).'"><span class="name">@'.$username.'</span></a>  🌀<span class="time"> şimdi</span></div><p>'.$yorum.'</p></div>';
			}else{
				$json['success'] = "Yorum eklenemiyor!";
			}
		}
	}
	echo json_encode($json);
}

function yenisoru($konu,$aciklama,$etiket, $icerik){
	global $baglan, $userid;

	$aciklama = html_replace($aciklama);
	$json = array();
	$json['sub'] = "";
	if(!session('login')){
		$json['error'] = "Giriş yapmalısınız !";
		$json['sub'] = " Merak etmeyin sorunuzu kaydettik giriş yaptıktan sonra gönder demeniz yeterli";
	}else{
		if(!$icerik){
			$var = query("select * from soru as so, soru_icerik as si where si.baslik='$konu' and si.icerik='$aciklama' and so.soruid=si.id and so.kim=$userid");
			if(num($var) > 0){
				$json['error'] = "Daha önce bu soruyu sormuş gibi duruyorsun ?";
			}
		}
	}
	if(!($konu && $aciklama && $etiket)){
		$json['error'] = "Lütfen tüm alanları doldurun !";
	}
	if($konu == "" || $aciklama == "" || $etiket == ""){
		$json['error'] = "Lütfen tüm alanları doldurun !";
	}
	$seo = permalink($konu);
	$ham = $seo;
	if(strlen($seo)<10){
		$json['error'] = "Bu kadar kısa başlık oluşturamassınız !";
	}
	$i=1;
	$c=0;
	while(true){
		$q = query("select * from soru_icerik where seourl='$seo'");
		$c = 0;
		if($icerik){
			$c++;
		}
		if(num($q)<=$c){
			break;
		}
		$seo = $ham . '-' . $i++;
	}

	if(!isset($json['error'])){
		try {
			$baglan->begin_transaction();
			$soruid = $icerikid = 0;
			if($icerik){
				$sb = query("select * from soru as s, soru_icerik as si where s.icerik=0 and s.soruid=si.soruid and si.seourl='" . $icerik."'");
				if(num($sb)>0){
					$fe = fetch($sb);
					$soruid = $fe['soruid'];

				}
			} else {
				query("insert into soru set icerik=0, kim=$userid");
				$soruid = $baglan->insert_id;
			}
			if($soruid > 0){
				query("insert into soru_icerik set baslik='$konu', icerik='$aciklama', seourl='$seo',soruid=$soruid");
				$icerikid = $baglan->insert_id;
			}
			if($icerikid > 0){
				query("update from soru set icerik=$icerikid where soruid=$soruid");
				if(strstr($etiket, ",")){
					$etiket = explode(",", $etiket);
					$etiket = array_map(function($e){ return permalink($e);}, $etiket);
				}else{
					$etiket = array(permalink($etiket));
				}
				foreach($etiket as $value) {
					query("insert into soru_detay set soruid=$icerikid, detay='etiket', veri='$value'");
				}
				if($baglan->commit()){
					$json['success'] = site_url('soru/' . $seo . '.html');
				}else{
					$json['error'] = "Beklenmedik bir hatayla karşılaştık";
				}
			}else{
				$json['error'] = "Beklenmedik bir hatayla karşılaştık";
			}
		} catch (Exception $e) {
			$baglan->rollback();
			$json['error'] = "Beklenmedik bir hatayla karşılaştık";
		}
	}
	echo json_encode($json);
}

function yeniyazi($konu, $aciklama, $etiket, $kategori, $icerik){
	global $baglan, $userid;

	$aciklama = html_replace($aciklama);
	$json = array();
	$json['sub'] = "";
	if(!session('login')){
		$json['error'] = "Giriş yapmalısınız !";
		$json['sub'] = " Merak etmeyin sorunuzu kaydettik giriş yaptıktan sonra gönder demeniz yeterli";
	}else{
		// if(!$icerik){
		// 	$var = query("select * from soru as so, soru_icerik as si where si.baslik='$konu' and si.icerik='$aciklama' and so.soruid=si.id and so.kim=$userid");
		// 	if(num($var) > 0){
		// 		$json['error'] = "Daha önce bu soruyu sormuş gibi duruyorsun ?";
		// 	}
		// }
	}
	if(!($konu && $aciklama && $etiket)){
		$json['error'] = "Lütfen tüm alanları doldurun !";
	}
	if($konu == "" || $aciklama == "" || $etiket == ""){
		$json['error'] = "Lütfen tüm alanları doldurun !";
	}
	$seo = permalink($konu);
	$ham = $seo;
	if(strlen($seo)<10){
		$json['error'] = "Bu kadar kısa başlık oluşturamassınız !";
	}
	$i=1;
	$c=0;
	while(true){
		$q = query("select * from teknik_yazi_icerik where seourl='$seo'");
		$c = 0;
		if($icerik){
			$c++;
		}
		if(num($q)<=$c){
			break;
		}
		$seo = $ham . '-' . $i++;
	}

	if(!isset($json['error'])){
		try {
			$baglan->begin_transaction();
			$yaziid = $icerikid = 0;
			if($icerik){
				$sb = query("select * from soru as s, soru_icerik as si where s.icerik=0 and s.soruid=si.soruid and si.seourl='" . $icerik."'");
				if(num($sb)>0){
					$fe = fetch($sb);
					$yaziid = $fe['soruid'];

				}
			} else {
				query("insert into teknik_yazi set kim=$userid");
				$yaziid = $baglan->insert_id;
			}
			if($yaziid > 0){
				query("insert into teknik_yazi_icerik set baslik='$konu', icerik='$aciklama', seourl='$seo',yaziid=$yaziid");
				$icerikid = $baglan->insert_id;
			}
			if($icerikid > 0){
				query("update from teknik_yazi set icerik=$icerikid where soruid=$yaziid");
				if(strstr($etiket, ",")){
					$etiket = explode(",", $etiket);
					$etiket = array_map(function($e){ return permalink($e);}, $etiket);
				}else{
					$etiket = array(permalink($etiket));
				}
				foreach($etiket as $value) {
					query("insert into teknik_yazi_detay set yaziid=$icerikid, detay='etiket', veri='$value'");
				}
				if($kategori) {
					query("insert into teknik_yazi_detay set yaziid=$icerikid, detay='kategori', veri='$kategori'");
				}
				if($baglan->commit()){
					$json['success'] = site_url('soru/' . $seo . '.html');
				}else{
					$json['error'] = "Beklenmedik bir hatayla karşılaştık";
				}
			}else{
				$json['error'] = "Beklenmedik bir hatayla karşılaştık";
			}
		} catch (Exception $e) {
			$baglan->rollback();
			$json['error'] = "Beklenmedik bir hatayla karşılaştık";
		}
	}
	echo json_encode($json);
}
