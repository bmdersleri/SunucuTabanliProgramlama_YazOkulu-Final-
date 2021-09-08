<?php
$contentQuery = query("select * from blogs order by id desc");
$html = "";
while ($row = fetch($contentQuery)) {
    $html .= ' 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">' . $row['baslik'] . '</h5>
            <p class="card-text">' . htmlspecialchars_decode(substr($row['icerik'], 0, 150)) . '...</p>
            <p class="card-text"><small class="text-muted">Added on ' . $row['tarih'] . '</small></p>
        </div>
    </div> 
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="' . site_url('post?src=' . $row['src'])  . '">Read More →</a></div>
    
    
    ';
}



$desc = settings('posts');
$lowerdesc = settings('postsldesc');
$title = settings('titleposts');
$photosrc = photo('posts');

include view("posts");
