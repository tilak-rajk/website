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
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
		body #metacube-footer {
			margin-top: 0;
		}
	</style>
	<link href="assets/css/people-style.css" rel="stylesheet">
	<link href="assets/css/people-style-1280px.css" rel="stylesheet">
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
	<style>
		.ourPepoleConatiner {
			background: #e7e5e5;
		}
		
		.people_list li {
			width: 25%;
			float: left;
			font-family: "Benton Sans Book";
			font-size: 12px;
			padding: 10px;
			line-height: 165%;
		}
		
		.designation_main {
			position: relative;
		}
		
		.people_list li img {
			width: 100%;
		}
		
		.designation_overlay {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			/*background: rgba(255, 255, 255, 0.95);*/
			padding: 18px 10px;
			min-height: 95px;
		}
		
		.people_list li .people_name {
			font-weight: 700;
			display: block;
			font-family: "Benton Sans";
			font-size: 14px;
		}
		
		@media (max-width: 980px) {
			.people_list li {
				width: 50%;
			}
			.designation_overlay {
				min-height: auto;
				padding: 12px 8px;
			}
			/* 
	#metacube-logo img{
		max-width:100%;
	}
 */
		}
		
		@media (max-width: 480px) {
			/* ---151215--- */
			.people_list li {
				width: 100%;
			}
			.olvc img {
				width: 90%;
			}
			/* ---151215--- */
		}
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
			<!-------------------- PEOPLE IMAGE BANNER -------------------->
            <div id="people-image-banner" class="all_banners"></div>
				<div id="main_wrapper">
					<!-------------------- PEOPLE TEXT BANNER -------------------->
					<div id="people-text-banner" class="all_banners">
						<div class="inner-content">
							<h3>Our People</h3>
							<hr class="invisible" />
							<hr class="blue-underline" />
						</div>
					</div>
					<!-------------------- PEOPLE CONTENT -------------------->
					<div id="people-content" class="ourPepoleConatiner people_container">
						<div class="container tac">
							<ul class="people_list list-unstyled clearfix" id="people_list">
								
							</ul>
						</div>
					</div>
					<!-------------------- FOOTER -------------------->
					<div id="metacube-footer">
						
					</div>
				</div>
			</div>
		</div>
    <input type="hidden" value="<?php echo $token; ?>" id="token" />
	</div>

    <script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- <script src="assets/js/modernizr-custom.js"></script> -->
	<script src="assets/js/scripts.js"></script>
    <script>
        $(document).bind('mobileinit', function() {
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
    <script>
        $(document).ready(function() {
           loaddata();
        });
		function loaddata() {
            $.ajax({
                url: 'include/ourpeople.php?id=load',
                type: 'post',
                data: {},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    var content = "";
                    $.each(obj.Records, function (key, value) {
						
						content += '<li onclick="window.location.href=\'people-inside.php?id=' + value.ID + '\'">';
							content += '<div class="designation_main">';
								content += '<img src="admin/uploads/' + value.THUMB_IMAGE_PATH + '" alt="" />';
								content += '<div class="designation_overlay">';
									content += '<div class="des_over"></div>';
									content += '<div class="designation_overlayInner">';
										content += '<span class="people_name">' + value.NAME + ' </span>';
										var des = value.DESIGNATION.split(',');
										if (des[1] != undefined) {
											des = des[0] + ',<br/>'+ des[1];
										}else{
											des = value.DESIGNATION;
										}
										content += '<p class="people_deg">'+ des + '</p>';
									content += '</div>';
								content += '</div>';
							content += '</div>';
						content += '</li>';
                    });
                    $('#people_list').html(content);
                },
                error: function (e) {

                }
            });
        }
    </script>
	
</body>

</html>