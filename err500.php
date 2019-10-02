<?php
function tt($tt) {
   return str_replace("mp4","", str_replace("."," ", $tt));
}

function ts($ts) {
   return date_format(date_create($ts), "D/M/d/Y");
}

function vt($a, $b) {
   return $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . "/watch/" . $a . "/" . preg_replace("/\W/","-", $b);
}

$page = 1;
if( isset($_GET['p']) ) {
   $page = intval($_GET['p']);
}

if( isset($_GET['q']) ) {
   $q = strip_tags($_GET['q']);
}

if( !isset($q) && preg_match("/[0-9]/","",$q) ) {
   die('Error: your search query is empty');
}

$qs = base64_encode($q);

$a = curl_init("https://pinoybay.ch/api/search.php?q=$qs&page=$page&limit=24");
     curl_setopt($a, CURLOPT_RETURNTRANSFER, 1);
$b = curl_exec($a);
     curl_close($a);

$c = json_decode($b, true);

$data = $c['data'];
$firstImage = "https://picsum.photos/640/360";
$requestUrl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ang bagong lambingan. libre lang manood dito ng teleserye. may pinoy tv kasi!">
    <meta name="keywords" content="lambingan, teleserye">
    <meta property="og:url" content="<?php echo $requestUrl;?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="lambingan.ga">
    <meta property="og:title" content="maintenance mode.">
    <meta property="og:description" content="ang bagong lambingan. libre lang manood dito ng teleserye. may pinoy tv kasi!">
    <meta property="og:image" content="<?php echo $firstImage;?>">
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://s.ytimg.com/yts/img/creator/favicon_32-vflOogEID.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <title>maintenance mode.</title>
  </head>
  <body>
  <div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=1730508916998105&autoLogAppEvents=1';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
  <nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/?_=home">
           <h1 class="title is-4" style="font-family:lobster;font-size:38px;color:#ff3860;">lambingan.ga</h1>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div class="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item">
             <form action="/search" method="GET"><input name="q" type="text" class="input is-rounded" placeholder="Enter your searches" style="width:320px"></form>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="hero is-large is-warning has-text-centered">
     <div class="hero-body">
       <div class="container">
          <h2 class="is-size-2">maintenance mode. please check back later.</h2>
       </div><!--./container-->
     </div>
  </section>

  <?php include('footer.php');?>
  </body>
</html>
