<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "Mohey_eldin@hotmail.com";

mail($recipient, $subject ,$message ,$mailheader )
or die ("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Smart Ways</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap"
      rel="stylesheet"
    />

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/magnific-popup.css" rel="stylesheet" />

    <link href="css/tooplate-tween-agency.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/images/Favicon.png" />
  </head>

  <body>
    <div class="mailsend">
      <h1>
        Thank you for contact us. We will get back to you as soon as possible!
      </h1>
      <p class="back">Go back to the <a href="index.html">Home Page</a>.</p>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>

';

?>