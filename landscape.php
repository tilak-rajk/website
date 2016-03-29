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
	<title>Metacube | Innovation Landscape</title>
	<meta name="description" content="At Metacube Software, we drive innovation across cloud, mobility, Internet of Things, data science and social informatics.">
	<meta name="keywords" content="Metacube technologies, Metacube innovation, Metacube products, Metacube services">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/landscape-style.css" rel="stylesheet">
	<link href="assets/css/landscape-style-1280px.css" rel="stylesheet">
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
		#landscape-content .text {
			-ms-transition: all 350ms ease;
			-o-transition: all 350ms ease;
			-webkit-transition: all 350ms ease;
			-moz-transition: all 350ms ease;
			transition: all 350ms ease;
		}
		/*
		#landscape-content .text:hover {
			background-color: #0397ff;
		}
		
		
		#landscape-content .text:hover h5,
		#landscape-content .text:hover .p3 {
			color: #fff;
		}
		#landscape-content .text:hover hr.blue-underline {
			background-color: #fff;
		}
		#landscape-content .text:hover .b1{
			border:1px solid #fff;
		}	
		*/
		/*#landscape-content .text:hover .btn-text {
			color: #fff;
		}*/
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
			<!-------------------- LANDSCAPE IMAGE BANNER -------------------->
			<div id="landscape-image-banner" class="all_banners">
				<div class="text">
					<h2>INNOVATION</h2>
					<h1>LANDSCAPE</h1>
					<p class="p2">We’re into great ideas, great technology and great products.</p>
				</div>
				<div class="svg-image">
					<img src="assets/images/landscape-vector.svg" alt="Metacube Innovation Technologies" />
				</div>
			</div>
			
			<!-------------------- LANDSCAPE TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="landscape-text-banner">
					<div class="text">
						<h3>Working with the world’s best innovators gives us the edge.</h3>
						<p class="p3">When you partner with us, you gain from our years of expertise in path-breaking developments in cloud computing, mobile networks and handheld devices. We are also actively engaged in today’s emerging technologies – Big Data, Social Informatics and Internet of Things.</p>
					</div>
				</div>
				<!-------------------- LANDSCAPE CONTENT -------------------->
				<div class="container">
					<div id="landscape-content">
						<div class="row">
							<div class="image"><img src="assets/images/landscape/cloud.svg" alt="Cloud" />
							</div>
							<div class="text">
								<table style="height:100%;">
									<tr style="vertical-align:top;">
										<td>
											<h5>CLOUD</h5>
											<hr class="invisible" />
											<hr class="blue-underline" />
											<p class="p3">
												Since 2007, we have been assisting companies in building products on
												the Salesforce platform. We are a member of Salesforce’s product
												development organization. We also work extensively on Google App
												Engine, Amazon Web Services, Heroku and Azure.
											</p>
										</td>
									</tr>
									<tr style="vertical-align:bottom">
										<td>
											<div class="round-common-btn">
												<button class="b2 button--antiman OpenPopUp" data-target="1"><span class="btn-text">more</span></button>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<!-------------------- HORIZONTAL SPACER -------------------->
						<div class="horizontal-spacer"></div>
						<div class="row">
							<div class="image"><img src="assets/images/landscape/mobility.svg" alt="Mobility" />
							</div>
							<div class="text">
								<table style="height:100%;">
									<tr style="vertical-align:top;">
										<td>
											<h5>MOBILITY</h5>
											<hr class="invisible" />
											<hr class="blue-underline" />
											<p class="p3">Our expert mobile development team has years of experience developing native apps for iOS, Android, Windows and Symbian platforms. We’ve also done extensive development in HTML5-enabled hybrid mobile frameworks such as Sencha Touch, Appcelerator Titanium and Ionic. </p>
										</td>
									</tr>
									<tr style="vertical-align:bottom">
										<td>
											<!-- <button class="b1"><span class="btn-text">+ more</span></button> -->
											<div class="round-common-btn">
												<button class="b2 button--antiman OpenPopUp" data-target="2"><span class="btn-text">more</span></button>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<!-------------------- HORIZONTAL SPACER -------------------->
						<div class="horizontal-spacer"></div>
						<div class="row">
							<div class="image"><img src="assets/images/landscape/data-science.svg" alt="Data Science" />
							</div>
							<div class="text">
								<table style="height:100%;">
									<tr style="vertical-align:top;">
										<td>
											<h5>DATA SCIENCE</h5>
											<hr class="invisible" />
											<hr class="blue-underline" />
											<p class="p3">We can enable you to harness the true potential of data through mining, predictive modelling, machine learning and data visualization techniques; using open source tools like R, Weka, Mahout and scikit-learn. Our team is also adept at big data platforms like Hadoop, Spark, Solr, MongoDB, Giraph, Pregel and neo4j.</p>
										</td>
									</tr>
									<tr style="vertical-align:bottom">
										<td>
											<div class="round-common-btn">
												<button class="b2 button--antiman OpenPopUp" data-target="3"><span class="btn-text">more</span></button>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<!-------------------- HORIZONTAL SPACER -------------------->
						<div class="horizontal-spacer"></div>
						<div class="row">
							<div class="image"><img src="assets/images/landscape/social-informatics.svg" alt="Social Informatics" />
							</div>
							<div class="text">
								<table style="height:100%;">
									<tr style="vertical-align:top;">
										<td>
											<h5>SOCIAL INFORMATICS</h5>
											<hr class="invisible" />
											<hr class="blue-underline" />
											<p class="p3">Your marketing budget needs to be focused on the right set of people. By combining your customer data with data and insights from social networks, we can identify people within your customers, followers and employees that have high social capital or are the key influencers.</p>
										</td>
									</tr>
									<tr style="vertical-align:bottom">
										<td>
											<div class="round-common-btn">
												<button class="b2 button--antiman OpenPopUp" data-target="4"><span class="btn-text">more</span></button>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<!-------------------- HORIZONTAL SPACER -------------------->
						<div class="horizontal-spacer"></div>
						<div class="row">
							<div class="image"><img src="assets/images/landscape/internet-of-things.svg" alt="Internet of Things" />
							</div>
							<div class="text">
								<table style="height:100%;">
									<tr style="vertical-align:top;">
										<td>
											<h5>INTERNET OF THINGS</h5>
											<hr class="invisible" />
											<hr class="blue-underline" />
											<p class="p3">We can help you identify how IoT can add value to your product and implement the software stack for your IoT strategy - including data collection, analytics and mobile front-end.</p>
										</td>
									</tr>
									<tr style="vertical-align:bottom">
										<td>
											<div class="round-common-btn">
												<button class="b2 button--antiman OpenPopUp" data-target="5"><span class="btn-text">more</span></button>
											</div>
										</td>
									</tr>
								</table>
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
	
	<!-- pop up -->
	<div class="popUp3_col" id="popUp1">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Landscape</h6>
				<div class="h48p">Cloud Computing</div>
				<p class="p3">New paradigm transforming IT needs into services</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">The ubiquitous 24x7 availability of high-speed internet has made the prophecy “network is the computer” a reality, and this phenomenon is being increasingly referred to as “Cloud Computing”. Cloud Computing can be loosely defined as accessing computing, storage and software resources over the Internet as shared services. </p>
						
						<p class="p3">Cloud Computing has been a central focus of growth for us over last several years; and we are fully committed to help organizations adopt solutions over the cloud, as well as to build new products or services on the cloud.</p>	
						
						<p class="p3">It was in early 2007 that we started working on the Salesforce platform as a development partner for a highly innovative, dynamic and fast growing company in the cloud computing space. We have since then worked with several product companies helping them build products on the force.com platform in a variety of domains including quote to cash cycle, supplier diversity management, professional services, financial accounting, and dealer management. 
						</p>
						
						<p class="p3">We are also a member of the Salesforce’s product development organization that helps ISVs build products on the force.com platform. 
						</p>
						
						<p class="p3">We have leveraged other private and public cloud platforms like Google App Engine, Heroku, Amazon EC2 and Microsoft Azure to develop and deploy cloud based solutions for ecommerce, global trade management, manufacturing analytics, and supply chain compliance visibility. These solutions have been developed using variety of languages and frameworks including Java, .net, Ruby, Python and node.js. 
						</p>
						<!-- <a href="" class="popUpLinks"><p class="p3">CLOUD COMPUTING PRIMER >></p></a> -->
						<div class="tac">
							<button class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href='http://bombaydc.com/metacube/php/blog-inside.html?id=24'},500);" style="cursor: pointer;"><span class="btn-text">cloud computing primer</span></button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp2">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Landscape</h6>
				<div class="h48p">Mobility</div>
				<p class="p3">Transforming world into a global village</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">The path breaking developments in mobile data networks, cloud computing, and handheld devices; has transformed this world into a global village with people being virtually together for 24x7 hours at will. These transformational developments have got the entire next generation excited and full of ideas about how they wish to connect, interact, learn, work and entertain.</p>
						
						<p class="p3">The variety of devices via which users are consuming services has grown rapidly both in terms of the underlying operating system (Android, iOS, Windows, Blackberry OS), and the display size. This variety throws certain challenges in terms of choosing the right approach for developing mobile clients. </p>	
						
						<p class="p3">One needs to choose between developing web applications that are also mobile compliant, versus developing hybrid mobile applications that run on all mobile devices, versus developing dedicated native applications for each mobile platform such as Android and iOS.
						</p>
						
						<p class="p3">We have an expert mobile app development team that has worked extensively on developing both hybrid and native mobile apps. We have developed native apps for iOS, Android, Windows and Symbian platforms. We've also worked extensively on HTML5-enabled hybrid mobile frameworks such as Sencha Touch, Appcelerator Titanium, Ionic, Salesforce1 and Appery. Apart from development, we've also undertaken a number of testing projects focusing on usability and performance testing of smartphone and tablet applications.
						</p>
						
						<p class="p3">A few illustrative mobile projects that we have done over the years include: </p>
						
						<ul class="pop_list">
							<li>CRM app for sales team of large investment bank for managing leads, opportunities and tracking accounts</li>
							<li>Mobile client for B2B eCommerce portal in office supplies space with support for white labeling and branding</li>
							<li>Mobile dashboard for manufacturing performance analytics</li>
							<li>App to support compliance workflow across warehouses, distributors, dealers and compliance agencies for the food supply industry</li>
							<li>Mobile client for cloud based file storage service</li>
							<li>App to collect daily fitness activity data for children that generates analytics for parents and healthcare experts</li>
							<li>Messaging app for government employees that enables them to discover, connect and collaborate with each other</li>
						</ul>
						<!-- <a href="" class="popUpLinks"><p class="p3">MOBILITY PRIMER >></p></a> -->
						<div class="tac">
							<button class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href='http://bombaydc.com/metacube/php/blog-inside.html?id=8'},500);" style="cursor: pointer;"><span class="btn-text">MOBILITY PRIMER</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp3">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Landscape</h6>
				<div class="h48p">Data Science</div>
				<p class="p3">Making sense of mountains of data</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">With the proliferation of technology in every aspect of life, huge amount of data is being collected each day. The volume, velocity and variety of this data is becoming larger by the day. The potential of this data is tremendous, and careful analysis and visualization of this data can help organizations decipher patterns, make predictions and come up with multiple actionable items.</p>
						
						<p class="p3">At Metacube we offer services in Data Mining, Predictive Modelling, Machine Learning, and Data Visualization to help organizations harness the true potential of the data they are collecting. These services can be used in general to learn from historical data and make predictions for the future.</p>	
						
						<p class="p3">As an illustration we could help you do Frequent Itemset Mining, also referred to as Market Basket Analysis, to find the group of items which are most frequently bought by customers in the same transaction. Once such items are identified, you can launch offers and marketing campaigns which cover groups of such items. As another illustration the data science techniques can be used to do customer churn prediction based on their behavioural data. Hence using a combination of domain specific knowledge and data science we can help you identify trends in customer behaviour and segment customers into different categories.
						</p>
						
						<p class="p3">There are several open source tools and frameworks that support machine learning and data mining; and we have been working with a few popular ones including R, Weka, Mahout and scikit-learn.
						</p>
						
						<p class="p3">Majority of data science applications need to deal with huge amount of data for which the traditional approaches for capturing, analysing and processing are inadequate. The modern approaches, popularly referred to as Big Data techniques, address these challenges by storing and processing the data on distributed connected machines, instead of doing it on a single large machine. Our team has gained good experience on various tools in the big data ecosystem including Apache Hadoop, Solr, MongoDB, Apache Spark, Giraph, Pregel and neo4j.</p>
						
						<div class="tac">
							<button class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href='http://bombaydc.com/metacube/php/blog-inside.html?id=4'},500);" style="cursor: pointer;"><span class="btn-text">DATA SCIENCE PRIMER</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp4">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Landscape</h6>
				<div class="h48p">Social Informatics</div>
				<p class="p3">A new medium with far reaching impacts</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">With the proliferation of technology in every aspect of life, huge amount of data is being collected each day. The volume, velocity and variety of this data is becoming larger by the day. The potential of this data is tremendous, and careful analysis and visualization of this data can help organizations decipher patterns, make predictions and come up with multiple actionable items.</p>
						
						<p class="p3">Our team is also trained in various aspects of Social Network Analysis and has participated in cutting edge research leading to academic publications at many reputed conferences and journals. We can help you mine data from various social networking sites such as Facebook, LinkedIn, Twitter etc. to identify people with high social capital value or the key influencers within your customers, followers, members or employees. This combined with your private customer data can help you focus your marketing budget on the right set of people. You can also mine the social media to do sentiment analysis about your company or products.</p>	
						
						<p class="p3">We are currently working with a research lab that has developed an application to mine the social media in real time to help agencies in responding to public disasters like earthquake, hurricane and floods. It collects tweets in real-time and classifies them using machine learning techniques. These classified tweets can then be used by the agencies to plan and take appropriate action. 
						</p>
						
						<p class="p3">Other than leveraging the big data and machine learning tools for social network analysis, we have also used specialized tools such as Giraph, Pregel and GraphLab for analyzing social networks.
						</p>
						
						<div class="tac">
							<button class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href='http://bombaydc.com/metacube/php/blog-inside.html?id=27'},500);" style="cursor: pointer;"><span class="btn-text">SOCIAL NETWORK ANALYSIS PRIMER</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="popUp3_col" id="popUp5">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Landscape</h6>
				<div class="h48p">Internet of Things</div>
				<p class="p3">Opening whole new possibilities to improve human life</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">After world wide web and mobile, the next big technological wave for masses is Internet of Things - IoT. The number of connected devices is already more than the number of people in the world and the researchers are predicting that there will be about 30-100 billion connected devices by 2020. That is more than 4 devices per person on average. Gartner predicts that IoT will generate $2 trillion in cost savings and improved productivity by 2020. Sectors like Industrial Automation, Healthcare, Transportation, Logistics, Security, Power and Home Automation have already made huge investments in IoT space. Some of the well-known innovations that are already making it big are - Fitbit, Nest, Google Glass, iWatch and Google Car. </p>
						
						<p class="p3">Along with the immense possibilities offered by these smart devices to improve human lives, there are also a lot of challenges like privacy, security, lack of standards for openness and interoperability. Another challenge in the field of IoT will be to bridge the gap between the people who understand everything about the hardware and electronics of the devices, and the people who are going to write the software to interact with these devices. For example, a company trying to build a smart thermostat will know all about the electronics and hardware of the device but nothing or very little about the associated software. These billions of connected devices will also create a huge amount of data and we will need specialized technologies to store and analyze this data. </p>	
						
						<p class="p3">We can help you identify how IoT can add value to your product and implement the software stack for your IoT strategy including data collection, analytics and mobile front-end.
						</p>
						
						<div class="tac">
							<button class="b3 button-ripple ui-btn ui-corner-all blue-btn-style" onclick="setTimeout(function () {window.location.href='http://bombaydc.com/metacube/php/blog-inside.html?id=26'},500);" style="cursor: pointer;"><span class="btn-text">IoT Primer</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- pop up -->
	
	
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
	<script>
		function smallDeviceFormatting()
		{
			var viewportWidth = $(window).width();
			var viewportHeight = $(window).height();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth); /* container is 92.1875% of viewport width */
			//Calculate the relative spacing between the grid elements for the current viewport width
			// and adjust the grid elements accordingly
			var horizontalSpacerHeight = Math.floor((viewportWidth - containerWidth) / 2);
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
			var rowWidth = containerWidth;
			var rowHeight = Math.floor(0.45 * viewportHeight);
			//$("#landscape-content .row").css("height", rowHeight);
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
			var rowWidth = containerWidth;
			var rowHeight = Math.floor((450 / 1180) * containerWidth);
			//$("#landscape-content .row").css("height", rowHeight);
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
			
		});
	</script>
	
	
</body>
</html>