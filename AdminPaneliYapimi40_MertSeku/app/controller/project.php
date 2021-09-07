<?php
$seourl = url(1);

$menu = false;

$h1 = lang('project');

$filter_url = array();
$location_url = array();
$typology_url = array();
$year_url = array();

$where = "";
$getLocation = get('location');
if (get('location')) {
	$filter_url['location'] = $getLocation;
	$typology_url['location'] = $getLocation;
	$year_url['location'] = $getLocation;
	$where .= " and location=" . $getLocation;
}
$getTypology = get('typology');
if ($getTypology) {
	$filter_url['typology'] = $getTypology;
	$location_url['typology'] = $getTypology;
	$year_url['typology'] = $getTypology;
	$where .= " and typology=" . $getTypology;
}

$getYear = get('year');
if ($getYear) {
	$filter_url['year'] = $getYear;
	$typology_url['year'] = $getYear;
	$location_url['year'] = $getYear;
	$where .= " and year=" . $getYear;
}

$filter_url = http_build_query($filter_url);
$location_url = http_build_query($location_url);
$typology_url = http_build_query($typology_url);
$year_url = http_build_query($year_url);

$typology = '<li><a href="' . site_url('project?' . $typology_url) . '">' . lang('all') . '</a></li>';
$typlgy = query("select * from typology_content where lang=" . $langcookie);
$activeTypology = null;
$des = "";
while ($typlgyF = fetch($typlgy)) {
	$active = "";
	if ($getTypology == $typlgyF['typologyid']) {
		$activeTypology = $typlgyF['typology'];
		$active = ' class="active"';
	}
	$typology .= '<li' . $active . '><a href="' . site_url('project?' . $typology_url . '&typology=' . $typlgyF['typologyid']) . '">' . $typlgyF['typology'] . '</a></li>';
	//$des .= $typlgyF['typology'];
}

$location = '<li><a href="' . site_url('project?' . $location_url) . '">' . lang('all') . '</a></li>';
$lctn = query("select * from location_content where lang=" . $langcookie);
$activeLocation  = null;
while ($lctnF = fetch($lctn)) {
	$active = "";
	if ($getLocation == $lctnF['locationid']) {
		$activeLocation  = $lctnF['location'];
		$active = ' class="active"';
	}
	$location .= '<li' . $active . '><a href="' . site_url('project?' . $location_url . '&location=' . $lctnF['locationid']) . '">' . $lctnF['location'] . '</a></li>';
}

$years = '<li><a href="' . site_url('project?' . $year_url) . '">' . lang('all') . '</a></li>';
$year = query("select year from project GROUP BY year order by year desc");
$activeYear  = null;
while ($yearF = fetch($year)) {
	$active = "";
	if ($getYear == strval($yearF['year'])) {
		$activeYear  = $yearF['year'];
		$active = ' class="active"';
	}
	$years .= '<li' . $active . '><a href="' . site_url('project?' . $year_url . '&year=' . $yearF['year']) . '">' . $yearF['year'] . '</a></li>';
}

$projectQuery = query("select *, p.id as id from project as p, project_photo as pp where p.id = pp.projectid and pp.sort = 0{$where} order by p.id desc");
$projects = "";
while ($row = fetch($projectQuery)) {
	$id = $row['id'];
	$locationid = $row['location'];
	$contentQuery = query("select * from project_content where projectid={$id} and lang={$langcookie}");
	if (num($contentQuery) <= 0) {
		$contentQuery = query("select * from project_content where projectid={$id} and lang=1");
	}

	$locationQuery = query("select * from location_content where locationid={$locationid} and lang={$langcookie}");
	if (num($locationQuery) <= 0) {
		$locationQuery = query("select * from location_content where locationid={$locationid} and lang=1");
	}

	$contentFetch = fetch($contentQuery);
	$locationFetch = fetch($locationQuery);	
	
	$tut = substr($contentFetch['name'], 37, 20) ? '<span>'.substr($contentFetch['name'], 37, 20).'</span>' : '</br>';
	
	$projects .= '<div class="col-12 col-lg-4 mb-4 wow fadeInDown" data-wow-duration="300ms">
		<a href="' . site_url('project-page/' . $contentFetch['url'])  . '" class="card project-card">
			<span class="img">
				<img data-src="' . site_url($row['src']) . '" class="w-100 lazy" alt="">
			</span>			
			<span class="card-body">
				<span class="row align-items-center">
					<span class="col p-title">' . substr($contentFetch['name'], 0, 37) . '</span>					
					<span class="col text-end">
						<span class="d-block">' . $row['city'] . ' - ' . $contentFetch['country']  . '</span>
						<span class="d-block">' . $row['year'] . '</span>
					</span>	
				<span>'.$tut.'</span>	
				</span>				
				<a href="' . site_url('project-page/' . $contentFetch['url'])  . '" class="btn float-end mb-4 mt-2" style="margin-top: -0.5rem!important;">' . lang('view')  . '</a>
			</span>';


	$projects .= $contentFetch['designedby'] ? '<span class="designed">' . $contentFetch['designedby']  . '</span>' : null;
	$projects .= '</a>
	</div>';

	$des .= $contentFetch['name']. " ".$row['year']." · ";
}




$desc = $des;



require view('project');
