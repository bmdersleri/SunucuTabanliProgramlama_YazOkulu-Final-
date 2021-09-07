<?php
if (isset($_POST["submit"])) {
    $id = explode(",", $_POST["sort"]);
    for ($i = 0; $i < count($id); $i++) {
        query("UPDATE team SET sort='" . $i . "' WHERE id=" . $id[$i]);
    }
}

$htmltut = "";
$q = query("SELECT * FROM team ORDER BY sort ASC");
while ($row = fetch($q)) {
	$htmltut .= '
		<li class="col" id="' . $row['id'] . '" src="' . site_url($row['src']) . '">
			<span><img src="' . site_url($row['src']) . '" class="w-100"/></span>
			<span>'. $row['name'].'</span>
		</li>
	';
}

require view("admin/team_sort");
