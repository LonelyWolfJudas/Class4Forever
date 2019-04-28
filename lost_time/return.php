<?php

date_default_timezone_set('PRC');
$now = strtotime(date('y-m-d h:i:s'));
$end = strtotime('2019-6-24 00:00');
$remain = $end - $now;
$total_sec = $remain;
$total_min = floor($remain/60);
$total_hour = floor($remain/60/60);
$day = floor($remain/60/60/24);
$hour = floor(($remain - ($day*24*60*60)) / 60 / 60);
$min = floor(($remain - ($day*24*60*60) - ($hour*60*60)) / 60);
$sec = floor($remain - ($day*24*60*60) - ($hour*60*60) - ($min * 60));
echo json_encode(array('total_sec'=>$total_sec,'total_min'=>$total_min,'total_hour'=>$total_hour,'day'=>$day,'min'=>$min,'hour'=>$hour,'sec'=>$sec));
?>