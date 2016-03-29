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
	<title>Metacube | Innovation Engine</title>
	<meta name="description" content="At Metacube, we consider our people to the major drivers of innovation. Hence, we have built a culture of innovation that helps them learn, grow and innovate. We are truly a fun place to work.">
	<meta name="keywords" content="Metacube culture, Working at Metacube">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/engine-style.css" rel="stylesheet">
	<link href="assets/css/engine-style-1280px.css" rel="stylesheet">
	<link href="assets/css/font-styles.css" rel="stylesheet">
	<link href="assets/css/font-styles-1280px.css" rel="stylesheet">
	<link href="assets/css/font-layouts.css" rel="stylesheet">
	<link href="assets/css/font-layouts-1280px.css" rel="stylesheet">
	<link href="assets/css/layout-style.css" rel="stylesheet">
	<link href="assets/css/media-queries.css" rel="stylesheet">
	<link href="assets/css/interactions.css" rel="stylesheet">
	<!-- <link href="assets/js/jquery.bxslider.css" rel="stylesheet"> -->
	<!--custom css-->
	<script src="assets/js/ie-emulation-modes-warning.js"></script>
	<link href="http://cloud.webtype.com/css/c2e40f9c-55d1-44f9-b712-04ac92552b23.css" rel="stylesheet" type="text/css" />
	<style>
		.ourPepoleConatiner {
			background: #e7e5e5;
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
			<!-------------------- ENGINE IMAGE BANNER -------------------->
			<div id="engine-image-banner" class="all_banners">
				<div class="text">
					<h2>INNOVATION</h2>
					<h1>ENGINE</h1>
					<p class="p2">We are all about our people.</p>
				</div>
				<div class="svg-image">
					<img src="assets/images/engine-vector.svg" alt="Culture of Innovation at Metacube" />
				</div>
			</div>
			<!-------------------- ENGINE TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="engine-text-banner">
					<div class="text">
						<h3>"It is not the machines that win you the war, it is the men behind those machines."</h3>
						<p class="p3">We are a community of skillful and creative technology artisans who are passionate about building innovative solutions for complex challenges, working collaboratively as an extended team of our customers.</p>
					</div>
				</div>
				<div class="container" >
					<!-------------------- ENGINE SECTION ONE -------------------->
					<div id="engine-section-one" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/engine/metacubian_1025.jpg" alt="" />  
						</div>
						<div class="inner-content">
							<h5>WHAT MAKES A METACUBIAN?</h5>
							<hr class="invisible" />
							<hr class="white-underline" />
							<p class="p3">We are constantly on the lookout for the best talent. If you are a talented engineer with a passion for creating technology enabled solutions that add value not just to enterprises, but also the society at large, you belong in Metacube.</p>
							<button class="b3 button-ripple OpenPopUp" data-target="1"><span class="btn-text">our hiring philosophy</span> </button>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- ENGINE SECTION TWO -------------------->
					<div id="engine-section-two" class="no_border_btn">
						<div class="desktop">
							<div class="row">
								<div class="content-panel">
									<table>
										<tr class="image-text image-text1 bgMove">
											<td>
												<div style="height:100%;display:table">
													<div class="h30p">Un pour tous,
														<br/>tous pour un</div>
												</div>
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p3">Team Metacube shares the camaraderie of the Three Musketeers, ‘one for all, all for one’. Our people are nurtured in an environment that promotes sharing, transparency, mutual respect and collective ownership. </p>
											</td>
										</tr>
										<tr class="button">
											<td>
												<button class="b3 OpenPopUp" data-target="2"><span class="btn-text">OUR CULTURE OF INNOVATION</span> <span class="side-arrow"></span></button>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel">
									<table>
										<tr class="image-text image-text2 bgMove">
											<td>
												<div style="height:100%;display:table">
													<div class="h30p">A learning
														<br/>organisation</div>
												</div>
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p3">A typical Metacubian not only enjoys learning new things, but finds delight in sharing his learning with others through presentations, one-on-one sessions, and informal discussions over cups of coffee. We take greater pride in being coaches or mentors than being managers.</p>
											</td>
										</tr>
										<tr class="button">
											<td>
												<button class="b3 OpenPopUp" data-target="3"><span class="btn-text">our roots in education</span> <span class="side-arrow"></span></button>
											</td>
										</tr>
									</table>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel">
									<table>
										<tr class="image-text image-text3 bgMove">
											<td>
												<div style="height:100%;display:table">
													<div class="h30p">We adapt to
														<br/>customer DNA</div>
												</div>
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p3">Our raison d'être is our customers. We believe in long term partnerships rather than one-off projects. While we bring our experience with technology and processes to the table, we believe in fully adapting to the customer DNA so that we can work seamlessly with their team, philosophy and goals. </p>
											</td>
										</tr>
										<tr class="button">
											<td>
												<button class="b3 OpenPopUp" data-target="4"><span class="btn-text">OUR COLLABORATIVE MODEL</span> <span class="side-arrow"></span></button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="mobile">
							<div id='mobile-carousel' class='carousel slide' data-ride='carousel'>
								<div class='carousel-outer'>
									<div class='carousel-inner'>
										<div class='item active'>
											<div class="row">
												<div class="content-panel">
													<table>
														<tr class="image-text image-text1">
															<td>
																<div style="height:100%;display:table">
																	<div class="h30p">Un pour tous,
																		<br/>tous pour un</div>
																</div>
															</td>
														</tr>
														<tr class="text">
															<td>
																<p class="p3">Team Metacube shares the camaraderie of the Three Musketeers, ‘one for all, all for one’. Our people are nurtured in an environment that promotes sharing, transparency, mutual respect and collective ownership. </p>
															</td>
														</tr>
														<tr class="button">
															<td>
																<button class="b3 OpenPopUp" data-target="2"><span class="btn-text">OUR CULTURE OF INNOVATION</span> <span class="side-arrow"></span></button>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class='item'>
											<div class="row">
												<div class="content-panel">
													<table>
														<tr class="image-text image-text2">
															<td>
																<div style="height:100%;display:table">
																	<div class="h30p">A learning
																		<br/>organisation</div>
																</div>
															</td>
														</tr>
														<tr class="text">
															<td>
																<p class="p3">A typical Metacubian not only enjoys learning new things, but finds delight in sharing his learning with others through presentations, one-on-one sessions, and informal discussions over cups of coffee. We take greater pride in being coaches or mentors than being managers.</p>
															</td>
														</tr>
														<tr class="button">
															<td>
																<button class="b3 OpenPopUp" data-target="3"><span class="btn-text">our roots in education</span> <span class="side-arrow"></span></button>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class='item'>
											<div class="row">
												<div class="content-panel">
													<table>
														<tr class="image-text image-text3">
															<td>
																<div style="height:100%;display:table">
																	<div class="h30p">We adapt to
																		<br/>customer DNA</div>
																</div>
															</td>
														</tr>
														<tr class="text">
															<td style="">
																<p class="p3">Our raison d'être is our customers. We believe in long term partnerships rather than one-off projects. While we bring our experience with technology and processes to the table, we believe in fully adapting to the customer DNA so that we can work seamlessly with their team, philosophy and goals. </p>
															</td>
														</tr>
														<tr class="button">
															<td>
																<button class="b3 OpenPopUp" data-target="4"><span class="btn-text">OUR COLLABORATIVE MODEL</span><span class="side-arrow"></span></button>
															</td>
														</tr>
													</table>
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
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- ENGINE SECTION THREE -------------------->
					<div id="engine-section-three">
						<div class="desktop">
							<div class="row">
								<div class="content-panel twitter OpenPopUp" data-target="5">
									<div class="engine_small_Section">
										<span class="h30p smt">All work and <br />no play? Not at all!</span>
										<button class="b3 columnBtn smt-bottom"><span class="btn-text">Why we believe in having fun</span> <span class="side-arrow"></span></button>
									</div>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel feature-image">
									
									<div id='mfeatureDesktop' class='carousel slide' data-ride='carousel'>
										<div class='carousel-outer'>
											<div class='carousel-inner' id="image_gallery">
												<!--<div class='item active'>
													<img class="features" src="assets/images/engine/engine-random3.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">Indoor Gym</span>
												</div>
												<div class='item'>
													<img class="features" src="assets/images/engine/engine-random1.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">Kid’s Area</span>
												</div>
												<div class='item'>
													<img class="features" src="assets/images/engine/engine-random2.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">TT Rooms</span>
												</div>-->
											</div>
										</div>
									</div>
									
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel twitter" style="width: 380px;">
									<table>
										<tbody><tr class="title">
											<td>
												<image src="assets/images/icons/twitter-white.svg"  />
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
									</tbody></table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer">
							</div>
							<div class="row">
								<div class="content-panel feature-image">
									<img class="features instagram_01" src="" alt="Feature 1 Image" />
									<span class="h30p smt smt-bottom instagram_01_name"></span>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel feature-image">
									<img class="features instagram_02" src="" alt="Feature 1 Image" />
									<span class="h30p smt smt-bottom instagram_02_name"></span>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel feature-image">
									<img class="features instagram_03" src="" alt="Feature 1 Image"   />
									<span class="h30p smt smt-bottom instagram_03_name"></span>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
						</div>
						<div class="mobile">
							<div class="row">
								<div class="content-panel twitter OpenPopUp" data-target="5">
									<div class="engine_small_Section">
										<span class="h30p smt">All work and <br />no play? Not at all!</span>
										<button class="b3 columnBtn smt-bottom"><span class="btn-text">Why we believe in having fun</span> <!-- <span class="side-arrow"></span> --></button>
									</div>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel twitter" style="width: 380px;">
									<table>
										<tbody><tr class="title">
											<td>
												<image  src="assets/images/icons/twitter-white.svg"  />
											</td>
										</tr>
										<tr class="text">
											<td>
												<p class="p1" id="twitter_text_mobile"></p>
											</td>
										</tr>
										<tr class="subtext">
											<td>
												<p class="p4" id="screen_name_mobile"></p>
											</td>
										</tr>
									</tbody></table>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
							<!-- End of Horizontal Spacer -->
							<div class="row">
								<div class="content-panel feature-image">
									<div id='mfeatureDesktop' class='carousel slide' data-ride='carousel'>
										<div class='carousel-outer'>
											<div class='carousel-inner' id="engine_gallery">
												<!--<div class='item active'>
													<img class="features" src="assets/images/engine/engine-random3.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">Indoor Gym</span>
												</div>
												<div class='item'>
													<img class="features" src="assets/images/engine/engine-random1.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">Kid’s Area</span>
												</div>
												<div class='item'>
													<img class="features" src="assets/images/engine/engine-random2.jpg" alt="Feature 1 Image" />
													<span class="h30p smt smt-bottom" style="z-index:3">TT Rooms</span>
												</div>-->
											</div>
										</div>
									</div>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel feature-image">
									<div class="content-panel feature-image">
										<img class="features instagram_01" src="" alt="Feature 1 Image" />
										<span class="h30p smt smt-bottom instagram_01_name"></span>
									</div>
								</div>
							</div>
							<!-- Horizontal Spacer -->
							<div class="horizontal-spacer"></div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="row">
								<div class="content-panel feature-image">
									<img class="features instagram_02" src="" alt="Feature 1 Image"  />
									<span class="h30p smt smt-bottom instagram_02_name"></span>
								</div>
								<div class="column-spacer"></div>
								<div class="content-panel feature-image">
									<img class="features instagram_03" src="" alt="Feature 1 Image" />
									<span class="h30p smt smt-bottom instagram_03_name"></span>
								</div>
							</div>
							<!-------------------- HORIZONTAL SPACER -------------------->
							<div class="horizontal-spacer"></div>
						</div>
					</div>
					<!-------------------- ENGINE SECTION FOUR -------------------->
					<div id="engine-section-four">
						<div class="title">
							<h4>We are a responsible organization</h4>
						</div>
						<div class="desktop">
							<div class="content">
								<table>
									<tr>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);">
											<img src="assets/images/engine/org-logo1.jpg" alt="" />
										</td>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);">
											<img src="assets/images/engine/org-logo2.jpg" alt="" />
										</td>

										<th rowspan="3" width="50%">
											<p class="p3">Being humane is at the very core of our psyche, and we aspire to create a shared journey for all Metacubians that will help us connect with this core. Social responsibility is a key vehicle in this journey, as we move beyond financial contributions to active involvement in creating a better future for humanity. </p>
											<button class="b3 button-ripple OpenPopUp" data-target="6"><span class="btn-text">OUR CSR APPROACH</span><span class="side-arrow"></span></button>
										</th>
									</tr>
									<tr>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);">
											<img style="width:50%;height:auto;" src="assets/images/engine/org-logo3.jpg" alt="" />
										</td>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);">
											<div style="width:100%;height:100px;display:table;text-align:center;">
												<p class="p4" style="display:table-cell;vertical-align:middle">Swami Bhumanand
													<br/>Netra Chikitsalaya </p>
											</div>
										</td>
									</tr>
									<tr>
										<td style="border-right:1px solid rgba(0,0,0,0.22);">
											<div style="width:100%;height:100px;display:table;text-align:center;">
												<p class="p4" style="display:table-cell;vertical-align:middle">Bhartiya Kushth
													<br/>Niwarak Sangh</p>
											</div>
										</td>
										<td style="border-right:1px solid rgba(0,0,0,0.22);">
											<div style="width:100%;height:100px;display:table;text-align:center;">
												<p class="p4" style="display:table-cell;vertical-align:middle">REGULAR BLOOD
													<br/>DONATION CAMPS</p>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="mobile">
							<div class="content">
								<table>
									<tr>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);border-top:1px solid rgba(0,0,0,0.22);">
											<img src="assets/images/engine/org-logo1.jpg" alt="" />
										</td>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-right:1px solid rgba(0,0,0,0.22);border-top:1px solid rgba(0,0,0,0.22);">
											<img src="assets/images/engine/org-logo2.jpg" alt="" />
										</td>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);border-top:1px solid rgba(0,0,0,0.22);">
											<img src="assets/images/engine/org-logo3.jpg" alt="" />
										</td>
									</tr>
									<tr>
										<td style="border-right:1px solid rgba(0,0,0,0.22);border-bottom:1px solid rgba(0,0,0,0.22);text-align:center;">
											<div style="width:100%;">
												<p class="p4">Swami Bhumanand
													<br/>Netra Chikitsalaya </p>
											</div>
										</td>
										<td style="border-right:1px solid rgba(0,0,0,0.22);border-bottom:1px solid rgba(0,0,0,0.22);text-align:center;">
											<div style="width:100%;">
												<p class="p4" >Bhartiya Kushth
													<br/>Niwarak Sangh</p>
											</div>
										</td>
										<td style="border-bottom:1px solid rgba(0,0,0,0.22);text-align:center;">
											<div style="width:100%;">
												<p class="p4" >REGULAR BLOOD
													<br/>DONATION CAMPS</p>
											</div>
										</td>
									</tr>
									<tr>
										<th colspan="3" width="100%">
											<p class="p3">Being humane is at the very core of our psyche, and we aspire to create a shared journey for all Metacubians that will help us connect with this core. Social responsibility is a key vehicle in this journey, as we move beyond financial contributions to active involvement in creating a better future for humanity. </p>
											<button class="b3 button-ripple OpenPopUp" data-target="6"><span class="btn-text">OUR CSR APPROACH</span><span class="side-arrow"></span></button>
										</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<!-------------------- ENGINE SECTION FIVE -------------------->
					<div class="ourPepoleConatiner" id="engine-section-five">
					<div class="container tac" style="width:100%;margin:0">
						<div class="text coommonHeadingSpace">
							<h3>Our People</h3>
							<hr class="invisible">
							<hr class="blue-underline">					
						</div>
						
						<div class="list-row">
							<ul class="people_list list-unstyled" id="people_list">
								
							</ul>
						</div>
					</div>
				</div>
				</div>

				
				<!-------------------- VIEW ALL -------------------->
				<div id="view-all">
					<div class="button">
						<button class="b1 button--antiman" onclick="location.href='people.html';" style="cursor: pointer;"><span class="btn-text">view all</span>
						</button>
					</div>
				</div>
				<!-------------------- FOOTER -------------------->
				<div id="metacube-footer">
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- pop up -->
	<div class="popUp3_col" id="popUp1">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">What makes a Metacubian?</div>
				<p class="p3">Our hiring philosophy</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">We are constantly looking for people who are talented, and are passionate about working with some of the brightest minds around the world leveraging technology to create solutions that add value to the enterprises and society at large.</p>
						
						<p class="p3">We know hen’s teeth are rare, that’s why we do everything to search through the high and low for the very best people. 
						</p>	
						<p class="p3"><span class="text_bolder">Strong conceptual foundations is the key</span>
							Our hiring to a large extent is technology agnostic. We are looking for people with strong conceptual foundations in software engineering covering areas like programming paradigms (imperative, object oriented, functional, aspect oriented), data structures, algorithms, concurrency models, design principles and patterns, databases, development life cycles and software quality assurance.
						</p>
						
						<p class="p3"><span class="text_bolder">Expertise on a technology stack</span> While concepts play a critical role in our assessment process, we also look for how good is a person when it comes to hands on development with a technology stack. How does he look at a particular technology? Is technology for him just a collection of details, or is he able to correlate it back to his conceptual foundations? Does he have the capability to translate his knowledge of one technology stack to another technology stack?
						</p>
						
						<p class="p3"><span class="text_bolder">Learnability</span>
							With the rapid pace of innovation in software industry it is impossible to find a person who is “all knowing”; and at the same time an organization cannot afford its engineers becoming obsolete every couple of years. 
						</p>
						<p class="p3">Hence our emphasis is also on finding people who can continuously build on their existing foundations, and assimilate new concepts and technology to expand their knowledge and skill set. 
						</p>
						<p class="p3"><span class="text_bolder">Love for technology</span>
							Love for technology is a common strand running across Metacubians, and is deeply ingrained in our psyche. We are excited about technology, and its application in creating impactful solutions.  Each one of us, senior or junior, loves being hands on and enjoys getting his or her hands dirty to design, code and test something useful, elegant and beautiful. Our greatest pride is the work we produce.
						</p>
						
						<p class="p3"><span class="text_bolder">A balanced head on the shoulder</span>
						While it is important for a person to have the required knowledge and skills, it is even more important for the person to have the right attitude as an individual contributor and a team player. We are looking for people who have a holistic attitude towards profession and life; and are committed to individual, team, customer and organization success.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp2">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">Un pour tous, tous pour un</div>
				<p class="p3">Our open team culture promotes creativity</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Software development is both a science and an art, and today’s coders are the new artisans. However, software development is not an individual art, and the “masterpieces” that are produced are not the work of a single individual but that of a team working in tandem with each other. </p>
						
						<p class="p3">Team Metacube shares the camaraderie of the Three Musketeers, <strong>“un pour tous, tous pour un” that</strong> is one for all, all for one.  While we select highly talented people it is very important that we nurture them in an environment that promotes teamwork, because agile product development is all about collaboration. Successful collaboration demands sharing, honesty, transparency, mutual respect, support and collective ownership within the team. 
						</p>	
						<p class="p3">We strongly believe that people work the best when they are trusted and respected, and are given the freedom to work and grow. This develops a sense of responsibility and ownership within the individual and team; and drives them to be creative and give in their best. 
						</p>
						
						<p class="p3">We owe our continued success to our team; and its camaraderie, hard work, and commitment to customer and organizational success. 
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp3">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">A learning organization</div>
				<p class="p3">Our beginnings in education define us</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Before we re-incarnated ourselves as Metacube in 2004, we spent fifteen years in providing software engineering training and were conferred the National Award for Excellence four times. This invaluable experience has helped us in creating a learning organization that is strong at spotting talent, designing mentoring programs, and fostering an environment that values mentoring and learning.  </p>
						
						<p class="p3">A typical Metacubian is someone who not only enjoys learning new things, but derives greater satisfaction in sharing his learnings with his teammates through presentations, one on one sessions, and informal discussions over a cup of coffee. 
						</p>	
						<p class="p3">We are dedicated to improving ourselves. Our people are encouraged to experiment, and find new ways of doing things. We keep up-to-date on the latest developments in tech. Many of us are active bloggers, we participate in technical forums. And in our projects, we believe spending as less time in conjecture as possible – instead emphasizing on failing fast, and often.
						</p>
						
						<p class="p3">Our leadership ethos too, is defined by minimum management and maximum mentorship. A Metacubian takes greater pride in being a coach or mentor than being a manager. This persistent and continuous learning and mentoring cycle ensures that we are increasing the level of expertise and excellence each day, which is so vital to our profession and our clients.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp4">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">We adapt to customer DNA</div>
				<p class="p3">We are hardworking and flexible</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Our raison d'être is our customers, and our teams are fully committed to your goals and success, and they work hard to achieve the same.</p>
						
						<p class="p3">We believe in long term partnerships rather than one-off projects. While we bring our experience with technology and processes to the table, we believe in fully adapting to the your DNA so that we can work seamlessly with your team, philosophy and goals. 
						</p>	
						<p class="p3">A dedicated engineering team adapting to your DNA brings several advantages including team stability, knowledge retention, effective communication, sense of ownership, team loyalty, and better interpersonal relationships. We work as your extended team.
						</p>
						
						<p class="p3">Metacube offers flexibility in the degree of control you exercise over the extended team. Based on your own preference, your management control may lie anywhere between loosely coupled On-site and Off-shore teams to tightly coupled teams.
						</p>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp5">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">All work and no play - Not at all</div>
				<p class="p3">We are serious about fun</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">We believe in the oft repeated phrase, “All work and no play makes Jack a dull boy”. You need to visit us to see how we live by this phrase.</p>
						
						<p class="p3">At Metacube, we believe in building a fun a workplace that everybody looks forward to coming to every morning. The benefits of having a fun environment at work cannot be overemphasized. It’s no secret that building a fun work culture builds deeper bonds amongst team members and boosts productivity.
						</p>	
						<p class="p3">We support various sports on our campus including table tennis, badminton, volleyball and cricket. We even have annual tournaments internally which are fiercely competitive, and would at times match the frenzy of professional leagues. These games offer great experience in leadership, team building and teamwork. 
						</p>
						<p class="p3">For those who focus on fitness we have a well-equipped gym, where you can channel your inner Hercules by lifting a few weights, or having a go at the treadmill. </p>
						<p class="p3">Other than sports our annual calendar includes several informal cultural events such as Dandiya, kite flying, theme based room decoration, and a fun filled annual dinner with families. In addition to these the teams have their individual parties, movie shows and picnics.  </p>
						<p class="p3">A Metacubian for sure is not a dull boy or a girl, and is somebody who looks forward to be in the office to work hard and have fun.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp6">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Engine</h6>
				<div class="h48p">We are a responsible organization</div>
				<p class="p3">Our CSR approach</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Being humane is at the very core of our psyche, and we aspire to create a shared journey for all Metacubians that will help us connect with this core. Social responsibility is a key vehicle in this journey, as we move beyond financial contributions to active involvement in creating a better future for humanity.  </p>
						
						<p class="p3">We wish to actively and sustainably contribute to the well-being of the society and environment in which we operate.  In doing so build a better way of life for the weaker sections of society and contribute especially to the education of children and youngsters who are constrained because of their limited financial resources. 
						</p>	
						<p class="p3">Through our social initiatives we also look forward to holistic development of our team members where they learn to balance their individual aspirations with purposeful contribution to the society. We want each of our Metacubians to emerge as compassionate human beings, and become torch bearers of humanity.
						</p>
						<p class="p3">Our current focus has been to provide financial and other support to organizations doing good work in various social sectors like education, health and empowerment of weaker sections. </p>
						<p class="p3"><span class="text_bolder">Education</span>
						We believe that children are India’s future, and education is the key to unlock their potential. Hence we have partnered with Akshaya Patra Foundation, to provide daily school lunches to around 500 impoverished school children across Rajasthan. We also support Seth Anandilal Poddar Institute for Deaf and Dumb in Jaipur, which is educating differently-abled students.
						</p>
						<p class="p3"><span class="text_bolder">Health</span>
						We partner with SDMH, one of Jaipur’s premier hospitals to organize regular blood donation camps within our campus. We also contribute to Swami Bhumanand Netra Chikitsalaya in Uttarakhand that provides free eye care to the poor. Bharatiya Kusth Niwarak Sangh, which works with leprosy patients in Chhattisgarh, is another organization that we support.
						</p>
						<p class="p3"><span class="text_bolder">Empowerment</span>
						Over the years, we have also been giving ad hoc support to orphanages, old age homes and similar facilities for children and senior citizens including- HelpAge India, Disha Foundation, CRY and SOS Children’s Village.
						</p>
						<p class="p3">We are actively engaged in self review to improve our CSR program and get our team members actively involved in the greater good of the society.  </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- pop up -->
	
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
	<!-- <script src="assets/js/jquery.cycle.all.js"></script> -->
	<script>
		function smallDeviceFormatting()
		{
			$("#mobile-carousel, #mfeatureDesktop").swiperight(function()
			{
				$(this).carousel('prev');
			});
			$("#mobile-carousel,  #mfeatureDesktop").swipeleft(function()
			{
				$(this).carousel('next');
			});
			var viewportWidth = $(window).width();
			var viewportHeight = $(window).height();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (viewportWidth - containerWidth) / 2;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var columnWidth = Math.floor((containerWidth - horizontalSpacerHeight) / 2);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 2)));
			$("#engine-section-two .mobile .content-panel").css("width", containerWidth);
			$("#engine-section-two .mobile .row").css("height", (0.7 * viewportHeight));
			$("#engine-section-two .mobile .content-panel").css("height", (0.7 * viewportHeight));

			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#engine-section-three .row").css("height", columnHeight);
			//$("#engine-section-three .desktop .row").css("height", $(this).find('.content-panel').height());
			$("#engine-section-three .row .content-panel").css("width", columnWidth);

		}

		function largeDeviceFormatting()
		{
			
			$("#ipad-carousel, #mfeatureDesktop").swiperight(function()
			{
				$(this).carousel('prev');
			});
			$("#ipad-carousel, #mfeatureDesktop").swipeleft(function()
			{
				$(this).carousel('next');
			});
			
		
			

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
			//$("#engine-section-two .desktop .row").css("height", $('#engine-section-two .desktop .content-panel').height());
			//$("#engine-section-two .row").css("height", (columnWidth * 600 / 380));
			$(".content-panel").css("width", columnWidth);
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#engine-section-three .row").css("height", columnHeight);
			$("#engine-section-three .row .content-panel").css("width", columnWidth);
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
			instagram ();
			loadpeopledata();
			twitter ();
			loadenginedata();
			
			setInterval(function(){ twitter(); }, 5000);
			//match height
			$(function() {
				$('#engine-section-two .desktop .row, #engine-section-two .desktop .p3, #homepage-section-one .desktop .content-panel').matchHeight();
			});
			
			
			
			//twitter character limit
			 
			
			
			
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
						//$(this).text(item.text); 
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
					
					$("#twitter_text_mobile").animate({'opacity': 0}, 500, function () {
						var minimized_elements = $(this).text(item.text);
						minimized_elements.each(function(){          
							$(this).html(
								$(this).text().slice(0,70)+'...'
							);
						}); 
					}).animate({'opacity': 1}, 500);
					
					$("#screen_name_mobile").animate({'opacity': 0}, 500, function () {
						$(this).text('@'+item.user.screen_name);
					}).animate({'opacity': 1}, 500);
				}
			});
		}
		
		function instagram () {
			$.ajax({
				dataType: "json",
				url: 'admin/config.txt',
				data: {},
				success: function(data){
					$(".instagram_01").attr('src', data.data[15].images.standard_resolution.url);
					$(".instagram_02").attr('src', data.data[6].images.standard_resolution.url);
					$(".instagram_03").attr('src', data.data[12].images.standard_resolution.url);
					
					$(".instagram_01").attr('onclick', "window.open('" + data.data[15].link + "', '_blank')");
					$(".instagram_02").attr('onclick', "window.open('" + data.data[6].link + "', '_blank')");
					$(".instagram_03").attr('onclick', "window.open('" + data.data[12].link + "', '_blank')");
					
					$(".instagram_01_name").text('@' + data.data[12].user.full_name +' - '+ data.data[15].caption.text);
					$(".instagram_02_name").text('@' + data.data[12].user.full_name +' - '+ data.data[6].caption.text);
					$(".instagram_03_name").text('@' + data.data[12].user.full_name +' - '+ data.data[12].caption.text);
				}
			});
		}
		
		function loadpeopledata() {
            $.ajax({
                url: 'include/ourpeople.php?id=top4',
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
						content += '<li onclick="window.location.href=\'people-inside.html?id=' + value.ID + '\'">';
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
		
		function loadenginedata() {
            $.ajax({
                url: 'include/enginegallery.php',
                type: 'post',
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                data: {},
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    var content = "", i = 0;
                    $.each(obj.Records, function (key, value) {
						if (i == 0) {
							content += '<div class="item active">';
								content += '<img class="features" src="admin/uploads/' + value.IMAGEPATH + '" alt="' + value.TITLE + '" />';
								content += '<span class="h30p smt smt-bottom" style="z-index:3">' + value.TITLE + '</span>';
							content += '</div>';
						}
						else{
							content += '<div class="item">';
								content += '<img class="features" src="admin/uploads/' + value.IMAGEPATH + '" alt="' + value.TITLE + '" />';
								content += '<span class="h30p smt smt-bottom" style="z-index:3">' + value.TITLE + '</span>';
							content += '</div>';
						}
						i++;
                    });
                    $('#image_gallery').html(content);
					$('#engine_gallery').html(content);
                },
                error: function (e) {

                }
            });
        }
		
		
	</script>
	
</body>

</html>