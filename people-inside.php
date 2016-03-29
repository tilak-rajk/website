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
    <title>MetaCube | People</title>
	<meta name="description" content="">
    <meta name="keywords" content="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--custom css-->
    <style type="text/css">
        .no-fouc {
            display: none;
        }

        body #metacube-footer {
            margin-top: 0;
        }
    </style>
    <link href="assets/css/people-inside-style.css" rel="stylesheet">
    <link href="assets/css/people-inside-style-1280px.css" rel="stylesheet">
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
    <div class="mainNav st-menu" id="menu"></div>
    <div class="st-pusher no-fouc">
        <div class="menu_overlay"></div>
        <div id="metacube-wrapper">
            <!-- Start of Top Header -->
            <div id="metacube-header"></div>
            <!-------------------- PEOPLE INSIDE IMAGE BANNER -------------------->
            <div id="people-inside-image-banner" class="all_banners"></div>
            <!-------------------- PEOPLE INSIDE TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="people-inside-text-banner">
					<div class="inner-content">
						<h3 id="people_name"></h3>
						<p class="p3" id="people_designation"></p>
					</div>
				</div>
				<!-------------------- PEOPLE INSIDE CONTENT -------------------->
				<div style="background-color: #f6f6f6; width: 100%;">
					<div id="people-inside-content">
						<div class="inner-content">
							<hr />
							<p class="p3 black" id="people_content"></p>
							<p class="p3 blue"><a class="mailTo" id="people_email"></a></p>
							<div class="news_social people_social">
								<ul class="list-unstyled">
									<li id="twitter_a"><a href="" class="sIcons twitter_ico" target="_blank" title="Twitter"></a></li>
									<li id="facebook_a"><a href="" class="sIcons facebook_ico" target="_blank" title="Facebook"></a></li>
									<li id="google_a"><a href="" class="sIcons gp_ico" target="_blank" title="Google Plus"></a></li>
									<li id="instagram_a"><a href="" class="sIcons instagram_ico" target="_blank" title="Instagram"></a></li>
									<li id="glassdoor_a"><a href="" class="sIcons galssdoor_ico" target="_blank" title="Glassdoor"></a></li>
									<li id="linkedin_a"><a href="" class="sIcons linked_ico" target="_blank" title="LinkedIn"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                <input type="hidden" value="<?php echo $token; ?>" id="token" />
				<!-------------------- FOOTER -------------------->
				<div id="metacube-footer"></div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- <script src="assets/js/modernizr-custom.js"></script> -->
    <script src="assets/js/scripts.js"></script>
    <script>
        $(document).bind('mobileinit', function () {
            $.mobile.changePage.defaults.changeHash = false;
            $.mobile.hashListeningEnabled = false;
            $.mobile.pushStateEnabled = false;
            $.mobile.loading().hide();
        });
	</script>
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $(document).ready(function () { loaddata(); });
        function loaddata() {
            var id = getParameterByName('id');
            $.ajax({
                url: 'include/ourpeopledetails.php?' + id,
                type: 'post',
                data: {},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    $.each(obj.Records, function (key, value) {
                        $('#people_name').html(value.NAME);
                        $('#people_designation').html(value.DESIGNATION);
                        $('#people_content').html(value.LONG_DESCRIPTON);
                        $('#people_email').html(value.EMAILID);
                        $('#people_email').attr('href', 'mailto:' + value.EMAILID);
                        $('#people-inside-image-banner').css("background", "url(admin/uploads/" + value.BIG_IMAGE_PATH + ")");
                        $('#people-inside-image-banner').css("background-size", "cover");
                        $('#people-inside-image-banner').css("background-position", "center");
						
						if (value.TWITTER != '')
						{ $('#twitter_a a').attr('href', value.TWITTER); } else { $('#twitter_a').css('display', 'none'); }
						if (value.FACEBOOK != '')
						{ $('#facebook_a a').attr('href', value.FACEBOOK); } else { $('#facebook_a').css('display', 'none'); }
						if (value.GOOGLEPLUS != '')
						{ $('#google_a a').attr('href', value.GOOGLEPLUS); } else { $('#google_a').css('display', 'none'); }
						if (value.INSTAGRAM != '')
						{ $('#instagram_a a').attr('href', value.INSTAGRAM); } else { $('#instagram_a').css('display', 'none'); }
						if (value.LINKEDIN != '')
						{ $('#linkedin_a a').attr('href', value.LINKEDIN); } else { $('#linkedin_a').css('display', 'none'); }
						if (value.GLASSDOOR != '')
						{ $('#glassdoor_a a').attr('href', value.GLASSDOOR); } else { $('#glassdoor_a').css('display', 'none'); }
                    });
                },
                error: function (e) { }
            });
        }
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
	</script>
</body>
</html>
