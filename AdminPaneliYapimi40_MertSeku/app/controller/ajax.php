<?php

	if(get('yukle')){
		// if(get('yukle') == "team"){
		// 	$id = get('id');
		// 	if($id){
		// 		echo image_upload($id, "/assets/upload/teams", [400, 400]);
		// 	}else{
		// 		echo "ID YOK!";
		// 	}
		// }

		$error = array();
		if(get('yukle') == "team"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/upload/teams", [400, 400], "team_edit");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$q = query("update team SET src='$resultDecode->success' where id= $id");
					echo $result;
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "project"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/upload/project", [1920, 1080], "project_photo");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$sort = num(query("select id from project_photo where projectid={$id}"));
					$q = query("insert into project_photo(src, projectid, sort)values('{$resultDecode->success}', {$id}, {$sort})");

					echo $result;
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "typology"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/upload/typology", [1920, 1080], "typology_edit");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$q = query("update typology SET src='$resultDecode->success' where id= $id");
					echo $result;
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "pcategory"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/upload/pcategory", [1920, 1080], "category_edit");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$q = query("update pcategory SET src='$resultDecode->success' where id= $id");

					echo $result;
				}
			}else{
				$error['error'] =  "ID YOK!";
			}
		}
		else if(get('yukle') == "product"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/upload/product", [500, 500], "product_photo");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$sort = num(query("select id from product_photo where productid={$id}"));
					$q = query("insert into product_photo(src, productid, sort)values('{$resultDecode->success}', {$id}, {$sort})");
					echo $result;
				}else{
					$error['error'] = "error";
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "partners"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/img/partner", [709, 146], "partners");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$q = query("update business_partners SET src='$resultDecode->success' where id= $id");
					echo $result;
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "slider"){
			$id = get('id');
			if($id){
				$result = image_upload($id . "/[random]", "/assets/img/slider", [1920, 1080], "slider");
				$resultDecode = json_decode($result);
				if(isset($resultDecode->success)) {
					$q = query("update slider SET src='$resultDecode->success' where id= $id");
					echo $result;
				}
			}else{
				$error['error'] = "ID YOK!";
			}
		}
		else if(get('yukle') == "editor"){
			$result = image_upload("[random]", "/assets/img/editor", [], "editor");
			$resultDecode = json_decode($result);
			if(isset($resultDecode->success)) {
				echo $result;
			}
		}

		if(count($error) > 0){
			echo json_encode($error);
		}

	}else if(post('term')){
		echo arama(post('term'));
	}else if(get('cevapDogru')){
		echo cevapDogru(post('id'),post('url'));
	}else if(get('soruOy')){
		echo soruOy(post('url'), post('oy'));
	}else if(get('cevapOy')){
		echo cevapOy(post('yorum'), post('oy'));
	}else if(get('yorum')){
		echo yorum(post('yorum', true), post('url'));
	}else if(get('yorumAlt')){
		echo altYorum(post('yorum'), post('id'));
	}else if(get('yukle')){
		echo urunresimyukle();
	}else if(get('yeniSoru')){
		echo yenisoru(post('konu'), post('aciklama', true), post('etiket'), get('url'));
	}else if(get('yeniYazi')){
		echo yeniyazi(post('konu'), post('aciklama', true), post('etiket'), post('kategori'), get('url'));
	}else{
		require controller('404');
	}
