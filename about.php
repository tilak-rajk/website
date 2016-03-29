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
	<title>About Metacube</title>
	<meta name="description" content="Over the last two decades, Metacube has evolved into one of the nation’s most innovative product engineering companies - partnering with global start-ups and established players.">
	<meta name="keywords" content="About Metacube, What is Metacube software">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/about-style.css" rel="stylesheet">
	<link href="assets/css/about-style-1280px.css" rel="stylesheet">	
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
		.background-white {
			background: #fff;
		}
		.round-btn {
			width: 50px;
			height: 50px;
			line-height: 28px;
			border-radius: 100px;
			margin: auto;
			background: #1b99fc;
			text-align: center;
			cursor: pointer;
		}
		.round-btn:hover {
			background: #177dfb;
		}
		.bottom-arrow:before, .bottom-arrow:after{
			content:'';
			position:absolute;
			width: 15px;
			height: 4px; 
			background: #fff;
			top:24px;
			
		}
		.bottom-arrow{
			position:absolute;
			top:0;
			right:0;
			bottom:0;
			left:0;
		}
		.bottom-arrow:before{
			-ms-transform:rotate(45deg);
			-moz-transform:rotate(45deg);
			-webkit-transform:rotate(45deg);
			transform:rotate(45deg);
			left:14px;
			border-radius: 10px 0 0 10px;
		}
		.bottom-arrow:after{
			-ms-transform:rotate(-45deg);
			-moz-transform:rotate(-45deg);
			-webkit-transform:rotate(-45deg);
			transform:rotate(-45deg);
			left:22px;
			border-radius: 0 10px 10px 0;
		}
		.aboutToggle-acive .bottom-arrow {
			-ms-transform: rotate(-180deg);
			-moz-transform: rotate(-180deg);
			-webkit-transform: rotate(-180deg);
			transform: rotate(-180deg);
		}
		.about_info_conatiner,
		.about_testimonials {
			text-align: center;
		}
		.about_txtInfo {
			position: relative;
			margin-top: 10%;
			padding-top: 30px;
		}
		.about_txtInfo:before {
			content: '';
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
			top: 0;
			width: 27px;
			height: 2px;
			background: #0297ff;
		}
		.about_infoInner {
			max-width: 316px;
			margin: 10% auto;
		}
		.about_testimonials {
			background: #0a84d9;
			color: #fff;
		}
		.cHeadBody h1 {
			position: relative;
		}
		.cHeadBody h1:before {
			content: '';
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
			width: 27px;
			height: 2px;
			background: #fff;
			bottom: -20px;
		}
		.cHeadBody p span {
			display: block;
		}
		.cHeadBody img {
			border-radius: 100%;
		}
		.about_testimonials .testimonial_container {
			max-width: 600px;
			margin-left: auto;
			margin-right: auto;
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
			<!-------------------- ABOUT IMAGE BANNER -------------------->
			<div id="about-image-banner" class="all_banners"></div>
			<!-------------------- ABOUT TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div style="background-color:#fff;width:100%;">
					<div class="about-text-banner">
						<div class="text">
							<h3>Our Story</h3>
							<hr class="invisible" />
							<hr class="blue-underline" />
							<p class="p3">Before our re-incarnation as Metacube in 2004, we spent fifteen years as CIStems, training software engineering students. We were conferred the National Award for Excellence four times. Today, we have evolved into a leading software product engineering company, partnering with both global start-ups and established players in their innovation journey.</p>
						</div>
					</div>
				</div>
				<!-------------------- ABOUT TEXT BANNER TWO -------------------->
				<div class="about-text-banner two" id="open-about-section">
					<div class="text">
						<!-- <h4>How we partner with you</h4> -->
						<h3>How we partner with you</h3>
						<hr class="invisible" />
						<hr class="blue-underline" />
						<p class="p3">We follow a dedicated engineering team model where our team adapts to your DNA. We have a unique process while partnering with our clients.</p>
						<div class="round-btn button-ripple" id="aboutToggle">
							<div class="c-ripple js-ripple">
								<span class="c-ripple__circle"></span>
							</div>
							<span class="bottom-arrow"></span>
						</div>
					</div>
				</div>
				<div class="container">
					<!-------------------- ABOUT SECTION ONE -------------------->
					<div id="about-section-one" class="about_info_conatiner clearfix background-white">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info1.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Share your product vision, roadmap and current product status
									</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info2.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Build a dedicated team as per your requirements in terms of size, roles and technology experience
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info3.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Set up the engineering process and tools, and grant access to these tools to the team
									</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info5.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Conduct knowledge transfer sessions for the team in person or online
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info4.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Induct the team into the regular development life cycle from planning sessions, to execution, to retrospectives
									</p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="about_infoInner">
									<img src="assets/images/about/about-info6.svg" alt="" />
									<hr class="invisible" />
									<hr class="blue-underline" />
									<hr class="invisible" />
									<p class="p3">
										Conduct periodic engagement review meetings 
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- ABOUT SECTION TWO -------------------->
					<div id="about-section-two" class="about_testimonials cHeadBody">
					<h5>WHAT WE BELIEVE IN</h5>
					<hr class="invisible" />
					<hr class="white-underline"/>
						<div id='mobile-carousel' class='carousel slide' data-ride='carousel'>
							<div class='carousel-outer'>
								<div class='carousel-inner'>
									<div class='item active'>
										<div class="row">
											<div class="inner-content">
												<p class="p3">We stress on building long-term, win-win relationships with both our customers and employees; as opposed to short-term, transaction-oriented engagement.</p>
												<img src="assets/images/about/about-testimonial-1.gif" alt="" />
												<p class="p4">Keshav Sharma</p>
												<p class="p5">CEO</p>
											</div>
										</div>
									</div>
									<div class='item'>
										<div class="row">
											<div class="inner-content">
												<p class="p3">We stress on building long-term, win-win relationships with both our customers and employees; as opposed to short-term, transaction-oriented engagement.</p>
												<img src="assets/images/about/about-testimonial-1.gif" alt="" />
												<p class="p4">Keshav Sharma</p>
												<p class="p5">CEO</p>
											</div>
										</div>
									</div>
									<div class='item'>
										<div class="row">
											<div class="inner-content">
												<p class="p3">We stress on building long-term, win-win relationships with both our customers and employees; as opposed to short-term, transaction-oriented engagement.</p>
												<img src="assets/images/about/about-testimonial-1.gif" alt="" />
												<p class="p4">Keshav Sharma</p>
												<p class="p5">CEO</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Controls -->
	<!-- 
								<a class='left carousel-control' href='#mobile-carousel' data-slide='prev'>
								<span class='glyphicon glyphicon-chevron-left carousel-control-color'></span>
								</a>
								<a class='right carousel-control' href='#mobile-carousel' data-slide='next'>
								<span class='glyphicon glyphicon-chevron-right carousel-control-color'></span>
								</a>
	 -->
							</div>
							<!-- Indicators -->
							<ol class='carousel-indicators mCustomScrollbar'>
								<li data-target='#mobile-carousel' data-slide-to='0' class='active'></li>
								<li data-target='#mobile-carousel' data-slide-to='1'></li>
								<li data-target='#mobile-carousel' data-slide-to='2'></li>
							</ol>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- ABOUT SECTION THREE -------------------->
					<div id="about-section-three" class="mini-sections-color">
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
												<h6>news</h6>
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
												<h6>Impact Story</h6>
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
												<h6>Ideas</h6>
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
												<h6>news</h6>
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
												<h6>Ideas</h6>
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
				</div>
				
				
				
					<!-- poeple -->
					<div class="ourPepoleConatiner" id="engine-section-five">
						<div class="container tac">
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
					<!-- poeple -->
					
					
					<div id="view-all">
						<div class="button">
							<button class="b1 button--antiman ui-btn ui-shadow ui-corner-all" onclick="location.href='people.php';" style="cursor: pointer;"><span class="btn-text">view all</span>
							</button>
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
			$("#mobile-carousel").swiperight(function()
			{
				$(this).carousel('prev');
			});
			$("#mobile-carousel").swipeleft(function()
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
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#about-section-three .row").css("height", columnHeight);
			$("#about-section-three .row .content-panel").css("width", columnWidth);
		}
		function largeDeviceFormatting()
		{
			var viewportWidth = $(window).width();
			if (viewportWidth > 1280)
			{
				viewportWidth = 1280;
			}
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth); /* container is 92.1875% of viewport width */
			//Calculate the relative spacing between the grid elements for the current viewport width
			// and adjust the grid elements accordingly
			var horizontalSpacerHeight = (1.5625 / 100) * viewportWidth;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var columnWidth = Math.floor((containerWidth - 2 * horizontalSpacerHeight) / 3);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 3)) / 2);
			$(".content-panel").css("width", columnWidth);
			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#about-section-three .row").css("height", columnHeight);
			$("#about-section-three .row .content-panel").css("width", columnWidth);
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
			
			/* ---- Button Animation ---- */
			$(".button-ripple").ePulse({bgColor: 'rgba(0, 0, 0, 0.5)', event: 'mousedown'});
			
			/* -- slideToggle --*/
			
			//window.scrollTo(0,0);
			
			$('#aboutToggle').click(function(e){
				$('#about-section-one').slideToggle();
				$(this).toggleClass('aboutToggle-acive');
				e.preventDefault();
			});
			
			$(window).load(function(){
				var aboutScroll = $("#aboutToggle").offset().top - ($('#metacube-header').height()*4);
				if(window.location.hash == "#open-about-section"){ 
					$('body, html').animate({'scrollTop': aboutScroll},500, function(){
						//$("#aboutToggle").trigger("click"); 
						$('#aboutToggle').addClass('aboutToggle-acive');
						$('#about-section-one').slideDown();
					});
				} 
			});
			loadpeopledata();
			loadnewsdata();
		});
		
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
                url: 'include/ourpeople.php?id=adlets',
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
					$('#desktop_desc3').text(obj.table2[0].SHORT_DESCRIPTION);
					
					var dateFormat = obj.table3[0].DATE + ' 10:54:50.546';
					var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
					
					$('#desktop_by1').text(obj.table1[0].BY);
					$('#desktop_by2').text(dateFormat);
					$('#desktop_by3').text(obj.table2[0].BY);
					
					$('#mobile_desc1').text(obj.table1[0].SHORT_DESCRIPTION);
					$('#mobile_desc2').text(obj.table3[0].SHORT_DESCRIPTION);
					$('#mobile_desc3').text(obj.table2[0].SHORT_DESCRIPTION);
					
					$('#mobile_by1').text(obj.table1[0].BY);
					
					$('#mobile_by2').text(dateFormat);
					
					$('#mobile_by3').text(obj.table2[0].BY);
					
					$("#mobile_tab1, #desktop_tab1").click(function() {
						window.location.href = 'blog-inside.php?id='+obj.table1[0].ID;
					});
					
					$("#mobile_tab2, #desktop_tab2").click(function() {
						window.location.href = 'news-inside.php?id='+obj.table3[0].ID;
					});
					
					$("#mobile_tab3, #desktop_tab3").click(function() {
						window.location.href = 'blog-inside.php?id='+obj.table2[0].ID;
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