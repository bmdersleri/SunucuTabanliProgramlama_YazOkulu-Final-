<?php
$contentQuery = query("select * from blogs order by id desc limit 5");


$icerik = "";


while ($row = fetch($contentQuery)) {
    $icerik .= '
    <div class="post-preview">
        <a href="' . site_url('post?src=' . $row['src'])  . '">
        
            <h2 class="post-title">' . $row['baslik'] . '</h2>
            <h3 class="post-subtitle">' . htmlspecialchars_decode(substr($row['icerik'], 0, 150)) . '...</h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!">Chunky</a>
            ' . $row['tarih'] . '
        </p>
    </div>
    <hr class="my-4">';
}

$desc = settings('index');
$lowerdesc = settings('indexldesc');
$title = settings('titleindex');
$photosrc = photo('index');
include view("index");
