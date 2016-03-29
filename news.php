<?php
    header('X-Frame-Options: DENY');
    session_start();
    $token = md5(rand(1000,9999)); //you can use any encryption
    $_SESSION['token'] = $token; //store it as session variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>MetaCube | News</title>
	<meta name="description" content="">
    <meta name="keywords" content="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/news-style.css" rel="stylesheet">
	<link href="assets/css/news-style-1280px.css" rel="stylesheet">
	<link href="assets/css/font-styles.css" rel="stylesheet">
	<link href="assets/css/font-styles-1280px.css" rel="stylesheet">
	<link href="assets/css/font-layouts.css" rel="stylesheet">
	<link href="assets/css/font-layouts-1280px.css" rel="stylesheet">
	<link href="assets/css/layout-style.css" rel="stylesheet">
	<link href="assets/css/media-queries.css" rel="stylesheet">
	<link href="assets/css/interactions.css" rel="stylesheet">
	<!--custom css-->
	<script src="assets/js/ie-emulation-modes-warning.js"></script>
	<link href="http://cloud.webtype.com/css/c2e40f9c-55d1-44f9-b712-04ac92552b23.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.news-content {
			color: #000;
			transition: all 300ms ease;
		}
		.news-content:hover {
			background-color:#f6f6f6;
			cursor: pointer;
		}
		/*
		.news-content:hover .p3,
		.news-content:hover h6,
		.news-content:hover h3 {
			color: #fff;
		}
		*/
	</style>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73019747-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<!-------------------- MENU -------------------->
	<div class="mainNav st-menu" id="menu">
		
	</div>
	<div class="st-pusher no-fouc">
		<div class="menu_overlay"></div>
		<div id="metacube-wrapper">
			<!-- Start of Top Header -->
			<div id="metacube-header">
                
            </div>
			<!-------------------- NEWS IMAGE BANNER -------------------->
			<div id="news-image-banner" class="all_banners"></div>
			<!-------------------- NEWS TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="news-text-banner">
					<div class="inner-content">
						<h3>News and Events</h3>
						<hr class="invisible" />
						<hr class="blue-underline" />
						<p class="p3">Stay updated on the latest happenings at Metacube. Watch this space for news, announcements and upcoming events.</p>
					</div>
				</div>
				<!-------------------- NEWS CONTENT -------------------->
				<div class="container">
					
				</div>
				<!-------------------- MORE CONTENT -------------------->
				<div id="more-content">
					<div class="button">
						<button class="b1 button--antiman"><span class="btn-text">more</span></button>
					</div>
				</div>
                <input type="hidden" value="<?php echo $token; ?>" id="token" />
				<!-------------------- FOOTER -------------------->
				<div id="metacube-footer">
					
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- <script src="assets/js/modernizr-custom.js"></script> -->
	<script src="assets/js/scripts.js"></script>
	<script>
		$(document).bind('mobileinit', function()
		{
			$.mobile.changePage.defaults.changeHash = false;
			$.mobile.hashListeningEnabled = false;
			$.mobile.pushStateEnabled = false;
			$.mobile.loading().hide();
		});
	</script>
	<script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="assets/js/jquery-epulse.min.js"></script>
    <script src="assets/js/jquery-dateFormat.min.js"></script>
	<script>
		$(document).ready(function()
		{
			loaddata(10000000000000);
		});
		
		function loaddata(id) {
            $.ajax({
                url: 'include/news.php?id=load',
                type: 'post',
                data: {ID: id},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    var content = "", button = "", idmore = "";
                    $.each(obj.Records, function (key, value) {
						var dateFormat = value.DATE  + ' 10:54:50.546';
						var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
		
						var titl = value.TYPE;
						if (titl == '1') { titl = 'News' }
						if (titl == '2') { titl = 'Initiative' }
						if (titl == '3') { titl = 'Events' }
					
                        content += "<hr/>";
                        content += "<div onclick=\"window.location.href='news-inside.php?id=" + value.ID + "'\" class=\"news-content\">";
                        content += "<div class=\"inner-content\">";
                        content += "<h6>" + dateFormat + " / " + titl + "</h6>";
                        content += "<h3>" + value.TITLE + "</h3>";
                        content += "<p class=\"p3 blue\">" + value.SHORT_DESCRIPTION + "</p>";
                        content += "</div>";
                        content += "</div>";
						
						idmore = value.ID;
                    });
					
					if (idmore > 2) {
						button += '<div class="button">';
						button += '<button onclick="loaddata(\''+idmore+'\')" class="b1 button--antiman"><span class="btn-text">more</span></button>';
						button += '</div>';
					}

                    $('.container').append(content);
					$('#more-content').html(button);
                },
                error: function (e) {

                }
            });

        }
		/**** Button animation ******/
		$(".button-ripple").ePulse(
		{
			bgColor: 'rgba(0, 0, 0, 0.5)',
			event: 'mousedown'
		});
		
	</script>
	
</body>
</html>