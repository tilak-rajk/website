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
	<title>Metacube | Ideas</title>
	<meta name="description" content="Stay up to date with the latest insights, perspectives and research from Team Metacube.">
	<meta name="keywords" content="Metacube blog, Metacube ideas, Latest in tech, Product development">
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
	<link href="assets/css/blog-style.css" rel="stylesheet">
	<link href="assets/css/blog-style-1280px.css" rel="stylesheet">
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
		.blog_header_button{
			text-align:center;
		}
		.blog_filter {
			text-transform:uppercase;
			margin-top:45px;
			margin-top:5.625vmin;
		}
		#blog-text-banner .blog_filter li.b2 a:hover, #blog-text-banner .blog_filter li.b2.filter-active a{
			background:#0397ff;
			border-color:#0397ff;
			color:#fff;
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
			<!-------------------- BLOG IMAGE BANNER -------------------->
			<div id="blog-image-banner" class="all_banners"></div>
			<!-- End of Blog Image Banner -->
			<div id="main_wrapper">
				<div id="blog-text-banner">
					<div class="inner-content">
						<h3>Our Ideas</h3>
						<hr class="invisible" />
						<hr class="blue-underline" />
					</div>
				</div>
				<div class="container">
					<!-------------------- BLOG CONTENT -------------------->
					<div id="blog-content" class="mini-sections-color">
						<div class="desktop" id="desktopcontent">
								
						</div>
						<div class="mobile" id="mobilecontent">
							
						</div>
					</div>
				</div>
				<!-------------------- MORE CONTENT -------------------->
				<div id="more-content">
					<div class="button">
						<button class="b1 button--antiman"><span class="btn-text">more</span></button>
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
	<script src="assets/js/jquery-epulse.min.js"></script>
	
	<script>
		function smallDeviceFormatting() {
			var viewportWidth = $(window).width();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth); 
			
			var horizontalSpacerHeight = (viewportWidth - containerWidth) / 2;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);

			var columnWidth = Math.floor((containerWidth - horizontalSpacerHeight) / 2);
			var columnHeight = Math.floor((360 / 380) * columnWidth);
			var verticalSpacerWidth = Math.floor((containerWidth - (columnWidth * 2)));

			$(".column-spacer").css("width", verticalSpacerWidth);
			$("#blog-content .row").css("height", columnHeight);
			$("#blog-content .row .content-panel").css("width", columnWidth);
		}

		function largeDeviceFormatting() {
			var viewportWidth = $(window).width();
			if (viewportWidth > 1280) {
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
			$(".horizontal-1column-spacer").css("height", horizontalSpacerHeight);
			$(".horizontal-1column-spacer").css("width", columnWidth);
			$("#blog-content .row").css("height", columnHeight);
			$("#blog-content .row .content-panel").css("width", columnWidth);
		}
		$(document).ready(function() {
			if ($(window).width() <= 840) {
				loaddata(10000000000000, 5, 'mobile');
				smallDeviceFormatting();
			} else {
				loaddata(10000000000000, 6, 'desktop');
				largeDeviceFormatting();
			}
			$(window).resize(function() {
				if ($(window).width() <= 840) {
					smallDeviceFormatting();
				} else {
					largeDeviceFormatting();
				}

			});
		});
		
		var load = 1;
		function loaddata(id, limit, type) {
            $.ajax({
                url: 'include/blog.php?id=load',
                type: 'post',
                data: {ID: id, LIMIT: limit},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    var content = "", button = "", idmore = "", mobilecontent = "";
					if (type == 'desktop')
					{
						if(load == 1 && obj.Records.length > 5)
						{
							content += '<div class="row">';
								content += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel feature-image mainContP" style="position:relative">';
									content += '<div class="mainContDIV">';
										content += '<img class="features mainCont smallCont" id="HoverTarget1" src="admin/uploads/'+obj.Records[0].IMAGE_PATH+'" alt="Feature 1 Image" />';
									content += '</div>';
									content += '<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;" />';
								content += '</div>';
								content += '<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>';
								content += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel connectedHover" data-target="1">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[0].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[0].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[0].BY+'</p>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								content += '<div class="column-spacer"></div>';
								content += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[1].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[1].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[1].BY+'</p></td>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
							content += '</div>';
							
							content += '<div class="horizontal-spacer"></div>';
							content += '<div class="row">';
								
								content += '<div onclick="redirect(\''+obj.Records[4].ID+'\');" class="content-panel feature-image mainContP">';
									content += '<div class="mainContDIV">';
										content += '<img class="features mainCont smallCont" id="HoverTarget2" src="admin/uploads/'+obj.Records[4].IMAGE_PATH+'" alt="Content Grid Two Image" />';
									content += '</div>';
									content += '<img src="assets/images/top-arrow.png" style="position:absolute;bottom:0;left:5%;width:3.75vmin;height:auto;" />';
								content += '</div>';
								content += '<div class="column-spacer"></div>';
								
								content += '<div onclick="redirect(\''+obj.Records[2].ID+'\');" class="content-panel">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[2].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[2].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[2].BY+'</p></td>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								content += '<div class="column-spacer"></div>';
								
								content += '<div onclick="redirect(\''+obj.Records[3].ID+'\');" class="content-panel">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[3].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[3].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[3].BY+'</p></td>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								
							content += '</div>';
							
							content += '<div class="horizontal-1column-spacer"></div>';
							content += '<div class="row">';
							
								content += '<div onclick="redirect(\''+obj.Records[4].ID+'\');" class="content-panel connectedHover" data-target="2">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[4].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[4].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[4].BY+'</p></td>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								content += '<div class="column-spacer"></div>';
								content += '<div onclick="redirect(\''+obj.Records[5].ID+'\');" class="content-panel connectedHover" data-target="3">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[5].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[5].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[5].BY+'</p></td>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								content += '<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>';
								content += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel feature-image mainContP">';
									content += '<div class="mainContDIV">';
										content += '<img class="features mainCont smallCont" id="HoverTarget3" src="admin/uploads/'+obj.Records[5].IMAGE_PATH+'" alt="Content Grid Three Image" />';
									content += '</div>';
									content += '<img src="assets/images/right-arrow.png" style="position:absolute;left:0;top:5%;height:3.75vmin;width:auto;" />';
								content += '</div>';
							content += '</div>';
							load = 2;
							idmore = obj.Records[5].ID;
						}
						else{
							content += '<div class="horizontal-spacer"></div>';
							content += '<div class="row">';
								content += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel feature-image mainContP" style="position:relative">';
									content += '<div class="mainContDIV">';
										content += '<img class="features mainCont smallCont" id="HoverTarget1" src="admin/uploads/'+obj.Records[0].IMAGE_PATH+'" alt="Feature 1 Image" />';
									content += '</div>';
									content += '<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;" />';
								content += '</div>';
								content += '<div class="column-spacer" style="background-color:rgba(255,255,255,1);height:100%;"></div>';
								content += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel connectedHover" data-target="1">';
									content += '<table>';
										content += '<tr class="title">';
											content += '<td><h6>'+obj.Records[0].TYPE+'</h6>';
												content += '<hr class="invisible"/><hr class="grey-underline"/>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="text">';
											content += '<td>';
												content += '<p class="p1">'+obj.Records[0].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											content += '</td>';
										content += '</tr>';
										content += '<tr class="subtext">';
											content += '<td><p class="p4">'+obj.Records[0].BY+'</p>';
										content += '</tr>';
									content += '</table>';
								content += '</div>';
								content += '<div class="column-spacer"></div>';
								idmore = obj.Records[0].ID;
								if (obj.Records[1] != undefined) {
									content += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel">';
										content += '<table>';
											content += '<tr class="title">';
												content += '<td><h6>'+obj.Records[1].TYPE+'</h6>';
													content += '<hr class="invisible"/><hr class="grey-underline"/></td>';
											content += '</tr>';
											content += '<tr class="text">';
												content += '<td>';
													content += '<p class="p1">'+obj.Records[1].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
												content += '</td>';
											content += '</tr>';
											content += '<tr class="subtext">';
												content += '<td><p class="p4">'+obj.Records[1].BY+'</p></td>';
											content += '</tr>';
										content += '</table>';
									content += '</div>';
								idmore = obj.Records[1].ID;
								}
							content += '</div>';
							
							content += '<div class="horizontal-spacer"></div>';
						}
						
						if (idmore > 2) {
							button += '<div class="button">';
							button += '<button onclick="loaddata(\''+idmore+'\',\'2\',\'desktop\')" class="b1 button--antiman"><span class="btn-text">more</span></button>';
							button += '</div>';
						}
	
						$('#desktopcontent').append(content);
						$('#more-content').html(button);
						largeDeviceFormatting();
					}
					else{
						if(load == 1 && obj.Records.length > 4)
						{
							mobilecontent += '<div class="row">';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel feature-image">';
									mobilecontent += '<img class="features" src="admin/uploads/'+obj.Records[0].IMAGE_PATH+'" alt="Feature 1 Image" />';
									mobilecontent += '<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;">';
								mobilecontent += '</div>';
								mobilecontent += '<div class="column-spacer" style="height: 100%; width: 22px; background-color: rgb(255, 255, 255);"></div>';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[0].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[0].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[0].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
							mobilecontent += '</div>';
							
							mobilecontent += '<div class="horizontal-spacer"></div>';
							mobilecontent += '<div class="row">';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[1].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[1].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[1].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
								mobilecontent += '<div class="column-spacer" style="height: 100%; width: 22px; background-color: rgb(255, 255, 255);"></div>';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel feature-image">';
									mobilecontent += '<img class="features" src="admin/uploads/'+obj.Records[1].IMAGE_PATH+'" alt="Feature 2 Image" />';
									mobilecontent += '<img src="assets/images/right-arrow.png" style="position:absolute;left:0;top:5%;height:3.75vmin;width:auto;">';
								mobilecontent += '</div>';
							mobilecontent += '</div>';
							
							mobilecontent += '<div class="horizontal-spacer"></div>';
							mobilecontent += '<div class="row">';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[2].ID+'\');" class="content-panel feature-image">';
									mobilecontent += '<img class="features" src="admin/uploads/'+obj.Records[2].IMAGE_PATH+'" alt="Feature 3 Image" />';
									mobilecontent += '<img src="assets/images/left-arrow.png" style="position:absolute;top:5%;right:0;width:auto;height:3.75vmin;">';
								mobilecontent += '</div>';
								mobilecontent += '<div class="column-spacer" style="height: 100%; width: 22px; background-color: rgb(255, 255, 255);"></div>';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[2].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[2].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[2].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[2].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
							mobilecontent += '</div>';
							
							mobilecontent += '<div class="horizontal-spacer"></div>';
							mobilecontent += '<div class="row">';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[3].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[3].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[3].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[3].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
								mobilecontent += '<div class="column-spacer"></div>';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[4].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[4].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[4].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[4].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
							mobilecontent += '</div>';
							load = 2;
							idmore = obj.Records[4].ID;
						}
						else{
							mobilecontent += '<div class="horizontal-spacer"></div>';
							mobilecontent += '<div class="row">';
								mobilecontent += '<div onclick="redirect(\''+obj.Records[0].ID+'\');" class="content-panel">';
									mobilecontent += '<table>';
										mobilecontent += '<tr class="title">';
											mobilecontent += '<td><h6>'+obj.Records[0].TYPE+'</h6>';
												mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="text">';
											mobilecontent += '<td>';
												mobilecontent += '<p class="p1">'+obj.Records[0].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
											mobilecontent += '</td>';
										mobilecontent += '</tr>';
										mobilecontent += '<tr class="subtext">';
											mobilecontent += '<td><p class="p4">'+obj.Records[0].BY+'</p></td>';
										mobilecontent += '</tr>';
									mobilecontent += '</table>';
								mobilecontent += '</div>';
								mobilecontent += '<div class="column-spacer"></div>';
								idmore = obj.Records[0].ID;
								if (obj.Records[1] != undefined) {
										mobilecontent += '<div onclick="redirect(\''+obj.Records[1].ID+'\');" class="content-panel">';
											mobilecontent += '<table>';
												mobilecontent += '<tr class="title">';
													mobilecontent += '<td><h6>'+obj.Records[1].TYPE+'</h6>';
														mobilecontent += '<hr class="invisible"/><hr class="grey-underline"/></td>';
												mobilecontent += '</tr>';
												mobilecontent += '<tr class="text">';
													mobilecontent += '<td>';
														mobilecontent += '<p class="p1">'+obj.Records[1].SHORT_DESCRIPTION.slice(0, 120) + '...'+'</p>';
													mobilecontent += '</td>';
												mobilecontent += '</tr>';
												mobilecontent += '<tr class="subtext">';
													mobilecontent += '<td><p class="p4">'+obj.Records[1].BY+'</p></td>';
												mobilecontent += '</tr>';
											mobilecontent += '</table>';
										mobilecontent += '</div>';
									mobilecontent += '</div>';
									idmore = obj.Records[1].ID;
								}
						}
						
						if (idmore > 2) {
							button += '<div class="button">';
							button += '<button onclick="loaddata(\''+idmore+'\',\'2\',\'mobile\')" class="b1 button--antiman"><span class="btn-text">more</span></button>';
							button += '</div>';
						}
	
						$('#mobilecontent').append(mobilecontent);
						$('#more-content').html(button);
						smallDeviceFormatting();
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
					}
						
					animate();
                },
                error: function (e) {

                }
            });
        }
		
		function redirect(id) {
			window.location.href = 'blog-inside.php?id='+id;
		}
		/**** Button animation ******/
		$(".button-ripple").ePulse({bgColor: 'rgba(0, 0, 0, 0.5)', event: 'mousedown'});
		
		
		function animate() {
            $('.smallCont').css({'top':'-30px','left':'-30px'}); 
	
			$('.connectedHover').hover(function (e) {
				var dir = determineDirection($(this), { x: e.pageX, y: e.pageY });
				
				$('#HoverTarget' + $(this).attr('data-target')).addClass('OtherHover direction_' + dir);
				
				if($('#HoverTarget' + $(this).attr('data-target')).hasClass('direction_1')){ 
					$('#HoverTarget' + $(this).attr('data-target')).stop(true, true).animate({'left':'-60px','top':'-30px','opacity':'0.7'}, 300);
				}else if($('#HoverTarget' + $(this).attr('data-target')).hasClass('direction_2')){
					$('#HoverTarget' + $(this).attr('data-target')).stop(true, true).animate({'left':'-30px','top':'-60px','opacity':'0.7'}, 300);
				} else if($('#HoverTarget' + $(this).attr('data-target')).hasClass('direction_3')){
					$('#HoverTarget' + $(this).attr('data-target')).stop(true, true).animate({'left':'0','top':'-30px','opacity':'0.7'}, 300);
				}else if($('#HoverTarget' + $(this).attr('data-target')).hasClass('direction_0')){
					$('#HoverTarget' + $(this).attr('data-target')).stop(true, true).animate({'left':'-30px','top':'0','opacity':'0.7'}, 300); 
				}
				
			}, function () {
				$('.smallCont.direction_1, .smallCont.direction_2, .smallCont.direction_3, .smallCont.direction_0').stop(true, true).animate({'left':'-30px','top':'-30px','opacity':'1'}, 300);
				$('#HoverTarget' + $(this).attr('data-target')).removeClass('OtherHover direction_3 direction_1 direction_2 direction_0');
			});
		
			$('.smallCont').hover(function (e) {
				$('.connectedHover' + $(this).attr('data-target')).addClass('textHover');
			}, function () {
				$('.connectedHover' + $(this).attr('data-target')).removeClass('textHover');
			});
			
			
			$('.mainContP').hover(function (e) {
				var dir = determineDirection($(this), { x: e.pageX, y: e.pageY });
				var $move = $(this).find('.smallCont');
				$(this).find('.cssCount').addClass('direction_' + dir);	
				$move.addClass('direction_' + dir);
				
				if($move.hasClass('direction_1')){ 
					$move.stop(true, true).animate({'left':'-60px','top':'-30px','opacity':'0.7'}, 300);
				}else if($move.hasClass('direction_2')){
					$move.stop(true, true).animate({'left':'-30px','top':'-60px','opacity':'0.7'}, 300);
				} else if($move.hasClass('direction_3')){
					$move.stop(true, true).animate({'left':'0','top':'-30px','opacity':'0.7'}, 300);
				}else if($move.hasClass('direction_0')){
					$move.stop(true, true).animate({'left':'-30px','top':'0','opacity':'0.7'}, 300); 
				}
				
			}, function () {
				$('.smallCont.direction_1, .smallCont.direction_2, .smallCont.direction_3, .smallCont.direction_0').stop(true, true).animate({'left':'-30px','top':'-30px','opacity':'1'}, 300);
				$(this).find('.mainCont').removeClass('direction_3 direction_1 direction_2 direction_0');
				$(this).find('.cssCount').removeClass('direction_3 direction_1 direction_2 direction_0');
			});
        }
		
		
		
	</script>
	
</body>

</html>