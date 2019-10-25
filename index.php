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

$a = curl_init('https://pinoybay.ch/api/index.php');
     curl_setopt($a, CURLOPT_RETURNTRANSFER, 1);
$b = curl_exec($a);
     curl_close($a);

$c = json_decode($b, true);

$ft = $c['data'][0];
$requestUrl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
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
    <meta property="og:title" content="ang bagong lambingan. pinoy tv at teleserye!">
    <meta property="og:description" content="ang bagong lambingan. libre lang manood dito ng teleserye. may pinoy tv kasi!">
    <meta property="og:image" content="<?php echo $ft['thumb'];?>">
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://s.ytimg.com/yts/img/creator/favicon_32-vflOogEID.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <title>ang bagong lambingan. pinoy tv at teleserye!</title>
    <script>var ft = "<?php echo base64_encode(substr($ft['title'],0,10));?>";</script>
  </head>
  <body>
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

      <div class="navbar-menu" id="navright">
        <div class="navbar-end">
          <div class="navbar-item">
            <form action="/search" method="GET"><input name="q" type="text" class="input is-rounded" placeholder="Enter your searches" style="width:320px"></form>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="notification" id="newsflash" style="display:none;">breaking: pinoy tv, lambingan, teleserye google top search trends. <a href="/exit.php?url=https://noypi.org">read more</a></div>
      <div class="columns">
        <div class="column is-two-thirds">
          <figure class="image is-16by9" style="cursor:pointer;" onclick="play(this, '<?php echo $ft['url'];?>');">
            <img src="<?php echo $ft['thumb'];?>" width="640" height="360">
            <img src="https://s999.ga/test/play_white.png" style="max-width:128px;max-height:128px;position:absolute;">
          </figure>
          <br>
          <p class="title is-4"><?php echo tt($ft['title']);?></p>
          <span class="tags has-addons"><span class="tag is-danger"><?php echo ts($ft['uploadts']);?></span><span class="tag is-info"><?php echo $ft['host'];?></span></span>
          <a href="/search?q=<?php echo str_replace(" ","+",substr($ft['title'],0,15));?>" class="button is-primary">click here to watch more from this teleserye</a>
          <hr>
          <div class="columns" id="relatedUploads">
          <?php foreach(range(1,4) as $rng){?>
             <div class="column is-3">
                <figure class="image">
                   <img src="https://picsum.photos/200/150?random=<?php echo rand(1,9999);?>">
                   <p class="is-size-7 has-text-weight-normal">related teleserye is loading...</p>
                   <span class="tags has-addons"><span class="tag is-dark">10.10.2019</span><span class="tag is-link">lambingan.ga</span></span>
                </figure>
             </div>
          <?php }//end range?>
          </div>
        </div>
        <div class="column">
          <article class="message"><div class="message-header"><p>Recently uploaded</p></div></article>
          <?php foreach($c['data'] as $i=>$d) {if($i>0){?>
          <a class="card" style="border:none;box-shadow:none;background:none;" href="<?php echo vt($d['id'], $d['title']);?>">
            <div class="media">
              <div class="media-left">
                <figure class="image">
                   <img src="<?php echo $d['thumb'];?>" style="width:168px;height:94px;">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <h5 class="is-size-6 has-text-weight-normal"><?php echo tt($d['title']);?></h5>
                  <span class="tags has-addons">
                  <span class="tag is-info"><?php echo ts($d['uploadts']);?></span>
                  <span class="tag is-danger"><?php echo $d['host'];?></span>
                  </span>
                </div>
              </div>
            </div>
          </a><!--./card-->
          <br>
          <?php }}?>
          <a class="button is-large is-fullwidth is-primary" href="/more/teleserye">- - - M O R E - - -</a>
        </div><!--./column-->
      </div><!--./columns-->
    </div><!--./container-->
  </section>

  <?php include('footer.php');?>
  </body>
</html>
