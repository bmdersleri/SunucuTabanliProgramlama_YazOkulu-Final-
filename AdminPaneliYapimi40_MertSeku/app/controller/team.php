<?php
$seourl = url(1);
$menu =false;

$h1 = lang('team');

$teamQuery = query("select * from team order by sort asc");
$teams = "";

while($row = fetch($teamQuery)){
	$id = $row['id'];
	$contentQuery = query("select * from team_content where teamid={$id} and lang={$langcookie}");
	if(num($contentQuery) <= 0){
		$contentQuery = query("select * from team_content where teamid={$id} and lang=1");
	}
	$content = fetch($contentQuery);
	$teams .= '<div class="col-3 wow fadeInDown" data-wow-duration="1s">
		<a href="#" class="card">
			<span class="img">
				<img data-src="' . site_url($row['src']) . '" class="w-100 lazy" alt="">
			</span>
			<span class="card-body">
				<small>' . $content['title'] . '</small>
				<span class="name">' . $row['name'] . '</span>
			</span>
		</a>
	</div>';
}


	


require view('team');
