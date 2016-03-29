<?php
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    
}
else{
    header('Location: sign-in.html');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->

    <!--<![endif]-->
  </head>
  <body class=" theme-blue">
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html">
          <img src="../assets/images/logo.svg" style="background: white; padding: 15px 15px; width: 60%; margin: 2px 0 0 0;" />
        </a>
      </div>
      <div class="navbar-collapse collapse" style="height: 1px;">
        <ul id="main-menu" class="nav navbar-nav navbar-right">
          <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>
              Admin
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a tabindex="-1" href="sign-in.html">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-nav">
      <ul>
        <li class="active">
          <a href="index.php" class="nav-header">
            <div class="home active_div">&nbsp;</div><br />
            Home
          </a>
        </li>
        <li>
          <a href="careers.html" class="nav-header">
            <div class="career">&nbsp;</div><br />
            Careers
          </a>
        </li>
        <li>
          <a href="contactus.html" class="nav-header">
            <div class="contact">&nbsp;</div><br />
            Contact Us
          </a>
        </li>
        <li>
          <a href="news.html" class="nav-header">
            <div class="news">&nbsp;</div><br />
            News
          </a>
        </li>
        <li>
          <a href="ourpeople.html" class="nav-header">
            <div class="user">&nbsp;</div><br />
            Our People
          </a>
        </li>
                <li>
                    <a href="ourideas.html" class="nav-header">
                        <div class="ideas">&nbsp;</div><br />
                        Our Ideas
                    </a>
                </li>
      </ul>
    </div>
    <div class="content">
      <div class="main-content">
        <?php
            session_start();
            // User session data availability check 
            if (!empty($_SESSION['userdetails'])) 
            {
              // Redirecting to home.php
                 //header('Location: home.php');
            }
            require 'instagram.class.php';
            require 'instagram.config.php';
            // Login URL
            $loginUrl = $instagram->getLoginUrl();
        ?>
        <ul class="tabs">
          <li>
            <a class='instagram' href='<?php echo $loginUrl ?>'><br><span>Instagram</span></a>
          </li>
          <li>
            <a class='twitter' href='tweet.php'><br><span>Twitter</span></a>
          </li>
          <li>
            <a class='banner' href='banners.html'><br><span>Banners</span></a>
          </li>
          <li>
            <a class='social' href='social.html'><br><span>Social Links</span></a>
          </li>
          <li>
            <a class='uploads' href='upload.php'><br><span>Upload Images</span></a>
          </li>
          <li>
            <a class='gallery' href='gallery.php'><br><span>Gallery</span></a>
          </li>
        </ul>
        <br /><br />
      </div>
    </div>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
  </body>
</html>