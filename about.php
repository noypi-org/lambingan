<?php
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

  <section class="hero is-medium is-dark is-bold">
     <div class="hero-body">
       <div class="container">
          <h2 class="is-size-2">About this website</h2>
          <hr><style>.content h3{color:#ddd;}</style>
          <div class="content">
	     <h3>Lambingan</h3>
             <p>We, the developers of this website agreed to came up with the name `lambingan` because lambingan is one of the top search trend relating to the contents.</p>
             <h3>Mission</h3>
             <p>Our mission is to provide free and easy access to entertainment to all the Filipino around the world.</p>
             <h3>The website</h3>
             <p>The website is fully automated and is relying to sources mentioned in the website itself.</p>
             <h3>Source code</h3>
             <p>The source code is publicly available and anyone is allowed to copy/duplicate/develop.</p>
          </div>
       </div>
     </div>
  </section>
  <?php include('footer.php');?>
  </body>
</html>
