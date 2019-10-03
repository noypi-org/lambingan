<?php
if( file_get_contents('php://input') ) {
   $post = json_decode(file_get_contents('php://input'), true);
   $email = $post['email'];
   $message = $post['message'];
   $msgcount = strlen($message);
   $response = array('code' => 204, 'text' => 'blank');

   if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      $response['code'] = 405;
      $response['text'] = "Error: Invalid email address.";
   }

   if( $msgcount < 10 ) {
      $response['code'] = 405;
      $response['text'] = "Error: Message too short.";
   }

   if( $msgcount > 120 ) {
      $response['code'] = 405;
      $response['text'] = "Error: Message too long. Use NOTEPAD and upload to https://send.firefox.com and send to us the link.";
   }

   if( $response['code'] != 405 ) {
      try {
         $mail = dirname(__FILE__) . "/mail/";
         if( !file_exists($mail) ) {
            mkdir($mail);
         }
         $mail = $mail . md5(time() + rand(1,9999));
         file_put_contents($mail, $email . ":" . $message);
         $response['code'] = 200;
         $response['text'] = 'success';
      }
      catch(Exception $err) {
         $response['code'] = 500;
         $response['text'] = 'cannot write file.';
      }
   }

   
   header("content-type: application/json");
   echo json_encode($response, JSON_PRETTY_PRINT);
   exit();   
}

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <title>maintenance mode.</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
          <h2 class="is-size-2">Contact Us</h2>
          <p>Drop your message</p>
          <hr style="border:1px dashed #555;">
          <div class="field">
             <label class="label has-text-white">Email</label>
             <div class="control has-icons-left has-icons-right">
                <input class="input is-large" type="email" placeholder="johndoe@gmail.com" name="email" id="email">
                <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
             </div>
          </div>
         <div class="field">
            <label class="label has-text-white">Message</label>
            <div class="control">
               <textarea class="textarea is-large" placeholder="Textarea" name="message" id="message"></textarea>
            </div>
         </div>
         <div class="field">
            <div class="control">
               <button class="button is-primary is-large" onclick="send('email','message')">Submit</button>
            </div>
         </div>
       </div>
     </div>
  </section>
  <?php include('footer.php');?>
  </body>
</html>
