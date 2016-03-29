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
	<link href="assets/css/news-inside-style.css" rel="stylesheet">
	<link href="assets/css/news-inside-style-1280px.css" rel="stylesheet">
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
		.news_container {
			text-align: center;
		}
		.NewsList li,
		.NewsList a {
			display: block;
		}
		.NewsList a {
			color: #000;
			padding: 5% 10px;
			transition: all 300ms ease;
		}
		.NewsList a p {
			color: #0a84d9;
		}
		.NewsList a:hover {
			background: #0a84d9;
		}
		.NewsList a:hover p,
		.NewsList a:hover {
			color: #fff;
		}
		/****** News Inside *****/
		.news-banner-text {
			text-align: center;
			color: #fff;
		}
		.news-banner-text-parent {
			display: table;
		}
		.news-banner-text {
			display: table-cell;
			vertical-align: middle;
		}
		
		.comments_container, .news_social, .caption {
			text-align: center;
		}
		
		.news_social ul.list-unstyled {
			padding: 44px 0 44px 0;
			padding: 5.5vmin 0 5.5vmin 0;
		}
		.caption span {
			border-bottom: 1px solid #acacac;
		}
		.caption span {
			display: inline-block;
			padding: 20px 40px;
		}
		.news_social li {
			display: inline-block;
			margin: 10px;
		}
		.nst_container {
			max-width: 755px;
			margin: 5% auto;
		}
		.imgwidthcaption img {
			max-width: 100%;
		}
		.comments_container {
			background: #fff;
			padding: 5% 10px;
		}
		hr {
			width: 91.5254%;
			margin: auto;
			height: 1px;
			background-color: rgba(0,0,0,0.302);
		}
		/****** News Inside *****/
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
			<!-------------------- NEWS INSIDE IMAGE BANNER -------------------->
			<div id="news-inside-image-banner" class="all_banners">
				<div class="inner-content">
					<h6>11.03.2015 / NEWS</h6>
					<div class="h48p">Metacube wins business for Rajasthan Metro Project</div>
					<p class="p3">We follow a dedicated engineering team model where our team adapts to your DNA.</p>
				</div>
			</div>
			<div id="main_wrapper">
				<!-------------------- NEWS INSIDE CONTENT -------------------->
				<div class="inside-container">
					<div class="news-inside-content" id="news_content">
						<div class="news_social indside-separator">
							<ul class="newsInsideShareIcons list-unstyled">
								<input type="hidden" id="content" />
								<li><a onclick="share('1');" href="javascript:;" class="sIcons twitter_ico" title="Twitter" ></a>
								</li>
								<li><a onclick="share('2');" href="javascript:;" class="sIcons facebook_ico" title="Facebook"></a>
								</li>
								<li><a onclick="share('3');" href="javascript:;" class="sIcons gp_ico" title="Google Plus"></a>
								</li>
								<li><a onclick="share('4');" href="javascript:;" class="sIcons linked_ico" title="LinkedIn"></a>
								</li>
							</ul>
						</div>
					</div>
				
				
					<div class="comments_container">
						<!--<img src="assets/images/news/comments.jpg" style="max-width:100%;" alt="" />-->
						<div id="disqus_thread"></div>
						<script>
						/**
						* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
						*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						
						s.src = '//metacube.disqus.com/embed.js';
						
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
					</div>
				</div>
                <input type="hidden" value="<?php echo $token; ?>" id="token" />
				<!-------------------- HORIZONTAL SPACER -------------------->
				<div class="horizontal-spacer"></div>
				<div class="container">
					<!-------------------- NEWS INSIDE CONTENT -------------------->
					<div class="news-inside-content mini-sections-color"> 
						
						<div class="desktop" id="desktop_content">
							
						</div>
						<div class="mobile" id="mobile_content">
							
						</div>
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
	<script src="assets/js/scripts.js"></script>
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
			$(".news-inside-content .row").css("height", columnHeight);
			$(".news-inside-content .row .content-panel").css("width", columnWidth);
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
			$(".news-inside-content .row").css("height", columnHeight);
			$(".news-inside-content .row .content-panel").css("width", columnWidth);
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
			loaddata();
		});
		
		function loaddata() {
		    var id = getParameterByName('id');
		    $.ajax({
		        url: 'include/news.php?id=getnews',
		        type: 'post',
		        data: { 'ID': id },
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
		        success: function (data) {
		            var obj = jQuery.parseJSON(data);
					var dateFormat = obj.Records[0].DATE  + ' 10:54:50.546';
					var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
					var content = obj.Records[0].LONG_DESCRIPTION.replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','').replace('../','');
		            $('#news_content').append(content);
					var title_t = obj.Records[0].TYPE;
					if(title_t == "1"){ title_t = "News"; }
					if(title_t == "2"){ title_t = "Initiative"; }
					if(title_t == "3"){ title_t = "Events"; }
					$('#content').val(obj.Records[0].SHORT_DESCRIPTION);
		            $('.inner-content h6').html(dateFormat + ' / ' + title_t);
		            $('.inner-content div').html(obj.Records[0].TITLE);
		            $('.inner-content .p3').html(obj.Records[0].SHORT_DESCRIPTION);
                    $('#news-inside-image-banner').css("background", "url(admin/uploads/" + obj.Records[0].BANNER_IMAGE + ")");
                    $('#news-inside-image-banner').css("background-size", "cover");
                    $('#news-inside-image-banner').css("background-position", "center");
					
					if (obj.Records[0].DISQUS == 'False') {
						$('.comments_container').css('display','none');
					}
					
					var content_adlets_desk = "", content_adlets_mobile = "";
					var id1 = "", id2 = "", id3 = "";
					var title1 = "", title2 = "", title3 = "";
					var text1 = "", text2 = "", text3 = "";
					var by1 = "", by2 = "", by3 = "";
					var style1 = "display:none", style2 = "display:none", style3 = "display:none";
					if (obj.Adlets[0] != undefined) {
						id1 = obj.Adlets[0].ID;
						title1 = obj.Adlets[0].TYPE;
						text1 = obj.Adlets[0].SHORT_DESCRIPTION;
						
						var dateFormat = obj.Adlets[0].DATE + ' 10:54:50.546';
						var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
						
						by1 = dateFormat; //obj.Adlets[0].ID;
						style1 = "display:block";
						
						if(title1 == "1"){ title1 = "News"; }
						if(title1 == "2"){ title1 = "Initiative"; }
						if(title1 == "3"){ title1 = "Events"; }
					}
					
					if (obj.Adlets[1] != undefined) {
						id2 = obj.Adlets[1].ID;
						title2 = obj.Adlets[1].TYPE;
						text2 = obj.Adlets[1].SHORT_DESCRIPTION;
						
						var dateFormat = obj.Adlets[1].DATE + ' 10:54:50.546';
						var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
					
						by2 = dateFormat; //obj.Adlets[1].ID;
						style2 = "display:block";
						
						if(title2 == "1"){ title2 = "News"; }
						if(title2 == "2"){ title2 = "Initiative"; }
						if(title2 == "3"){ title2 = "Events"; }
					}
					
					if (obj.Adlets[2] != undefined) {
						id3 = obj.Adlets[2].ID;
						title3 = obj.Adlets[2].TYPE;
						text3 = obj.Adlets[2].SHORT_DESCRIPTION;
						
						var dateFormat = obj.Adlets[2].DATE + ' 10:54:50.546';
						var dateFormat = $.format.date(dateFormat, "dd.MM.yyyy");
					
						by3 = dateFormat; //obj.Adlets[2].ID;
						style3 = "display:block";
						
						if(title3 == "1"){ title3 = "News"; }
						if(title3 == "2"){ title3 = "Initiative"; }
						if(title3 == "3"){ title3 = "Events"; }
					}
					
					

					
					content_adlets_desk += '<div class="row">';
						content_adlets_desk += '<div onclick="redirect(\''+id1+'\');" style="'+style1+'" class="content-panel">';
							content_adlets_desk += '<table>';
								content_adlets_desk += '<tr class="title">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<h6>'+title1+'</h6>';
										content_adlets_desk += '<hr class="invisible" />';
										content_adlets_desk += '<hr class="grey-underline" />';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="text">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p1">'+text1+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="subtext">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p4">'+by1+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
							content_adlets_desk += '</table>';
						content_adlets_desk += '</div>';
						content_adlets_desk += '<div class="column-spacer"></div>';
						content_adlets_desk += '<div onclick="redirect(\''+id2+'\');" style="'+style2+'" class="content-panel">';
							content_adlets_desk += '<table>';
								content_adlets_desk += '<tr class="title">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<h6>'+title2+'</h6>';
										content_adlets_desk += '<hr class="invisible" />';
										content_adlets_desk += '<hr class="grey-underline" />';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="text">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p1">'+text2+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="subtext">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p4">'+by2+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
							content_adlets_desk += '</table>';
						content_adlets_desk += '</div>';
						content_adlets_desk += '<div class="column-spacer"></div>';
						content_adlets_desk += '<div onclick="redirect(\''+id3+'\');" style="'+style3+'" class="content-panel">';
							content_adlets_desk += '<table>';
								content_adlets_desk += '<tr class="title">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<h6>'+title3+'</h6>';
										content_adlets_desk += '<hr class="invisible" />';
										content_adlets_desk += '<hr class="grey-underline" />';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="text">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p1">'+text3+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
								content_adlets_desk += '<tr class="subtext">';
									content_adlets_desk += '<td>';
										content_adlets_desk += '<p class="p4">'+by3+'</p>';
									content_adlets_desk += '</td>';
								content_adlets_desk += '</tr>';
							content_adlets_desk += '</table>';
						content_adlets_desk += '</div>';
					content_adlets_desk += '</div>';
					
					$("#desktop_content").html(content_adlets_desk);
					//largeDeviceFormatting();
					
					
					content_adlets_mobile += '<div class="row">';
						content_adlets_mobile += '<div onclick="redirect(\''+id1+'\');" style="'+style1+'" class="content-panel">';
							content_adlets_mobile += '<table>';
								content_adlets_mobile += '<tr class="title">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<h6>'+title1+'</h6>';
										content_adlets_mobile += '<hr class="invisible" />';
										content_adlets_mobile += '<hr class="grey-underline" />';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="text">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p1">'+text1+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="subtext">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p4">'+by1+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
							content_adlets_mobile += '</table>';
						content_adlets_mobile += '</div>';
						content_adlets_mobile += '<div class="column-spacer"></div>';
						content_adlets_mobile += '<div onclick="redirect(\''+id2+'\');" style="'+style2+'" class="content-panel">';
							content_adlets_mobile += '<table>';
								content_adlets_mobile += '<tr class="title">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<h6>'+title2+'</h6>';
										content_adlets_mobile += '<hr class="invisible" />';
										content_adlets_mobile += '<hr class="grey-underline" />';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="text">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p1">'+text2+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="subtext">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p4">'+by2+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
							content_adlets_mobile += '</table>';
						content_adlets_mobile += '</div>';
					content_adlets_mobile += '</div>';
					
					content_adlets_mobile += '<div class="horizontal-spacer"></div>';
					content_adlets_mobile += '<div class="row">';
						content_adlets_mobile += '<div onclick="redirect(\''+id3+'\');" style="'+style3+'" class="content-panel">';
							content_adlets_mobile += '<table>';
								content_adlets_mobile += '<tr class="title">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<h6>'+title3+'</h6>';
										content_adlets_mobile += '<hr class="invisible" />';
										content_adlets_mobile += '<hr class="grey-underline" />';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="text">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p1">'+text3+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
								content_adlets_mobile += '<tr class="subtext">';
									content_adlets_mobile += '<td>';
										content_adlets_mobile += '<p class="p4">'+by3+'</p>';
									content_adlets_mobile += '</td>';
								content_adlets_mobile += '</tr>';
							content_adlets_mobile += '</table>';
						content_adlets_mobile += '</div>';
					content_adlets_mobile += '</div>';
					
					$("#mobile_content").html(content_adlets_mobile);
					//smallDeviceFormatting();
					
					if ($(window).width() <= 840)
					{
						smallDeviceFormatting();
					}
					else
					{
						largeDeviceFormatting();
					}

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
					
		        },
		        error: function (e) {

		        }
		    });
		}

		function getParameterByName(name) {
		    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
		    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}
		
		/**** Button animation ******/
		$(".button-ripple").ePulse(
		{
			bgColor: 'rgba(0, 0, 0, 0.5)',
			event: 'mousedown'
		});
		
		function redirect(id) {
			window.location.href = 'news-inside.html?id='+id;
		}
		
		function share(id) {
			var shareurl = window.location.href;
			var content = $('#content').val();
			if(id == '1'){
				url = "https://twitter.com/intent/tweet?url=" + shareurl + "&text=" + content;
			}
			if(id == '2'){
				url = "https://www.facebook.com/sharer/sharer.php?u=" + shareurl + "&t=" + content;
			}
			if(id == '3'){
				url = "https://plus.google.com/share?url=" + shareurl;
			}
			if(id == '4'){
				url = "https://www.linkedin.com/shareArticle?mini=true&url=" + shareurl;
			}
			
			window.open(url, '_blank');
		}		
	</script>
	
</body>
</html>