<?php
function tt($tt) {
   return str_replace("mp4","", str_replace("."," ", $tt));
}

function ts($ts) {
   return date_format(date_create($ts), "D");
}

$p = 1;
$l = 4;

if( isset($_GET['l']) ) {
   $l = intval($_GET['l']);
}

if( isset($_GET['p']) ) {
   $p = intval($_GET['p']);
}

if( isset($_GET['q']) ) {
   $q = $_GET['q'];
}

if( !isset($q) ) {
   die("usage: /api/related.php?q={base64.encoded(char)}");
}

$a = curl_init("https://pinoybay.ch/api/search.php?q=$q&page=$p&limit=$l");
curl_setopt($a, CURLOPT_RETURNTRANSFER, true);
$b = curl_exec($a);
curl_close($a);
$c = json_decode($b, true);
$d = array();

$host = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];


foreach($c['data'] as $e) {
   $url = $host . "/watch/" . $e['id'] . "/" . preg_replace("/\W/","-",$e['title']);
   array_push($d, array('title' => tt($e['title']), 'image' => $e['thumb'], 'permalink' => $url, 'source' => $e['host'], 'uploadts' => ts($e['uploadts']) ));
}

header("content-type: application/json");
header("access-control-allow-origin: *");

echo json_encode($d, JSON_PRETTY_PRINT);
