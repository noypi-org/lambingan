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
          <h2 class="is-size-2">Terms of Service</h2>
          <p>Effective: This is only pre-generated TOS, so we don't really need it right now.</p>
          <hr><style>.content h3{color:#ddd;}</style>
          <div class="content">
	     <h3>1. Terms</h3>
             <p>By accessing the website at https://<?php echo $_SERVER['HTTP_HOST'];?>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
             <h3>2. Use License</h3>
             <ul>
                <li>Permission is granted to temporarily download one copy of the materials (information or software) on Lambingan's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                   <ul class="anak">
                      <li>modify or copy the materials;</li>
                      <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                      <li>attempt to decompile or reverse engineer any software contained on Lambingan's website;</li>
                      <li>remove any copyright or other proprietary notations from the materials; or</li>
                      <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                   </ul>
                </li>
                <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Lambingan at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
             </ul>
             <h3>3. Disclaimer</h3>
             <ul>
                <li>The materials on Lambingan's website are provided on an 'as is' basis. Lambingan makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
                <li>Further, Lambingan does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
             </ul>
             <h3>4. Limitations</h3>
             <p class="is-size-6" style="padding-left:1.75em;">In no event shall Lambingan or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Lambingan's website, even if Lambingan or a Lambingan authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
             <h3>5. Accuracy of materials</h3>
             <p>The materials appearing on this website could include technical, typographical, or photographic errors. Lambingan does not warrant that any of the materials on its website are accurate, complete or current. Lambingan may make changes to the materials contained on its website at any time without notice. However Lambingan does not make any commitment to update the materials.</p>
             <h3>6. Links</h3>
             <p>Lambingan has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Lambingan of the site. Use of any such linked website is at the user's own risk.</p>
             <h3>7. Modifications</h3>
             <p>Lambingan may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
             <h3>8. Governing Law</h3>
             <p>These terms and conditions are governed by and construed in accordance with the laws of Philippines and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
          </div><!--./content-->
       </div><!--./container-->
     </div>
  </section>

  <?php include('footer.php');?>
  </body>
</html>
