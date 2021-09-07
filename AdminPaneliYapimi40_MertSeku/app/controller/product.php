<?php
$seourl = url(1);
$menu = false;

$h1 = lang('product');

$where = "";
$getCategoryArray = get('category') ?? false;
$getCategory = $getCategoryArray;

if(is_array($getCategory)){
	$getCategory = implode(",", $getCategory);
}

if(get('category')){
	$where .= "and p.pcategoryid IN (" . $getCategory . ")";
}

$queryCategory = query("select * from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang={$langcookie} ORDER BY pc.sort ASC");
if (num($queryCategory) <= 0) {
	$queryCategory = query("select * from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang=1 ORDER BY pc.sort ASC");
}

$categories = "";
while ($fetchQuery = fetch($queryCategory)) {
	$check = '';
	if($getCategoryArray && in_array($fetchQuery['categoryid'], $getCategoryArray)){
		$check = ' checked';
	}

	$categories .= '
	<label for="c'.$fetchQuery['categoryid'].'">
		<input type="checkbox" name="category[]" id="c'.$fetchQuery['categoryid'].'" value="'.$fetchQuery['categoryid'].'"'.$check.'>
		<span></span>
		'.$fetchQuery['name'].'
	</label>
	';
}

$productQuery = query("select * from product as p,product_content as pc, product_photo as ph where p.id=pc.productid and pc.productid=ph.productid and ph.sort=0 and lang={$langcookie} $where");

if (num($productQuery) <= 0) {
	$productQuery = query("select * from product as p,product_content as pc, product_photo as ph where p.id=pc.productid and pc.productid=ph.productid and lang=1 $where");
}
$products = "";
while ($row = fetch($productQuery)) {
	$products .= '<div class="col-4 mb-4 wow fadeInDown product" data-wow-duration="1s">
		<a href="#" class="card">
			<span class="img">
				<img data-src="' . site_url($row['src']) . '" class="w-100 lazy" alt="">
			</span>
			<span class="card-body">
				<span class="name">' . $row['name'] . '</span>
				<small>2 colors</small>
			</span>
		</a>
	</div>';
}

require view('product');
