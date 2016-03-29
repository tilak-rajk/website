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
	<title>Metacube Software</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<meta name="description" content="Do you have a vision or an idea? At Metacube, we enable innovators like you around the world to transform ideas into products.">
	<meta name="keywords" content="Metacube software, Product development, Product engineering">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->
	<style type="text/css">
		.no-fouc{
			display:none;  
		}
	</style>
	<link href="assets/css/home-style.css" rel="stylesheet">
	<link href="assets/css/home-style-1280px.css" rel="stylesheet">
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
	<div class="mainNav st-menu" id="menu">
		
	</div>
	<div class="st-pusher no-fouc"> 
		<div class="menu_overlay"></div>
		<div id="metacube-wrapper">
			<!-- Start of Top Header -->
			<div id="metacube-header">
                
            </div>
			<!-------------------- HOMEPAGE IMAGE BANNER -------------------->
			<div id="homepage-image-banner" class="all_banners"></div>
			<!-------------------- HOMEPAGE TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="homepage-text-banner">
					<h3>We help innovators build products</h3>
				</div>
				<!-------------------- HORIZONTAL SPACER -------------------->
				<div class="horizontal-spacer"></div>
				<!-- End of Horizontal Spacer -->
				<div class="container">
					<!-------------------- HOMEPAGE SECTION ONE -------------------->
					<div id="homepage-section-one" class="LEP-animation cssHeight">
						<div class="desktop">
							<div class="row">
								<div class="content-panel" onclick="location.href='landscape.php';" style="cursor: pointer;">
									<div class="process_img_panel">
										<img class="landscapeImg" src="assets/images/landscape-vector.svg" alt="landscape" />
									</div>
									<div class="content_panel_text">
										<div class="h16p">INNOVATION</div>
										<h5>LANDSCAPE</h5>
										<p class="p3">Mobility. Cloud. Big Data. Social
											<br>Informatics. Internet of Things.</p>
									</div>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel" onclick="location.href='engine.php';" style="cursor: pointer;">
									<div class="process_img_panel">
										<img class="engineImg" src="assets/images/engine-vector.svg" alt="engine" />
									</div>
									<div class="content_panel_text">
										<div class="h16p">INNOVATION</div>
										<h5>ENGINE</h5>
										<p class="p3">People. Culture. Belief.
											<br>Philosophy.</p>
									</div>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel" onclick="location.href='process.php';" style="cursor: pointer;">
									<div class="process_img_panel">
										<img class="processImg" src="assets/images/process-vector.svg" alt="process" />
									</div>
									<div class="content_panel_text">
										<div class="h16p">INNOVATION</div>
										<h5>PROCESS</h5>
										<p class="p3">Rapid. Incremental. Adaptive.
											<br>Collaborative. Automated.
											<br>Timeboxed.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mobile">
							<div id='mobile-carousel' class='carousel slide' data-ride='carousel'>
								<div class='carousel-outer'>
									<div class='carousel-inner'>
										<div class='item active'>
											<div class="row">
												<div class="content-panel" onclick="location.href='landscape.php';" style="cursor: pointer;">
													<div class="process_img_panel">
														<img class="landscapeImg" src="assets/images/landscape-vector.svg" alt="landscape" />
													</div>
													<div class="content_panel_text">
														<div class="h16p">INNOVATION</div>
														<h5>LANDSCAPE</h5>
														<p class="p3">Mobility. Cloud. Big Data. Social
															<br>Informatics. Internet of Things.</p>
													</div>
												</div>
											</div>
										</div>
										<div class='item'>
											<div class="row">
												<div class="content-panel" onclick="location.href='engine.php';" style="cursor: pointer;">
													<div class="process_img_panel">
														<img class="engineImg" src="assets/images/engine-vector.svg" alt="engine" />
													</div>
													<div class="content_panel_text">
														<div class="h16p">INNOVATION</div>
														<h5>ENGINE</h5>
														<p class="p3">People. Culture. Belief.
															<br>Philosophy.</p>
													</div>
												</div>
											</div>
										</div>
										<div class='item'>
											<div class="row">
												<div class="content-panel" onclick="location.href='process.php';" style="cursor: pointer;">
													<div class="process_img_panel">
														<img class="processImg" src="assets/images/process-vector.svg" alt="process" />
													</div>
													<div class="content_panel_text">
														<div class="h16p">INNOVATION</div>
														<h5>PROCESS</h5>
														<p class="p3">Rapid. Incremental. Adaptive.
															<br>Collaborative. Automated.
															<br>Timeboxed.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Indicators -->
								<ol class='carousel-indicators mCustomScrollbar'>
									<li data-target='#mobile-carousel' data-slide-to='0' class='active'></li>
									<li data-target='#mobile-carousel' data-slide-to='1'></li>
									<li data-target='#mobile-carousel' data-slide-to='2'></li>
								</ol>
							</div>
						</div>
						<div class="ipad">
							<div id='ipad-carousel' class='carousel slide' data-ride='carousel'>
								<div class='carousel-outer'>
									<div class='carousel-inner'>
										<div class='item active'>
											<div class="row" onclick="location.href='landscape.php';" style="cursor: pointer;">
												<table>
													<tr>
														<td>
															<img class="landscapeImg" src="assets/images/landscape-vector.svg" alt="landscape" />
														</td>
														<td>
															<div class="h16p">INNOVATION</div>
															<h5>LANDSCAPE</h5>
															<p class="p3">Mobility. Cloud. Big Data. Social
																<br>Informatics. Internet of Things.</p>
														</td>
													</tr>
												</table>
											</div>
										</div>
										<div class='item'>
											<div class="row" onclick="location.href='engine.php';" style="cursor: pointer;">
												<table>
													<tr>
														<td>
															<img class="engineImg" src="assets/images/engine-vector.svg" alt="engine" />
														</td>
														<td>
															<div class="h16p">INNOVATION</div>
															<h5>ENGINE</h5>
															<p class="p3">People. Culture. Belief.
																<br>Philosophy.</p>
														</td>
													</tr>
												</table>
											</div>
										</div>
										<div class='item'>
											<div class="row" onclick="location.href='process.php';" style="cursor: pointer;">
												<table>
													<tr>
														<td>
															<img class="processImg" src="assets/images/process-vector.svg" alt="process" />
														</td>
														<td>
															<div class="h16p">INNOVATION</div>
															<h5>PROCESS</h5>
															<p class="p3">Rapid. Incremental. Adaptive.
																<br>Collaborative. Automated.
																<br>Timeboxed.</p>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- Indicators -->
								<ol class='carousel-indicators mCustomScrollbar'>
									<li data-target='#ipad-carousel' data-slide-to='0' class='active'></li>
									<li data-target='#ipad-carousel' data-slide-to='1'></li>
									<li data-target='#ipad-carousel' data-slide-to='2'></li>
								</ol>
							</div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- HOMEPAGE SECTION TWO -------------------->
					<div id="homepage-section-two" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/how-we-partner-with-you.jpg" alt="" /> 
						</div>
						<div class="inner-content mHeadingAll">
							<h5>What would you like to build today?</h5>
							<hr class="invisible">
							<hr class="white-underline">
							<p class="p3 desktop">Have an idea for a product? Or do you already have a product and wish to extend your engineering team? In either case, we could be a suitable partner for you.</p>
							<p class="p3 mobile">Have an idea for a product?
								<br>Or do you already have a product and wish to extend your engineering team? In either case, we could be a suitable partner for you.</p>
							<button class="b3 button-ripple" onclick="setTimeout(function () {window.location.href='about.php#open-about-section'},500);" style="cursor: pointer;"><span class="btn-text">HOW WE PARTNER WITH YOU</span></button>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- HOMEPAGE SECTION THREE -------------------->
					<div id="homepage-section-three" class="mini-sections-color">
						<div class="desktop">
							<div class="row">
								<div id="panel1" class="content-panel feature-image mainContP" style="position:relative">
									<div class="mainContDIV">
										<img class="features mainCont smallCont" id="HoverTarget1" src="" alt="Feature 1 Image" />
									</div>
									<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;" />
								</div>
								<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>
								<div id="panel2" class="content-panel connectedHover" data-target="1">
									<table>
										<tr class="title">
											<td>
												<h6 id="impact_title"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="impact_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="impact_by"></p>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel twitter" id="desktop_twitter">
									<table>
										<tr class="title">
											<td>
												<image  src="assets/images/icons/twitter-white.svg"  />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="twitter_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="screen_name"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer">
							</div>
							<div class="row">
								<div id="panel3" class="content-panel feature-image mainContP" style="position:relative">
									<div class="mainContDIV">
										<img class="features mainCont smallCont" id="HoverTarget2" src="" alt="Feature 1 Image" />
									</div>
									<img src="assets/images/top-arrow.png" style="position:absolute;bottom:0;left:5%;width:3.75vmin;height:auto;" />
								</div>
								<div class="column-spacer"></div>
								<div id="panel4" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="ideas1_title"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="ideas1_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="ideas1_by"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div id="panel5" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="news_title"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="news_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="news_by"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-1column-spacer"></div>
							<div class="row">
								<div id="panel6" class="content-panel connectedHover" data-target="2">
									<table>
										<tr class="title">
											<td>
												<h6 id="engine_title"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="engine_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="engine_by"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div id="panel7" class="content-panel connectedHover" data-target="3">
									<table>
										<tr class="title">
											<td>
												<h6>FEATURED PROFILE</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="career_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="career_by"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>
								<div id="panel8" class="content-panel feature-image mainContP" style="position:relative">
									<div class="mainContDIV">
										<img class="features mainCont smallCont" id="HoverTarget3" src="" alt="Feature 1 Image" />
									</div>
									<img src="assets/images/right-arrow.png" style="position:absolute;left:0;top:5%;height:3.75vmin;width:auto;" />
								</div>
							</div>
						</div>
						<div class="mobile">
							<div class="row">
								<div id="panel1_mobile" class="content-panel feature-image" style="position:relative">
									<img id="HoverTarget1_mobile" class="features" src="" alt="Feature 1 Image" />
									<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;" />
								</div>
								<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>
								<div id="panel2_mobile" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="impact_title_mobile"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="impact_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="impact_by_mobile"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
							<div class="row">
								<div id="panel3_mobile" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="engine_title_mobile"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="engine_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="engine_by_mobile"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>
								<div id="panel6_mobile" class="content-panel feature-image" style="position:relative">
									<img id="HoverTarget2_mobile" class="features" src="" alt="Feature 1 Image" />
									<img src="assets/images/right-arrow.png" style="position:absolute;left:0;top:5%;height:3.75vmin;width:auto;" />
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
							<div class="row">
								<div id="panel7_mobile" class="content-panel feature-image" style="position:relative">
									<img id="HoverTarget3_mobile" class="features" src="" alt="Feature 1 Image" />
									<img src="assets/images/left-arrow.png" style="position:absolute;right:0;top:5%;height:3.75vmin;width:auto;" />
								</div>
								<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>
								<div id="panel8_mobile" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6>FEATURED PROFILE</h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="career_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="career_by_mobile"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
							<div class="row">
								<div class="content-panel twitter" id="mobile_twitter">
									<table>
										<tr class="title">
											<td><image src="assets/images/icons/twitter-white.svg" /></td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="twitter_mobile_text"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="twitter_mobile_by"></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div id="panel5_mobile" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="news_title_mobile"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="news_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="news_by_mobile"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer">
							</div>
							<div class="row">
								<div id="panel4_mobile" class="content-panel">
									<table>
										<tr class="title">
											<td>
												<h6 id="ideas1_title_mobile"></h6>
												<hr class="invisible" />
												<hr class="grey-underline" />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="ideas1_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="ideas1_by_mobile"></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-------------------- MORE CONTENT -------------------->
					<!-- 
					<div id="more-content">
						<div class="button">
							<button class="b1 button--antiman" onclick="location.href='blog.php';" style="cursor: pointer;"><span class="btn-text">more</span></button> 
						</div>
					</div>
					-->
					<!-------------------- HOMEPAGE SECTION FOUR -------------------->
					<div class="horizontal-spacer"></div>
					<div id="homepage-section-four">
						<div class="desktop">
							<table class="title">
								<tr>
									<td>
										<h4>Join our team</h4>
									</td>
								</tr>
							</table>
							<table class="content">
								<tr>
									<td class="heading">
										<span class="h18p">STUDENTS & GRADUATES</span>
									</td>
									<td class="heading">
										<span class="h18p">EXPERIENCED PROFESSIONALS</span>
									</td>
								</tr>
								<tr>
									<td class="image">
										<img src="assets/images/students.svg" alt="students and graduates" />
									</td>
									<td class="image">
										<img src="assets/images/professionals.svg" alt="experienced professionals" />
									</td>
								</tr>
								<tr>
									<td class="text">
										<p class="p3">We are looking for youngsters who are brimming with energy, ideas and zeal to learn. We are coming to your college.</p>
									</td>
									<td class="text">
										<p class="p3">Want to join a team of like-minded technocrats who value creativity, excellence and freedom?</p>
									</td>
								</tr>
								<tr>
									<td class="button">
										<button class="b3 button-ripple" onclick="setTimeout(function (){window.location.href='careers-students.php'},500);" style="cursor: pointer;">
											<span class="btn-text">SEE CAMPUS DRIVE DATES</span>
										</button>
									</td>
									<td class="button">
										<button class="b3 button-ripple" onclick="setTimeout(function (){window.location.href='careers-professionals.php'},500);" style="cursor: pointer;">
											<span class="btn-text">SEE OPPORTUNITIES</span>
										</button>
									</td>
								</tr>
							</table>
						</div>
						<div class="mobile">
							<table class="title">
								<tr>
									<td>
										<h4>Join our team</h4>
									</td>
								</tr>
							</table>
							<table class="content">
								<tr>
									<td class="heading">
										<span class="h18p">STUDENTS & GRADUATES</span>
									</td>
								</tr>
								<tr>
									<td class="image">
										<img src="assets/images/students.svg" alt="students and graduates" />
									</td>
								</tr>
								<tr>
									<td class="text">
										<p class="p3">We are looking for youngsters who are brimming with energy, ideas and zeal to learn. We are coming to your college.</p>
									</td>
								</tr>
								<tr>
									<td class="button">
										<button class="b3 button-ripple" onclick="location.href='careers-students.php';" style="cursor: pointer;">
											<span class="btn-text">see campus drive dates</span>
										</button>
									</td>
								</tr>
							</table>
							<table class="content">
								<tr>
									<td class="heading">
										<span class="h18p">EXPERIENCED PROFESSIONALS</span>
									</td>
								</tr>
								<tr>
									<td class="image">
										<img src="assets/images/professionals.svg" alt="experienced professionals" />
									</td>
								</tr>
								<tr>
									<td class="text">
										<p class="p3">We are looking for youngsters who are brimming with energy, ideas and zeal to learn. We are coming to your college.</p>
									</td>
								</tr>
								<tr>
									<td class="button">
										<button class="b3 button-ripple" onclick="location.href='careers-professionals.php';" style="cursor: pointer;">
											<span class="btn-text">SEE opportunities</span>
										</button>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<!-------------------- HORIZONTAL SPACER -------------------->
				<div class="horizontal-spacer"></div>
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
	<script src="assets/js/jquery-epulse.min.js"></script>
	<script src="assets/js/jquery.matchHeight-min.js"></script>
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
    <script src="assets/js/jquery-dateFormat.min.js"></script>
	<script>
		function smallDeviceFormatting()
		{
			$("#mobile-carousel, #ipad-carousel").swiperight(function()
			{
				$(this).carousel('prev');
			});
			$("#mobile-carousel, #ipad-carousel").swipeleft(function()
			{
				$(this).carousel('next');
			});
			var viewportWidth = $(window).width();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (viewportWidth - containerWidth) / 2;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var columnWidth = Math.floor((containerWidth - horizontalSpacerHeight) / 2);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 2)));
			$("#homepage-section-one .mobile .content-panel").css("width", containerWidth);
			$("#homepage-section-one .ipad .row").css("height", (containerWidth * 380 / 642));
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#homepage-section-three .row").css("height", columnHeight);
			$("#homepage-section-three .row .content-panel").css("width", columnWidth);
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
			$(".horizontal-1column-spacer").css("height", horizontalSpacerHeight);
			$(".horizontal-1column-spacer").css("width", columnWidth);
			$(".content-panel").css("width", columnWidth);
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#homepage-section-three .row").css("height", columnHeight);
			$("#homepage-section-three .row .content-panel").css("width", columnWidth);
		}
		$(document).ready(function(){
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
			twitter ();
			setInterval(function(){ twitter(); }, 5000);
			adlets ();
			
			$("#panel1, #panel2, #panel3, #panel4, #panel6, #panel1_mobile, #panel2_mobile, #panel3_mobile, #panel4_mobile, #panel6_mobile").click(function(){
				var id = $(this).attr('aria-id');
				window.location.href = 'blog-inside.php?id='+id;
			});
			
			$("#panel5, #panel5_mobile").click(function(){
				var id = $(this).attr('aria-id');
				window.location.href = 'news-inside.php?id='+id;
			});
			
			$("#panel7, #panel8, #panel7_mobile, #panel8_mobile").click(function(){
				var id = $(this).attr('aria-id');
				window.location.href = 'people-inside.php?id='+id;
			});
			
			
			//match height 
			$(function() {
				$('#engine-section-two .desktop .row, #engine-section-two .desktop .p3, #homepage-section-one .desktop .content-panel').matchHeight();
			});
			
			
		});
		//ripple effects
		$(".button-ripple").ePulse(
		{
			bgColor: 'rgba(0, 0, 0, 0.5)',
			event: 'mousedown'
		});
		
		function twitter () {
			$.ajax({
				dataType: "json",
				url: 'admin/tweetconfig.txt',
				data: {},
				success: function(data){
					var item = data[Math.floor(Math.random()*data.length)];
					
					$("#twitter_text").animate({'opacity': 0}, 500, function () {
						var minimized_elements = $(this).text(item.text);
						minimized_elements.each(function(){          
							$(this).html(
								$(this).text().slice(0,120)+'...'
							);
						});
					}).animate({'opacity': 1}, 500);
					
					$("#screen_name").animate({'opacity': 0}, 500, function () {
						$(this).text('@'+item.user.screen_name);
					}).animate({'opacity': 1}, 500);
					
					$("#desktop_twitter").attr('onclick', 'window.open("https://twitter.com/Metacube_Jaipur/status/' + item.id_str + '", "_blank")');
					$("#mobile_twitter").attr('onclick', 'window.open("https://twitter.com/Metacube_Jaipur/status/' + item.id_str + '", "_blank")');
					
					$("#twitter_mobile_text").animate({'opacity': 0}, 500, function () {
						var minimized_elements = $(this).text(item.text);
						minimized_elements.each(function(){          
							$(this).html(
								$(this).text().slice(0,70)+'...'
							);
						});
					}).animate({'opacity': 1}, 500);
					
					$("#twitter_mobile_by").animate({'opacity': 0}, 500, function () {
						$(this).text('@'+item.user.screen_name);
					}).animate({'opacity': 1}, 500);
					
				
				}
			});
		}
		
		function adlets () {
			$.ajax({
				dataType: "json",
				url: 'include/home.php',
				data: {},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
				success: function(data){
					$("#impact_title").text(data.IMPACT[0].TYPE);
					$("#impact_text").text(data.IMPACT[0].SHORT_DESCRIPTION);
					$("#impact_by").text(data.IMPACT[0].BY);
					$("#HoverTarget1").attr('src','uploads/' + data.IMPACT[0].IMAGE_PATH);
					$("#panel1, #panel2").attr('aria-id',data.IMPACT[0].ID);
					
					
					$("#impact_title_mobile").text(data.IMPACT[0].TYPE);
					$("#impact_text_mobile").text(data.IMPACT[0].SHORT_DESCRIPTION);
					$("#impact_by_mobile").text(data.IMPACT[0].BY);
					$("#HoverTarget1_mobile").attr('src','uploads/' + data.IMPACT[0].IMAGE_PATH);
					$("#panel1_mobile, #panel2_mobile").attr('aria-id',data.IMPACT[0].ID);
					
					
					$("#ideas1_title").text(data.IMPACT[1].TYPE);
					$("#ideas1_text").text(data.IMPACT[1].SHORT_DESCRIPTION);
					$("#ideas1_by").text(data.IMPACT[1].BY);
					$("#panel4").attr('aria-id',data.IMPACT[1].ID);
					
					$("#ideas1_title_mobile").text(data.IMPACT[1].TYPE);
					$("#ideas1_text_mobile").text(data.IMPACT[1].SHORT_DESCRIPTION);
					$("#ideas1_by_mobile").text(data.IMPACT[1].BY);
					$("#panel4_mobile").attr('aria-id',data.IMPACT[1].ID);
					
					var dateFormat = data.NEWS[0].DATE + ' 10:54:50.546';
					var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");

					var titl = data.NEWS[0].TYPE;
					if (titl == '1') { titl = 'News' }
					if (titl == '2') { titl = 'Initiative' }
					if (titl == '3') { titl = 'Events' }
					
					$("#news_title").text(titl);
					$("#news_text").text(data.NEWS[0].SHORT_DESCRIPTION);
					$("#news_by").text(dateFormat);
					$("#panel5").attr('aria-id',data.NEWS[0].ID);
					
					$("#news_title_mobile").text(titl);
					$("#news_text_mobile").text(data.NEWS[0].SHORT_DESCRIPTION);
					$("#news_by_mobile").text(dateFormat);
					$("#panel5_mobile").attr('aria-id',data.NEWS[0].ID);
					
					
					$("#engine_title").text(data.ENGINE[0].TYPE);
					$("#engine_text").text(data.ENGINE[0].SHORT_DESCRIPTION);
					$("#engine_by").text(data.ENGINE[0].BY);
					$("#HoverTarget2").attr('src','uploads/' + data.ENGINE[0].IMAGE_PATH);
					$("#panel3, #panel6").attr('aria-id',data.ENGINE[0].ID);
					
					$("#engine_title_mobile").text(data.ENGINE[0].TYPE);
					$("#engine_text_mobile").text(data.ENGINE[0].SHORT_DESCRIPTION);
					$("#engine_by_mobile").text(data.ENGINE[0].BY);
					$("#HoverTarget2_mobile").attr('src','uploads/' + data.ENGINE[0].IMAGE_PATH);
					$("#panel3_mobile, #panel6_mobile").attr('aria-id',data.ENGINE[0].ID);
					
					
					$("#career_text").text(data.CAREER[0].DESCRIPTION.substring(0,60));
					$("#career_by").text(data.CAREER[0].NAME);
					$("#HoverTarget3").attr('src','uploads/' + data.CAREER[0].THUMB_IMAGE_PATH);
					$("#panel7, #panel8").attr('aria-id',data.CAREER[0].ID);
					
					$("#career_text_mobile").text(data.CAREER[0].DESCRIPTION.substring(0,60));
					$("#career_by_mobile").text(data.CAREER[0].NAME);
					$("#HoverTarget3_mobile").attr('src','uploads/' + data.CAREER[0].THUMB_IMAGE_PATH);
					$("#panel7_mobile, #panel8_mobile").attr('aria-id',data.CAREER[0].ID);
					
					//charactor limit
					var minimized_elements2 = $('.desktop .text p.p1').not('.desktop .text p#twitter_text');
					minimized_elements2.each(function(){          
						$(this).html(
							$(this).text().slice(0,120)+'...' 
						);
					}); 
					
					var minimized_elements3 = $('.mobile .text p.p1').not('.mobile .text p#twitter_text');
					minimized_elements3.each(function(){          
						$(this).html(
							$(this).text().slice(0,70)+'...' 
						);
					}); 
				}
			});
		}
	</script>
	
</body>
</html>