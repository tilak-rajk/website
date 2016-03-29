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
	<title>Metacube | Contact details</title>
	<meta name="description" content="Want to make an enquiry about our services, job opportunities or campus drives? Get all our contact details here.">
	<meta name="keywords" content="Metacube Jaipur contact details, Metacube contact details, Metacube email, Metacube phone number, Metacube address">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/contact-style.css" rel="stylesheet">
	<link href="assets/css/contact-style-1280px.css" rel="stylesheet">
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
	<script type="text/javascript" src="assets/js/snazzymaps.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_cMR3YBDntYYS4WlVyqSNFXWKI89k0q0"></script>
	<!-- JS -->
	<style type="text/css">
		.contactMapPopup p{
			max-width:100%; 
		}
		.contactMapPopup{
			padding:14px;
			font-family: "Benton Sans Book";
			font-size:12px;
		}
		.contactMapPopup .contactMapHead{
			font-size:18px;
			color:#000;
			margin-bottom:15px;
		}
		.contactMapPopup p{
			color:#918f8f;
			margin-bottom:26px;
		}
		.contactMapPopup a{
			color:#000;
		}
		.contactMapPopup a:hover{
			color:#0397ff;
		}
		
		@media (max-width: 840px){
			.contact-content .text, .contact-content .image{
				width:100%;
			}
			.contact-content .image{
				margin-bottom:20px;
			}
			.contact-content{
				height:auto !important;
			}
			.contact-content #map-canvas{
				height:300px;
			}
			.contact-content .text{
				background:#fff;
			}
			
			.contactMapPopup{
				padding:8px;
				font-size:10px;
			}
			.contactMapPopup .contactMapHead{
					font-size:14px;
					margin-bottom:10px;
				}
			.contactMapPopup p{
				margin-bottom:12px;
			}
		}
		
	</style>
	<script type="text/javascript">
		//google.maps.event.addDomListener(window, 'load', init);
		function init(lati, lon, address, email)
		{
			var styles = [
			{
				"featureType": "all",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#cccccc"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"saturation": 36
				},
				{
					"lightness": 40
				},
				{
					"color": "#6f6f6f"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.text.stroke",
				"stylers": [
				{
					"visibility": "on"
				},
				{
					"color": "#ffffff"
				},
				{
					"lightness": "12"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.icon",
				"stylers": [
				{
					"visibility": "off"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#000000"
				},
				{
					"lightness": 20
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [
				{
					"color": "#000000"
				},
				{
					"lightness": 17
				},
				{
					"weight": 1.2
				}]
			},
			{
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#000000"
				},
				{
					"lightness": 20
				}]
			},
			{
				"featureType": "landscape",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#cccccc"
				}]
			},
			{
				"featureType": "landscape.man_made",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#cccccc"
				}]
			},
			{
				"featureType": "landscape.natural.landcover",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#cccccc"
				}]
			},
			{
				"featureType": "landscape.natural.terrain",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#cccccc"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [
				{
					"lightness": 21
				}]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#b9b9b9"
				},
				{
					"lightness": 17
				}]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [
				{
					"lightness": 29
				},
				{
					"weight": 0.2
				},
				{
					"color": "#f0f0f0"
				}]
			},
			{
				"featureType": "road.highway.controlled_access",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#ffffff"
				}]
			},
			{
				"featureType": "road.highway.controlled_access",
				"elementType": "geometry.stroke",
				"stylers": [
				{
					"visibility": "off"
				}]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#000000"
				},
				{
					"lightness": 18
				}]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#ffffff"
				}]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry.stroke",
				"stylers": [
				{
					"visibility": "simplified"
				}]
			},
			{
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [
				{
					"lightness": 16
				},
				{
					"visibility": "off"
				}]
			},
			{
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [
				{
					"lightness": 19
				}]
			},
			{
				"featureType": "transit.station.airport",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#d5d5d5"
				}]
			},
			{
				"featureType": "transit.station.rail",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"visibility": "on"
				},
				{
					"color": "#9f9f9f"
				}]
			},
			{
				"featureType": "transit.station.rail",
				"elementType": "labels.icon",
				"stylers": [
				{
					"visibility": "on"
				},
				{
					"weight": "2.14"
				},
				{
					"saturation": "-100"
				},
				{
					"lightness": "15"
				},
				{
					"gamma": "0.90"
				}]
			},
			{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#384950"
				},
				{
					"lightness": 17
				}]
			}];
			
			if($(window).width() <= 1024){
				//var zoomLevel = 2;
				var dragMap = false;
			}else{
				//var zoomLevel = 3;
				var dragMap = true;
				
			}
			var options = {
				mapTypeControlOptions:
				{
					mapTypeIds: ['Styled']
				},
				zoom: 14,
				center:
				{
					lat: parseFloat(lati),
				    lng: parseFloat(lon)
				},
				zoomControl: true,
				zoomControlOptions:
				{
					style: google.maps.ZoomControlStyle.SMALL,
					position: google.maps.ControlPosition.LEFT_BOTTOM
				},
				scrollwheel: false,
				draggable: dragMap,
				disableDefaultUI: true,
				mapTypeId: 'Styled'
			};
			var div = document.getElementById('map-canvas');
			var map = new google.maps.Map(div, options);
			var styledMapType = new google.maps.StyledMapType(styles,
			{
				name: 'Styled'
			});
			map.mapTypes.set('Styled', styledMapType);
			//var image = 'assets/images/map-pin.png';
			var myLatLng = new google.maps.LatLng(parseFloat(lati), parseFloat(lon));
			var mapMarker = new google.maps.Marker(
			{
				position: myLatLng,
				map: map,
				//icon: image,
				icon: new google.maps.MarkerImage('assets/images/map-pin.svg', null, null, null, new google.maps.Size(41,62)), 
				title: 'metacube'
			});
			var infowindow = new google.maps.InfoWindow(
			{
				content: '<div id="content" class="contactMapPopup" style="max-width:300px;">' +
									'<div id="siteNotice">' +
									'</div>' +
									'<div id="firstHeading" class="firstHeading contactMapHead">Metacube HQ</div>' +
									'<div id="bodyContent">' +
									'<p>' + address + '</p>' +
									'<a href="mailto:' + email + '" class="contactMapNumber">' + email + '</a>' +
									'</div>' +
									'</div>'
			});
			google.maps.event.addListener(mapMarker, 'click', function()
			{
				infowindow.open(map, mapMarker);
			});
		}
		//google.maps.event.addDomListener(window, 'load', initialize);
	</script>
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
			<!-------------------- CONTACT IMAGE BANNER -------------------->
			<div id="contact-image-banner" class="all_banners"></div>
			<!-------------------- HORIZONTAL SPACER -------------------->
			<div id="main_wrapper">
				<div class="horizontal-spacer"></div>
				<!-------------------- CONTACT CONTENT -------------------->
				<div class="container">
					<div class="contact-content one">
						<div class="text">
							<table>
								<tr style="vertical-align:top;">
									<td>
										<h3>Contact us</h3>
										<p class="p3 blue">We are in the beautiful pink city of Jaipur.</p>
									</td>
								</tr>
								
								<tr style="vertical-align:bottom">
									<td>
										<p class="p3 black" id="address">
											<br/>
											<br/>
										</p>
										<p class="p4">
											<ul class="contact-list list-unstyled">
												<li id="phone"></li>
												<li id="fax"></li>
												<li id="email"></li>
											</ul>
										</p>
									</td>
								</tr>
							</table>
						</div>
						<div class="image">
							<div id="map-canvas"></div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="contact-content two">
						<div class="text">
							<table>
								<tr style="vertical-align:top;">
									<td>
										<h3>Sales contact</h3>
										<p class="p3 blue" id="sales_name"></p>
									</td>
								</tr>
								<tr style="vertical-align:bottom">
									<td>
										<p class="p4">
											<ul class="contact-list list-unstyled" id="sales_contact">
												
											</ul>
										</p>
									</td>
								</tr>
							</table>
						</div>
						<div class="image mvImgNotHidden">
							<div class="imgwidthcaptionMid conatactMid">
								<div class="mainContP">
									<div class="mainContDIV">
										<img class="mainCont smallCont" id="sales_image" src="" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="contact-content two">
						<div class="text">
							<table>
								<tr style="vertical-align:top;">
									<td>
										<h3>University placements</h3>
										<p class="p3 blue" id="university_name"></p>
									</td>
								</tr>
								<tr style="vertical-align:bottom">
									<td>
										<p class="p4">
											<ul class="contact-list list-unstyled" id="university_contact">
												
											</ul>	
										</p>
									</td>
								</tr>
							</table>
						</div>
						<div class="image mvImgNotHidden">
							<div class="imgwidthcaptionMid conatactMid">
								<div class="mainContP">
									<div class="mainContDIV">
										<img class="mainCont smallCont" id="university_image" src="" alt="" />
									</div>
								</div>
							</div>
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
	<script>
		function smallDeviceFormatting()
		{
			var viewportWidth = $(window).width();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (viewportWidth - containerWidth) / 2;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			$(".contact-content.one").css("height", ((800 / 1180) * containerWidth));
			$(".contact-content.one").css("width", containerWidth);
			$(".contact-content.two").css("height", ((600 / 1180) * containerWidth));
			$(".contact-content.two").css("width", containerWidth);
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
			$(".contact-content.one").css("height", ((460 / 1180) * containerWidth));
			$(".contact-content.one").css("width", containerWidth);
			$(".contact-content.two").css("height", ((320 / 1180) * containerWidth));
			$(".contact-content.two").css("width", containerWidth);
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
		/**** Button animation ******/
		$(".button-ripple").ePulse(
		{
			bgColor: 'rgba(0, 0, 0, 0.5)',
			event: 'mousedown'
		});
		
		function loaddata() {
            $.ajax({
                url: 'include/contactus.php?id=load',
                type: 'post',
                data: {},
                beforeSend: function (request)
                {
                    request.setRequestHeader("token","<?php echo $token; ?>");
                },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    $('#address').html(obj.Records[0].C_ADDRESS);
					$('#phone').html('<a href="tel:' + obj.Records[0].C_PHONE + '">Phone: ' + obj.Records[0].C_PHONE + '</a>')
					$('#fax').html('<a href="tel:' + obj.Records[0].C_FAX + '">Fax: ' + obj.Records[0].C_FAX + '</a>')
					$('#email').html('<a href="mailto:' + obj.Records[0].C_EMAILID + '">Email: ' + obj.Records[0].C_EMAILID + '</a>')
					
					$('#sales_name').html(obj.Records[0].S_C_NAME + ", " + obj.Records[0].S_C_DESIGNATION);
                    $('#sales_image').attr('src', 'admin/uploads/' + obj.Records[0].S_C_IMAGEPATH);
					$('#sales_contact').html('<li><a href="tel: '+ obj.Records[0].S_C_PHONE +'">Phone:  ' + obj.Records[0].S_C_PHONE + '</a></li><li><a href="mailto:' + obj.Records[0].S_C_EMAILID + '">Email: ' + obj.Records[0].S_C_EMAILID + '</a></li>');
					
                    $('#university_name').html(obj.Records[0].U_P_NAME + ", " + obj.Records[0].U_P_DESIGNATION);
                    $('#university_contact').html('<li><a href="tel: '+ obj.Records[0].U_P_PHONE +'">Phone:  ' + obj.Records[0].U_P_PHONE + '</a></li><li><a href="mailto:' + obj.Records[0].U_P_EMAILID + '">Email: ' + obj.Records[0].U_P_EMAILID + '</a></li>');
					$('#university_image').attr('src', 'admin/uploads/' + obj.Records[0].U_P_IMAGEPATH);
					
                    var latlon = obj.Records[0].C_LATLONG.split(",");
                    var lat = latlon[0];
                    var lon = latlon[1];
					
					var address = obj.Records[0].C_ADDRESS;
					var email = obj.Records[0].C_EMAILID;

                    google.maps.event.addDomListener(window, 'load', init(lat, lon, address, email));
					
					$('.no-fouc').removeClass('no-fouc');
					$('.mainContP').hover(function(e){
						var dir = determineDirection($(this), {x: e.pageX, y: e.pageY});
						$(this).find('.mainCont').addClass('direction_'+dir);
					}, function() {
						$(this).find('.mainCont').removeClass('direction_3 direction_1 direction_2 direction_0');
					});
                },
                error: function (e) {

                }
            });

        }
		
	</script>
	
</body>
</html>