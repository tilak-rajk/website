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
	<title>Metacube | Careers Professionals</title>
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
	<link href="assets/css/careers-professionals-style.css" rel="stylesheet">
	<link href="assets/css/careers-professionals-style-1280px.css" rel="stylesheet">	
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
			<!-------------------- CAREERS PROFESSIONALS IMAGE BANNER -------------------->
			<div id="careers-professionals-image-banner" class="all_banners"></div>
			<!-------------------- CAREERS PROFESSIONALS TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="careers-professionals-text-banner">
					<div class="text">
						<h3>Experienced Professionals</h3>
						<hr class="invisible" />
						<hr class="blue-underline" />
						<p class="p3">Want to work on today’s latest technologies in an environment that lets you grow, learn and innovate?</p>
					</div>
				</div>
				<div class="container">
					<!-------------------- CAREERS PROFESSIONALS SECTION ONE -------------------->
					<div id="careers-professionals-section-one" class="mini-sections-color">
						<div class="desktop" id="desktop_content">
							
						</div>
						<div class="mobile" id="mobile_content">
							
						</div>	
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- CAREERS PROFESSIONALS SECTION TWO -------------------->
					<div id="careers-professionals-section-two" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
						<img class="mainCont cssCount" src="assets/images/careers/refer-to-friend.jpg" alt=""> 
						</div>
						<div class="inner-content">
							<h5>Recommend us to a friend</h5>
							<hr class="invisible">
							<hr class="white-underline">
							<p class="p3">Have a friend who you think would be a great fit at Metacube? Please help us get connected.</p>
							<button class="b3 button-ripple" onclick="sendmail();"><span class="btn-text">REFER YOUR FRIEND</span><span class="side-arrow"></span></button>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<!-------------------- CAREERS PROFESSIONALS SECTION THREE -------------------->
					<div id="careers-professionals-section-three" class="mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/careers/studentsandgraduates2.jpg" alt="">
						</div>
						<div class="inner-content">
							<h5>STUDENTS &amp; GRADUATES</h5>
							<hr class="invisible" />
							<hr class="white-underline" />
							<p class="p3">We are looking for youngsters who are brimming with energy, ideas and zeal to learn. We are coming to your college.</p>
							<button class="b3 button-ripple" onclick="setTimeout(function (){window.location.href='careers-students.php'},500);" style="cursor: pointer;"><span class="btn-text">see campus drive dates</span><span class="side-arrow"></span></button>
						</div>
					</div>
				</div>
				<!-------------------- FOOTER -------------------->
				<div id="metacube-footer">
					
				</div>
			</div>
		</div>
		
		
		<!-- careers pro pop up -->
		
		<div class="popUp3_col" id="popUp1" data-target="1">
			<a href="" class="closebtnIcon closebtnIconJS"></a>
			<div class="pop_header">
				<div class="inner-content">
					<h6 id="job_type"></h6>
					<div class="h48p" id="job_title"></div>
					<p class="p3" id="city"></p>
				</div>
			</div>
			<div class="popUp3_colInner">
				<div class="container">
					<div class="news-inside-content">
						<div class="text" id="job_content">
						
						</div>
						<div class="round-common-btn tac">
							<button id="btn_apply" class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href=''},500);" style="cursor: pointer;"><span class="btn-text">apply now</span></button>
						</div>	
					</div>
				</div>
			</div>
		</div>
		
		<!-- careers pro pop up -->
		
		
		
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
			$("#careers-professionals-section-one .row").css("height", columnHeight);
			$("#careers-professionals-section-one .row .content-panel").css("width", columnWidth);
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
			$("#careers-professionals-section-one .row").css("height", columnHeight);
			$("#careers-professionals-section-one .row .content-panel").css("width", columnWidth);
		}
		$(document).ready(function()
		{
			if ($(window).width() <= 840)
			{
				smallDeviceFormatting();
				loaddata('mobile');
			}
			else
			{
				largeDeviceFormatting();
				loaddata('desktop');
			}
			$(window).resize(function()
			{
				if ($(window).width() <= 840)
				{
					smallDeviceFormatting();
					loaddata('mobile');
				}
				else
				{
					largeDeviceFormatting();
					loaddata('desktop');
				}
			});
			
			//pro pop up
			
			var scrollPos
			
			$('.popUpOverlay, .bacTojob').click(function(){
				$('.popUpOverlay, .careers-popup').fadeOut(300);
				$('html,body').animate({scrollTop: scrollPos}, 500);
			});
			
		});
		
		/* ---- Button Animation ---- */
		$(".button-ripple").ePulse({bgColor: 'rgba(0, 0, 0, 0.5)', event: 'mousedown'});
		
		function sendmail() {
			event.preventDefault();
			var email = 'test@theearth.com';
			var subject = 'Circle Around';
			var emailBody = 'Some blah';
			window.location = 'mailto:' + email + '?subject=' + subject + '&body=' +   emailBody;
		};
	</script>
	
	<script>
		function loaddata(type) {
            $.ajax({
                url: 'include/students.php?type=load&id=2',
                type: 'post',
                data: {  },
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    var content = "";
					var t = 0;
					for(var i=0, keys=Object.keys(obj.Records), l=keys.length; i<l;) {
						if (type == 'desktop') {
							if (i == 0) {
								content += '<div class="row">';
							}
							else{
								content += '<div class="row" style="padding-top:20px">';
							}
							for(var a = 0; a <= 2; a++){
								if (obj.Records[t] != undefined) {
									content += '<div onclick="showoverlay(\'' + obj.Records[t].ID + '\');" class="content-panel">';
										content += '<table>';
											content += '<tr class="title">';
												content += '<td>';
													content += '<h6>' + obj.Records[t].TITLE + '</h6>';
													content += '<hr class="invisible" />';
													content += '<hr class="grey-underline" />';
												content += '</td>';
											content += '</tr>';
											content += '<tr class="text">';
												content += '<td>';
													content += '<p class="p1">' + obj.Records[t].SHORT_DESCRIPTION.slice(0, 120) + '...' + '</p>';
												content += '</td>';
											content += '</tr>';
											content += '<tr class="subtext">';
												content += '<td>';
													content += '<p class="p4">' + obj.Records[t].CONTACT_PERSON + '</p>';
											content += '</tr>';
										content += '</table>';
									content += '</div>';
									if (a != 2) {
										content += '<div class="column-spacer"></div>';
									}
									t++;
								}
							}
							content += '</div>';
						}
						else{
							content += '<div class="row">';
							for(var a = 0; a <= 1; a++){
								if (obj.Records[t] != undefined) {
									content += '<div onclick="showoverlay(\'' + obj.Records[t].ID + '\');" class="content-panel">';
										content += '<table>';
											content += '<tr class="title">';
												content += '<td>';
													content += '<h6>' + obj.Records[t].TITLE + '</h6>';
													content += '<hr class="invisible" />';
													content += '<hr class="grey-underline" />';
												content += '</td>';
											content += '</tr>';
											content += '<tr class="text">';
												content += '<td>';
													content += '<p class="p1">' + obj.Records[t].SHORT_DESCRIPTION.slice(0, 120) + '...' + '</p>';
												content += '</td>';
											content += '</tr>';
											content += '<tr class="subtext">';
												content += '<td>';
													content += '<p class="p4">' + obj.Records[t].CONTACT_PERSON + '</p>';
											content += '</tr>';
										content += '</table>';
									content += '</div>';
									content += '<div class="column-spacer"></div>';
								}
								t++;
							}
							content += '</div>';
							content += '<div class="horizontal-spacer"></div>';
						}
						i = i + a;
					}
					if (type == 'desktop') {
						$('#desktop_content').html(content);
						largeDeviceFormatting();
					}else{
						$('#mobile_content').html(content);
						smallDeviceFormatting();
					}
                },
                error: function (e) {

                }
            });

        }
		
		function showoverlay(id) {
            $.ajax({
                url: 'include/students.php?type=getnews',
                type: 'post',
                data: { 'ID': id },
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
					var obj = jQuery.parseJSON(data);
					
					$('#job_title').html(obj.Records[0].SHORT_DESCRIPTION);
					$('#job_type').html(obj.Records[0].TITLE);
					$('#job_content').html(obj.Records[0].LONG_DESCRIPTION);
					$('#city').html(obj.Records[0].CONTACT_PERSON);
					$('#btn_apply').click(function(){
						window.open(obj.Records[0].APPLY_LINK);
					});
					
					$('#popUp1').show(10, function(){
						$(this).addClass('show-popup');
					});
					$('body').addClass('popUpScroll');
					//e.preventDefault();
                },
                error: function (e) {

                }
            });

        }
	</script>
	
</body>
</html>