<?php

if (get('delete')) {
    query("delete from business_partners where id=" . get('delete'));
    $deleteSuccess = "Successfully deleted!";
}
$search = "";
if (get('search')) {
    $search = "where name LIKE '%" . get('search') . "%'";
}

$sayfa = get('page') ? get('page') : 1;
$sqlText = "select * from business_partners {$search} order by id desc";

$total = num(query($sqlText));
$sayfada = 10;
$total_page = ceil($total / $sayfada);
if ($sayfa > $total_page) {
    $sayfa = $total_page;
}
if ($sayfa <= 0) {
    $sayfa = 1;
}

$query = query($sqlText . " limit " . ($sayfada * ($sayfa - 1)) . ', ' . $sayfada);

$html = "";

$sayac = 1;
while ($f = fetch($query)) {
    $html .= '
	<tr class="text-muted">
		<td>' . (($sayfada * ($sayfa - 1)) + $sayac++) . '</td>
		<td><a href="javascript:void(0)" class="text-muted">' . $f['name'] . '</a>
        <td><img src="' . site_url($f['src']) . '" class="upload-image" style="width: 200px" alt="">
		<td><a href="' . $f['link'] . '" target="_blank" class="text-muted">' . $f['link'] . '</a>
        <td><a href="javascript:void(0)" class="text-muted">' . $f['src'] . '</a>
		</td>
		<td><span>' . dateAgo($f['create_at']) . '</span>
		</td>
		<td>
			<span>
				<a href="' . admin_url('partner_edit?id=' . $f['id']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
					<i class="fa fa-pencil color-muted"></i>
				</a>
				<a href="' . admin_url('partner_list?delete=' . $f['id']) . '" onclick="return confirm(\'Are you sure you want to delete this Partner?\')' . '" title="Delete">
					<i class="fa fa-close color-danger"></i>
				</a>
			</span>
		</td>
	</tr>
';
}

$pages = '';
if ($total_page > 1) {
    $Paging = new PagedResults();
    $Paging->TotalResults = $total;
    $Paging->ResultsPerPage = $sayfada;
    $Paging->LinksPerPage = 10;
    $Paging->PageVarName = "page";
    $InfoArray = $Paging->InfoArray();

    $pages = '<div class="col-12 p-3 card"><nav><ul class="pagination pagination-sm pagination-gutter justify-content-center mb-0">';
    if ($InfoArray["PREV_PAGE"]) {
        $pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('partner_list') . '">❰❰</a></li>';
        $pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('/partner_list?page=' . $InfoArray["PREV_PAGE"]) . '">❰</a></li>';
    } else {
        $pages .= '<li class="page-item"><a class="page-link">❰❰</a></li>';
        $pages .= '<li class="page-item"><a class="page-link">❰</a></li>';
    }
    for ($i = 0; $i < count($InfoArray["PAGE_NUMBERS"]); $i++) {
        if (ceil($InfoArray["CURRENT_PAGE"]) == $InfoArray["PAGE_NUMBERS"][$i]) {
            $pages .= '<li class="page-item active"><a href="#" class="page-link">' . $InfoArray['PAGE_NUMBERS'][$i] . '</a></li>';
        } else {
            $pages .= '<li class="page-item"><a href="' . admin_url('partner_list?page=' . $InfoArray["PAGE_NUMBERS"][$i]) . '" class="page-link">' . $InfoArray["PAGE_NUMBERS"][$i] . '</a></li>';
        }
    }
    if ($InfoArray["NEXT_PAGE"]) {
        $pages .= '<li class="page-item"><a href="' . admin_url('partner_list?page=' . $InfoArray["NEXT_PAGE"]) . '" class="page-link">❱</a></li>';
        $pages .= '<li class="page-item"><a href="' . admin_url('partner_list?page=' . $total_page) . '" class="page-link">❱❱</a></li>';
    } else {
        $pages .= '<li class="page-item"><a class="page-link">❱</a></li>';
        $pages .= '<li class="page-item"><a class="page-link">❱❱</a></li>';
    }
    $pages .= '</ul></nav></div>';
}

require view("admin/partner_list");
