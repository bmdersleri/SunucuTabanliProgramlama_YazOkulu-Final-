<?php

if(get('delete')){
	query("delete from project where id=" . get('delete'));
	query("delete from project_content where projectid=" . get('delete'));
	$deleteSuccess = "Successfully deleted!";
}
$search = "";
if(get('search')){
	$search = " and name LIKE '%".get('search')."%'";
}

$sayfa = get('page') ? get('page') : 1;
$sqlText1 = "select * from project as b, project_content as bc where bc.projectid = b.id and bc.lang = 1 {$search} order by b.id desc";
$sqlText = "select b.id,b.create_at,b.typology,b.location,b.city,b.year,b.projectarea,bc.projectid,bc.name,bc.customer,bc.country,bc.url,tc.typology,lc.location from project as b, project_content as bc,typology_content as tc,location_content as lc where bc.projectid = b.id and tc.typologyid = b.typology and lc.locationid = b.location and bc.lang = 1 and tc.lang = 1 and lc.lang = 1 {$search} order by b.id desc";



$total = num(query($sqlText));
$sayfada = 10;
$total_page = ceil($total / $sayfada);
if($sayfa > $total_page){
	$sayfa = $total_page;
}
if($sayfa <= 0){
	$sayfa = 1;
}

$query = query($sqlText . " limit " . ($sayfada * ($sayfa - 1)) .', '. $sayfada);

$html = "";
$langQuery = query("select * from language");
$languages = array();

while($langFetch = fetch($langQuery)){
	$languages[$langFetch['id']] = $langFetch;
}

$sayac = 1;
while($f = fetch($query)){
	$contents = "";
	$projectLang = query("select DISTINCT lang from project_content where projectid=" . $f['projectid']);
	$projectLangsID = array();
	while($projectLangFetch = fetch($projectLang)){
		$projectLangsID[] = $projectLangFetch['lang'];
	}
	foreach ($languages as $key => $value) {
		if(in_array($key, $projectLangsID)){
			$contents .= '<span class="badge badge-primary mr-1">' . $value['shortcode'] . ' ✔</span>';
		}else{
			$contents .= '<span class="badge badge-dark mr-1">' . $value['shortcode'] . ' ❌</span>';
		}
	}

	$html .= '
	<tr class="text-muted">
		<td>' . (($sayfada * ($sayfa - 1)) + $sayac++) .'</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['name']. '</a>
		</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['typology'] . '</a>
		</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['location'] . '</a>
		</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['city'] . '</a>
		</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['year'] . '</a>
		</td>		

		<td><a href="javascript:void(0)" class="text-muted">' . $f['country'] . '</a>
		</td>
		<td>'.$contents.'</td>
		<td><a href="'.site_url('project-page2/'.$f["url"]).'" target="_blank" class="text-muted">' . site_url('project-page2/'.$f["url"]) . '</a>
		</td>
		<td><span>' . dateAgo($f['create_at']) . '</span>
		</td>
		<td>
			<span>
				<a href="' . admin_url('project_photo?id='.$f['projectid']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Photo">
					<i class="fa fa-camera color-muted"></i>
				</a>
				<a href="' . admin_url('project_edit?id='.$f['projectid']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
					<i class="fa fa-pencil color-muted"></i>
				</a>
				<a href="' . admin_url('project_list?delete='.$f['projectid']) . '" onclick="return confirm(\'Are you sure you want to delete this project?\')' .'" title="Delete">
					<i class="fa fa-close color-danger"></i>
				</a>

			</span>
		</td>
	</tr>
';
}

$pages = '';
if($total_page > 1){
$Paging = new PagedResults();
$Paging->TotalResults = $total;
$Paging->ResultsPerPage = $sayfada;
$Paging->LinksPerPage = 10;
$Paging->PageVarName = "page";
$InfoArray = $Paging->InfoArray();

	$pages = '<div class="col-12 p-3 card"><nav><ul class="pagination pagination-sm pagination-gutter justify-content-center mb-0">';
	if($InfoArray["PREV_PAGE"]) {
		$pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('project_list') . '">❰❰</a></li>';
		$pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('/project_list?page='. $InfoArray["PREV_PAGE"]) . '">❰</a></li>';
	}else{
		$pages .= '<li class="page-item"><a class="page-link">❰❰</a></li>';
		$pages .= '<li class="page-item"><a class="page-link">❰</a></li>';
	}
	for($i=0; $i<count($InfoArray["PAGE_NUMBERS"]); $i++) {
		if(ceil($InfoArray["CURRENT_PAGE"]) == $InfoArray["PAGE_NUMBERS"][$i]) {
			$pages .= '<li class="page-item active"><a href="#" class="page-link">'.$InfoArray['PAGE_NUMBERS'][$i].'</a></li>';
		} else {
			$pages .= '<li class="page-item"><a href="'.admin_url('project_list?page='.$InfoArray["PAGE_NUMBERS"][$i]).'" class="page-link">'. $InfoArray["PAGE_NUMBERS"][$i].'</a></li>';
		}
	}
	if($InfoArray["NEXT_PAGE"]) {
		$pages .= '<li class="page-item"><a href="'.admin_url('project_list?page='.$InfoArray["NEXT_PAGE"]).'" class="page-link">❱</a></li>';
		$pages .= '<li class="page-item"><a href="'.admin_url('project_list?page='. $total_page).'" class="page-link">❱❱</a></li>';
	}else{
		$pages .= '<li class="page-item"><a class="page-link">❱</a></li>';
		$pages .= '<li class="page-item"><a class="page-link">❱❱</a></li>';
	}
	$pages .= '</ul></nav></div>';
}

require view("admin/project_list");
