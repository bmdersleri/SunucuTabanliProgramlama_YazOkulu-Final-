<?php
function filterUrl($url){
	return htmlspecialchars(trim(strip_tags($url)));
}


function html_replace($par, $c = false)
{
	$amp = array("&");
	$val = array("&amp;");

	$pointer = array("'", "\"","<",">","/","\\");
	$value = array("&#39;", "&quot;","&lt;","&gt;",	"&#47;", "&#92;");
	if(!$c){
		$par = str_replace($amp, $val, $par);
		return str_replace($pointer, $value, $par);
	}else{
		$par = str_replace($value, $pointer, $par);
		return str_replace($val, $amp, $par);
	}
}

function post($name, $filter=false){
	global $baglan;

	if(isset($_POST[$name])){
		if(is_array($_POST[$name])){
			$result = array_map(function($item){
				global $filter;
				global $baglan;

				if(!$filter){
					$result = filterUrl($item);
				}else{
					$result = $item;
				}
				$result = mysqli_real_escape_string($baglan, $result);
				return $result;
			}, $_POST[$name]);

			return $result;
		}else{
			if(!$filter){
				$result = filterUrl($_POST[$name]);
			}else{
				$result =  htmlspecialchars($_POST[$name]);
			}

			$result = mysqli_real_escape_string($baglan, $result);
		}

		return $result;
	}
	return false;
}



function post_unsafe($name, $filter=false){
	global $baglan;

	if(isset($_POST[$name])){
		if(is_array($_POST[$name])){
			$result = array_map(function($item){
				global $filter;
				global $baglan;

				if(!$filter){
					$result = filterUrl($item);
				}else{
					$result = $item;
				}
			}, $_POST[$name]);

			return $result;
		}else{
			if(!$filter){
				$result = filterUrl($_POST[$name]);
			}else{
				$result =  htmlspecialchars($_POST[$name]);
			}
		}

		return $result;
	}
	return false;
}

function get($name){
	if(isset($_GET[$name])){
		if(is_array($_GET[$name])){
			return array_map(function($item){
				return filterUrl($item);
			}, $_GET[$name]);
		}
		return filterUrl($_GET[$name]);
	}
	return false;
}

function cookie($name){
	if(isset($_COOKIE[$name])){
		if(is_array($_COOKIE[$name])){
			return array_map(function($item){
				return filterUrl($item);
			}, $_COOKIE[$name]);
		}
		return filterUrl($_COOKIE[$name]);
	}
	return false;
}

function url($index){
	global $_url;
	if(isset($_url[$index]))
		return $_url[$index];
	return false;
}

function site_url($url = NULL){
	return url . '/' . $url;
}

function admin_url($url = NULL){
	return site_url('admin/'.$url);
}

function asset_url($url = NULL){
	return url . '/assets/' . $url;
}

function admin_asset_url($url = NULL){
	return url . '/assets/admin/' . $url;
}

function permalink($str, $options = array())
{
	$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
	$defaults = array(
	'delimiter' => '-',
	'limit' => null,
	'lowercase' => true,
	'replacements' => array(),
	'transliterate' => true
	);
	$options = array_merge($defaults, $options);
	$char_map = array(
		// Latin
		'??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'AE', '??' => 'C',
		'??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I',
		'??' => 'D', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
		'??' => 'O', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Y', '??' => 'TH',
		'??' => 'ss',
		'??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c',
		'??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
		'??' => 'd', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
		'??' => 'o', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'y', '??' => 'th',
		'??' => 'y',
		// Latin symbols
		'??' => '(c)',
		// Greek
		'??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => '8',
		'??' => 'I', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',
		'??' => 'R', '??' => 'S', '??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W',
		'??' => 'A', '??' => 'E', '??' => 'I', '??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I',
		'??' => 'Y',
		'??' => 'a', '??' => 'b', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8',
		'??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => '3', '??' => 'o', '??' => 'p',
		'??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f', '??' => 'x', '??' => 'ps', '??' => 'w',
		'??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h', '??' => 'w', '??' => 's',
		'??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
		// Turkish
		'??' => 'S', '??' => 'I', '??' => 'C', '??' => 'U', '??' => 'O', '??' => 'G',
		'??' => 's', '??' => 'i', '??' => 'c', '??' => 'u', '??' => 'o', '??' => 'g',
		// Russian
		'??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Yo', '??' => 'Zh',
		'??' => 'Z', '??' => 'I', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O',
		'??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C',
		'??' => 'Ch', '??' => 'Sh', '??' => 'Sh', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'Yu',
		'??' => 'Ya',
		'??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh',
		'??' => 'z', '??' => 'i', '??' => 'j', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o',
		'??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c',
		'??' => 'ch', '??' => 'sh', '??' => 'sh', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu',
		'??' => 'ya',
		// Ukrainian
		'??' => 'Ye', '??' => 'I', '??' => 'Yi', '??' => 'G',
		'??' => 'ye', '??' => 'i', '??' => 'yi', '??' => 'g',
		// Czech
		'??' => 'C', '??' => 'D', '??' => 'E', '??' => 'N', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U',
		'??' => 'Z',
		'??' => 'c', '??' => 'd', '??' => 'e', '??' => 'n', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u',
		'??' => 'z',
		// Polish
		'??' => 'A', '??' => 'C', '??' => 'e', '??' => 'L', '??' => 'N', '??' => 'o', '??' => 'S', '??' => 'Z',
		'??' => 'Z',
		'??' => 'a', '??' => 'c', '??' => 'e', '??' => 'l', '??' => 'n', '??' => 'o', '??' => 's', '??' => 'z',
		'??' => 'z',
		// Latvian
		'??' => 'A', '??' => 'C', '??' => 'E', '??' => 'G', '??' => 'i', '??' => 'k', '??' => 'L', '??' => 'N',
		'??' => 'S', '??' => 'u', '??' => 'Z',
		'??' => 'a', '??' => 'c', '??' => 'e', '??' => 'g', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'n',
		'??' => 's', '??' => 'u', '??' => 'z'
	);
	$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
	if ($options['transliterate']) {
		$str = str_replace(array_keys($char_map), $char_map, $str);
	}
	$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
	$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
	$str = trim($str, $options['delimiter']);
	return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}
