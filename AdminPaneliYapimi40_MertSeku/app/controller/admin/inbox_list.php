<?php

if (get('delete')) {
    query("delete from contact_us where id=" . get('delete'));
    $deleteSuccess = "Successfully deleted!";
}
if (get('read')) {
    query("update contact_us SET status='READ' where id=" . get('read'));    
}
$search = "";
if (get('search')) {
    $search = "where name LIKE '%" . get('search') . "%'";
}

$sayfa = get('page') ? get('page') : 1;
$sqlText = "select * from contact_us {$search} order by id desc";

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
		<td><a href="javascript:void(0)" class="text-muted">' . $f['mail'] . '</a>
        <td><a href="javascript:void(0)" class="text-muted">' . $f['phone'] . '</a>        
        <td><a href="javascript:void(0)" class="text-muted">' . $f['subject'] . '</a>  
        <td><a href="javascript:void(0)" class="text-muted">' . $f['status'] . '</a>  
		</td>		
		</td>
		<td>
			<span>
				<a href="' . admin_url('inbox_list?read=' . $f['id']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Mark Read">
					<i class="fa fa-check-square color-muted"></i>
				</a>  
                <a href="' . admin_url('inbox_read?id=' . $f['id']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Read">
					<i class="fa fa-book color-muted"></i>
				</a>                
				<a href="' . admin_url('inbox_list?delete=' . $f['id']) . '" onclick="return confirm(\'Are you sure you want to delete this Message?\')' . '" title="Delete">
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
        $pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('inbox_list') . '">❰❰</a></li>';
        $pages .= '<li class="page-item"><a class="page-link" href="' . admin_url('/inbox_list?page=' . $InfoArray["PREV_PAGE"]) . '">❰</a></li>';
    } else {
        $pages .= '<li class="page-item"><a class="page-link">❰❰</a></li>';
        $pages .= '<li class="page-item"><a class="page-link">❰</a></li>';
    }
    for ($i = 0; $i < count($InfoArray["PAGE_NUMBERS"]); $i++) {
        if (ceil($InfoArray["CURRENT_PAGE"]) == $InfoArray["PAGE_NUMBERS"][$i]) {
            $pages .= '<li class="page-item active"><a href="#" class="page-link">' . $InfoArray['PAGE_NUMBERS'][$i] . '</a></li>';
        } else {
            $pages .= '<li class="page-item"><a href="' . admin_url('inbox_list?page=' . $InfoArray["PAGE_NUMBERS"][$i]) . '" class="page-link">' . $InfoArray["PAGE_NUMBERS"][$i] . '</a></li>';
        }
    }
    if ($InfoArray["NEXT_PAGE"]) {
        $pages .= '<li class="page-item"><a href="' . admin_url('inbox_list?page=' . $InfoArray["NEXT_PAGE"]) . '" class="page-link">❱</a></li>';
        $pages .= '<li class="page-item"><a href="' . admin_url('inbox_list?page=' . $total_page) . '" class="page-link">❱❱</a></li>';
    } else {
        $pages .= '<li class="page-item"><a class="page-link">❱</a></li>';
        $pages .= '<li class="page-item"><a class="page-link">❱❱</a></li>';
    }
    $pages .= '</ul></nav></div>';
}

require view("admin/inbox_list");
