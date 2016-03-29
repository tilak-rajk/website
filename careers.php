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
	<title>Metacube | Careers</title>
	<meta name="description" content="Want to work with today’s latest technologies, in an environment that lets you learn, grow and innovate? WE’RE HIRING now – see the latest opportunities!">
	<meta name="keywords" content="Metacube careers, Work at Metacube, Metacube openings">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/careers-style.css" rel="stylesheet">
	<link href="assets/css/careers-style-1280px.css" rel="stylesheet">	
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
			padding: 0 10px 0 10px;
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
		}
		
		@media (max-width: 480px) {
			.people_list li {
				width: 100%;
			}
			.olvc img {
				width: 90%;
			}
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
    <input type="hidden" value="<?php echo $token; ?>" id="token" />
	<!-------------------- MENU -------------------->
	<div class="mainNav st-menu" id="menu">
		
	</div>
	<div class="st-pusher no-fouc">
		<div class="menu_overlay"></div>
		<div id="metacube-wrapper">
			<!-- Start of Top Header -->
			<div id="metacube-header">
                
            </div>
			<!-------------------- CAREERS IMAGE BANNER -------------------->
			<div id="careers-image-banner" class="all_banners"></div>
			<!-------------------- CAREERS TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="careers-text-banner">
					<div class="text">
						<h3>Careers</h3>
						<hr class="invisible" />
						<hr class="blue-underline" />					
						<p class="p3">We are constantly on the lookout for the best talent. View the latest opportunities at Metacube for fresh graduates and experienced professionals alike.</p>
					</div>
				</div>
				<div class="container">
					<!-------------------- CAREERS SECTION ONE -------------------->
					<div id="careers-section-one" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
						<img class="mainCont cssCount" src="assets/images/careers/studentsandgraduates2.jpg" alt="" /> 
						</div>
						<div class="inner-content">
							<h5>STUDENTS & GRADUATES</h5>
							<hr class="invisible" />
							<hr class="white-underline" />
							<p class="p3">We are looking for youngsters who are brimming with energy, ideas and zeal to learn. We are coming to your college.</p>
							<button class="b3 button-ripple" onclick="setTimeout(function (){window.location.href='careers-students.php'},500);" style="cursor: pointer;"><span class="btn-text">see campus drive dates</span><!-- <span class="side-arrow"></span> --></button>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- CAREERS SECTION TWO -------------------->
					<div id="careers-section-two" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
						<img class="mainCont cssCount" src="assets/images/careers/experienced-professionals2.jpg" alt=""> 
						</div>
						<div class="inner-content">
							<h5>EXPERIENCED PROFESSIONALS</h5>
							<hr class="invisible" />
							<hr class="white-underline" />
							<p class="p3">Want to join a team of like-minded technocrats who value creativity, excellence and freedom?</p>
							<button class="b3 button-ripple" onclick="setTimeout(function (){window.location.href='careers-professionals.php'},500);" style="cursor: pointer;"><span class="btn-text">SEE opportunities</span><!-- <span class="side-arrow"></span> --></button>
						</div>
					</div>
					
					<!-------------------- CAREERS SECTION FOUR -------------------->
					<div id="careers-section-four" class="mini-sections-color">
						<div class="desktop">
							<div class="row">
								<div class="content-panel" id="desktop_tab1">
									<table>
										<tr class="title">
											<td>
												<h6>Innovation Engine</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="desktop_desc1"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="desktop_by1"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel" id="desktop_tab2">
									<table>
										<tr class="title">
											<td>
												<h6>Events</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="desktop_desc2"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="desktop_by2"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel" id="desktop_tab3">
									<table>
										<tr class="title">
											<td>
												<h6>Innovation Engine</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="desktop_desc3"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="desktop_by3"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="mobile">
							<div class="row">
								<div class="content-panel" id="mobile_tab1">
									<table>
										<tr class="title">
											<td>
												<h6>Innovation Engine</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="mobile_desc1"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="mobile_by1"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel" id="mobile_tab2">
									<table>
										<tr class="title">
											<td>
												<h6>Events</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="mobile_desc2"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="mobile_by2"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
							<div class="row">
								<div class="content-panel" id="mobile_tab3">
									<table>
										<tr class="title">
											<td>
												<h6>Innovation Engine</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="mobile_desc3"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="mobile_by3"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-------------------- CAREERS SECTION TWO -------------------->
					<div id="careers-section-three" class="ourPepoleConatiner people_container">
						<div class="container tac" style="margin:0;width:100%;">
							<!-- <h4 class="secLastftHead">Featured Metacubians</h4> -->
							<div class="text coommonHeadingSpace">
								<h3>Featured Metacubians</h3>
								<hr class="invisible" />
								<hr class="blue-underline" />					
							</div>
							<div class="list-row">
								<ul class="people_list list-unstyled" id="people_list">
									
								</ul>
							</div>
						</div>
					</div>
					<!-------------------- VIEW ALL -------------------->
				</div>
			</div>
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
		function smallDeviceFormatting()
		{
			var viewportWidth = $(window).width();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (viewportWidth - containerWidth) / 2;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var columnWidth = Math.floor((containerWidth - horizontalSpacerHeight) / 2);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 2)));
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#careers-section-four .row").css("height", columnHeight);
			$("#careers-section-four .row .content-panel").css("width", columnWidth);
		}
		function largeDeviceFormatting()
		{
			
			var viewportWidth = $(window).width();
			if (viewportWidth > 1280)
			{
				viewportWidth = 1280;
			}
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (1.5625 / 100) * viewportWidth;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var columnWidth = Math.floor((containerWidth - 2 * horizontalSpacerHeight) / 3);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 3)) / 2);
			$(".content-panel").css("width", columnWidth);
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#careers-section-four .row").css("height", columnHeight);
			$("#careers-section-four .row .content-panel").css("width", columnWidth);
		}
		$(document).ready(function()
		{
			if ($(window).width() <= 840)
			{
				smallDeviceFormatting();
			}
			else
			{
				largeDeviceFormatting();
			}
			$(window).resize(function()
			{
				if ($(window).width() <= 840)
				{
					smallDeviceFormatting();
				}
				else
				{
					largeDeviceFormatting();
				}
			});
			loadpeopledata();
			loadnewsdata();
		});
		
		
		/* ---- Button Animation ---- */
		$(".button-ripple").ePulse({bgColor: 'rgba(0, 0, 0, 0.5)', event: 'mousedown'});
		
		function loadpeopledata() {
            $.ajax({
                url: 'include/ourpeople.php?id=top4meta',
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
										content += '<p class="people_deg">' + des + '</p>';
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

		function loadnewsdata() {
		    $.ajax({
		        url: 'include/ourpeople.php?id=careers',
		        type: 'post',
		        data: {},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
		        success: function (data) {
		            var obj = jQuery.parseJSON(data);
		            $('#desktop_desc1').text(obj.table1[0].SHORT_DESCRIPTION);
		            $('#desktop_desc2').text(obj.table3[0].SHORT_DESCRIPTION);
		            $('#desktop_desc3').text(obj.table1[1].SHORT_DESCRIPTION);

					var dateFormat = obj.table3[0].DATE + ' 10:54:50.546';
					var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
					
		            $('#desktop_by1').text(obj.table1[0].BY);
		            $('#desktop_by2').text(dateFormat);
		            $('#desktop_by3').text(obj.table1[1].BY);

		            $('#mobile_desc1').text(obj.table1[0].SHORT_DESCRIPTION);
		            $('#mobile_desc2').text(obj.table3[0].SHORT_DESCRIPTION);
		            $('#mobile_desc3').text(obj.table1[1].SHORT_DESCRIPTION);

		            $('#mobile_by1').text(obj.table1[0].BY);
		            $('#mobile_by2').text(dateFormat);
		            $('#mobile_by3').text(obj.table1[1].BY);

		            $("#mobile_tab1, #desktop_tab1").click(function () {
		                window.location.href = 'blog-inside.php?id=' + obj.table1[0].ID;
		            });

		            $("#mobile_tab2, #desktop_tab2").click(function () {
		                window.location.href = 'news-inside.php?id=' + obj.table3[0].ID;
		            });

		            $("#mobile_tab3, #desktop_tab3").click(function () {
		                window.location.href = 'blog-inside.php?id=' + obj.table1[1].ID;
		            });

		            //charactor limit
		            var minimized_elements2 = $('.desktop .text p.p1').not('.desktop .text p#twitter_text');
		            minimized_elements2.each(function () {
		                $(this).html(
							$(this).text().slice(0, 120) + '...'
						);
		            });

		            var minimized_elements3 = $('.mobile .text p.p1').not('.mobile .text p#twitter_text');
		            minimized_elements3.each(function () {
		                $(this).html(
							$(this).text().slice(0, 70) + '...'
						);
		            });
		        },
		        error: function (e) {

		        }
		    });
		}
		
		
	</script>
	
</body>
</html>