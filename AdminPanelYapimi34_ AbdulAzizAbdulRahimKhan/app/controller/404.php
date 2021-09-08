<?php
$title = lang('error-404-message');
$desc = ('ERROR');
$lowerdesc = settings('error');
$photosrc = photo('404');
require view('404');
exit;
