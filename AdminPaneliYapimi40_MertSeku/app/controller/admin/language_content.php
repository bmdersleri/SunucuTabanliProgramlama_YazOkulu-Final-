<?php
	$lang = 1;
	if(get('lang')) {
		$lang = get('lang');
	}
	$sql = "";
	if(post('submit')){
		$submit_array = post('tt');
		foreach ($submit_array as $key => $value) {
			if($value !== ""){
				$count = num(query("select * from language_content where name='{$key}' and lang={$lang}"));
				if($count <= 0){
					query("insert into language_content (content,name,lang)values('{$value}', '{$key}', '{$lang}')");
				}else{
					$q = query("update language_content set content='{$value}' where name='{$key}' and lang={$lang}");
					if(!$q){
						$sql = "update language_content set content='{$value}' where name='{$key}' and lang={$lang}";
					}
				}
			}
		}
		$success = "Başarıyla güncellendi";
	}

	$langName = "";
	$languages = '<ul class="nav nav-pills mb-4 justify-content-end">';
	$langQuery = query("select * from language");
	while ($langFetch = fetch($langQuery)) {
		if ($lang == $langFetch['id']) {
			$langName =  $langFetch['shortcode'];
		}
		$languages .= '<li class="nav-item"><a href="' . admin_url('language_content?lang=' . $langFetch['id']) . '" class="nav-link' .
			($lang == $langFetch['id'] ? ' active' : ' text-muted') .
			'">' . $langFetch['shortcode'] . '</a></li>';
	}
	$languages .= '</ul>';

	$settingsHTML = "";
	$settingsQuery = query("select name,content from language_content where lang=1");
	while($fetchSetting = fetch($settingsQuery)){
		$name = $fetchSetting['name'];
		$queryContent = query("select * from language_content where lang={$lang} and name='{$name}'");
		$row = fetch($queryContent);

		$settingsHTML .=
		'<div class="form-group row">
			<label class="col-lg-3 col-form-label" for="' . $fetchSetting['name'] . '">' . $fetchSetting['name'] . '
				<span class="text-danger">*</span>
			</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="tt[' . $fetchSetting['name'] . ']" value="' . urldecode($row['content']) . '">
			</div>
		</div>';
	}

	require view("admin/language_content");
?>
