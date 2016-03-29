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
	<title>Metacube | Innovation Process</title>
	<meta name="description" content="Our processes are built on Agile - rapid, incremental, adaptive, automated and time-boxed. See the processes that enable innovation.">
	<meta name="keywords" content="Metacube process, Metacube agile development">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--custom css-->	
	<style type="text/css">
		.no-fouc{
			display:none;
		}
	</style>
	<link href="assets/css/process-style.css" rel="stylesheet">
	<link href="assets/css/process-style-1280px.css" rel="stylesheet">
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
		.process-content {
			-ms-transition: all 350ms ease;
			-o-transition: all 350ms ease;
			-webkit-transition: all 350ms ease;
			-moz-transition: all 350ms ease;
			transition: all 350ms ease;
		}
		.pointer-none{
			pointer-events:none;
		}
		body{
			overflow-x:hidden;
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
			<!-------------------- PROCESS IMAGE BANNER -------------------->
			<div id="process-image-banner" class="all_banners">
				<div class="text">
					<h2>INNOVATION</h2>
					<h1>PROCESS</h1>
					<p class="p2">It is about the recipe and the ingredients.</p>
				</div>
				<div class="svg-image">
					<img src="assets/images/process-vector.svg" alt="Processes for Innovation at Metacube" />
				</div>
			</div>
			<!-------------------- PROCESS TEXT BANNER -------------------->
			<div id="main_wrapper">
				<div id="process-text-banner">
					<div class="text">
						<h3>We deliver innovation consistently using the best-of-breed tools and processes.</h3>
						<p class="p3">Today, innovators not only need to make sure their products hit the market as soon as possible, but also need to continuously adapt them based on real-time market feedback. To ensure this, our culture is built around core processes that are rapid, incremental, adaptive, automated and timeboxed. </p>
					</div>
				</div>
				<!-------------------- HORIZONTAL SPACER -------------------->
				<!-- <div class="horizontal-spacer"></div> -->
				<!-------------------- PROCESS CONTENT -------------------->
				<div class="container">
					<div class="process-content agile mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/process/agile-image2.jpg" alt="" />
						</div>
						<div class="inner-content">
							<!-- <div class="pointer-none"> -->
								<h5>BUILT ON AGILE</h5>
								<hr class="invisible" />
								<hr class="white-underline" />
								<img style="object-fit:cover;" src="assets/images/process/agile.svg" />
								<p class="p3">Software product development is evolutionary in nature. With this in mind, we follow Agile processes. This helps improve status visibility, creates fine-grained project control, enables early feedback from you and other stakeholders, lets the project adapt to changes quickly, improves developer motivation, and reduces schedule risk.</p>
							<!-- </div> -->
							<div class="round-common-btn">
								<button class="b2 button--antiman OpenPopUp" data-target="1"><span class="btn-text">more</span></button>
							</div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="process-content collaboration mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/process/collaboration-image2.jpg" alt="" />
						</div>
						<div class="inner-content">
								<h5>COLLABORATION IS KEY</h5>
								<hr class="invisible" />
								<hr class="white-underline" />
								<img style="object-fit:cover;" src="assets/images/process/collaboration.svg" />
								<p class="p3">We believe in a collaborative process, where all stakeholders are continuously engaged as a team and have joint ownership and responsibility towards successful execution of the project.</p>
								<div class="round-common-btn">	
									<button class="b2 button--antiman OpenPopUp" data-target="2"><span class="btn-text">more</span></button>
								</div>
						</div>
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="process-content global-teams mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/process/global_team.jpg" alt="" />
						</div>
						<div class="inner-content">
								<h5>GLOBAL TEAMS IS THE ORDER OF THE DAY</h5>
								<hr class="invisible" />
								<hr class="white-underline" />
								<img style="object-fit:cover;" src="assets/images/process/global-teams.svg" />
								<p class="p3">We work closely with you to put the right infrastructure and tools in place that enable global teams to execute distributed development and remote collaboration in a seamless manner.</p>
								<div class="round-common-btn">
									<button class="b2 button--antiman OpenPopUp" data-target="3"><span class="btn-text">more</span></button>
								</div>
						</div>
						<!-- <div class="dh-overlay"></div> -->
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="process-content engineering-practices mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/process/engineering-image2.jpg" alt="" />
						</div>
						<div class="inner-content">
								<h5>BEST ENGINEERING PRACTICES</h5>
								<hr class="invisible" />
								<hr class="white-underline" />
								<img style="object-fit:cover;" src="assets/images/process/engineering-practices.svg" />
								<p class="p3">How do we bring you production-ready functionality in each iteration while ensuring that previously developed functionality does not break down?</p>
								<div class="round-common-btn">
									<button class="b2 button--antiman OpenPopUp" data-target="4"><span class="btn-text">more</span></button>
								</div>
						</div>
						<!-- <div class="dh-overlay"></div> -->
					</div>
					<!-------------------- HORIZONTAL SPACER -------------------->
					<div class="horizontal-spacer"></div>
					<div class="process-content quality mainContP">
						<div class="mainContDIV mainContDIVHidden">
							<img class="mainCont cssCount" src="assets/images/process/quality-image2.jpg" alt="" />
						</div>
						<div class="inner-content">
								<h5>QUALITY IS NOT AN AFTERTHOUGHT</h5>
								<hr class="invisible" />
								<hr class="white-underline" />
								<img style="object-fit:cover;" src="assets/images/process/quality.svg" />
								<p class="p3">To build a product for you of the finest quality, our QA team is engaged in every step of the development process continuously testing stories within a sprint. Besides manually testing the stories, we have extensive expertise in test automation.</p>
								<div class="round-common-btn">
									<button class="b2 button--antiman OpenPopUp" data-target="5"><span class="btn-text">more</span></button>
								</div>
						</div>
						<!-- <div class="dh-overlay"></div> -->
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
				<h6>Innovation Process</h6>
				<div class="h48p">Built on agile</div>
				<p class="p3">Guiding principles of Agile processes</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					
					<div class="text">
						<p class="p3">At the early stages of evolution of software engineering, attempts were made to borrow successful ideas from other classical engineering branches and implant them into the software development process. These attempts to replicate the linear progression from requirements to design to construction, which worked well in classical engineering, have met with stunning failure when applied to software product development.</p>
						<p class="p3">Software product development is evolutionary in nature and requires all the stakeholders to actively engage and discover the various dimensions of the software. As the software evolves, greater is the discovery and the opportunity to provide feedback. Classical engineering processes which force freezing of artefacts at each stage, with changes at later stage being expensive exceptions, are counter intuitive in the domain of software development.</p>
						<p class="p3">The above realizations have led to the development of Agile processes that focus on continuous iterative delivery of useful working software based on customer priority, thus enabling collaborative involvement of all the stakeholders.</p>
						
						<p class="p3">Agile methods break the feature to be developed into self-contained prioritized stories. These stories are bucketed into short duration iterations or sprints that typically last from one to four weeks. In each iteration a team works through the full software development cycle including planning, requirement analysis, design, coding, unit testing and acceptance testing when a working product is demonstrated to stakeholders.</p>

						<p class="p3">This approach improves status visibility, creates fine-grained project control, enables early feedback from stakeholders and customers, lets the project adapt to changes quickly, improves developer motivation and reduces schedule risk.</p>

						<p class="p3">The core principles underlying agile engineering can be summarised as follows:</p>
						
						<p class="p3"><span class="text_bolder">Customer drives the priority</span>
							Customer requirements are broken down into independent self-contained stories. These stories are prioritized by the customer, and are picked up for development accordingly.
						</p>	
						<p class="p3"><span class="text_bolder">Software product development is not predictive</span>
							Classical life cycles believed that software development is predictive, where engineering teams could gather detailed requirements from the customer upfront, and could disappear after that to resurface after a long time with “apparently” finished software. Agile philosophy believes that predictive life cycles do not work for most software product development projects because product development is mostly an evolutionary process. 
						</p>
						<p class="p3"><span class="text_bolder">Software product development is adaptive </span>
							Agile methodology believes that product development happens through discovery which is enabled through rapid, frequent and incremental delivery of working software to the customer in micro bursts. This actively engages the customers throughout the product development life cycle and empowers them to discover more and provide early valuable feedback. The engineering team continuously adapts the product to incorporate the feedback received from the customer. 
						</p>
						<p class="p3"><span class="text_bolder">Working software is the primary measure of progress</span>
							In classical methodologies working software appeared only towards the end of product development life cycle, and hence the progress had to be measured in different ways during different stages of the life cycle. The measurement was difficult and inaccurate. In agile methodology working software meeting customer acceptance criteria is the primary measure of progress, and is easy and accurate to measure.
						</p>
						<p class="p3"><span class="text_bolder">Self-organizing coherent teams</span>
							Agile philosophy believes in small self-organizing teams built around motivated individuals who are committed to a work environment that promotes joint ownership, collaboration and transparency. The team is flat and has a facilitator, such as Scrum Master, who coordinates meetings, identifies any roadblocks in delivery and ensures that these roadblocks are addressed in time.
						</p>
						<p class="p3"><span class="text_bolder">Periodic self-reflection</span>
							Agile process typically ensures periodic self-reflection for the team where the team reflects on what is working well and what is not working well. The team collectively figures out how to become more effective, and accordingly fine tunes the processes and behaviour.
						</p>
						<p class="p3"><span class="text_bolder">Technical excellence</span>
							Agie methodology promote continuous attention to technical excellence and good design. Any shortcomings in design or coding are identified early and refactored to continuously minimize technical debt.
						</p>
						<p class="p3">Metacube has gained several years of experience and expertise in various flavours of Agile methodologies such as Scrum, Kanban, Scrumban, XP and has leveraged them to successfully transform ideas into products. We also adapt to specific customer processes that may already be in place. Scrum has emerged the most favored variant amongst agile processes.
						</p>
						<p class="p3">Implementation of any of these processes requires adoption of an appropriate planning and tracking tool. Metacube is adept at using a range of such tools including Jira, Pivotal, Rally, Assembla, TFS etc.
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
				<h6>Innovation Process</h6>
				<div class="h48p">Collaboration is the key </div>
				<p class="p3">Agile demands continuous collaboration amongst all stakeholders </p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Agile development is a collaborative process where all stakeholders are continuously engaged  and have complete visibility into the project. Agile development very deftly weaves appropriate steps into the process that ensure continuous collaboration and complete visibility across all stakeholders. </p>
						
						<p class="p3"><span class="text_bolder">Collaborative story time</span>
							Product backlog is a central repository of prioritized user stories, and is a critical resource in agile development. While the customers or product owners are responsible for identifying and prioritizing these stories, they work collectively with the engineering team to prime or groom these stories to the extent that these can be picked up by the engineering team for development. Grooming also includes sizing the stories and developing acceptance criteria for these stories. Agile process provides for collaborative story time that is used to prime or groom stories in the product backlog.
						</p>	
						<p class="p3"><span class="text_bolder">Planning sessions</span>
							Agile methodology recommends release planning session at the beginning of each release where the team works collectively to select, size and further refine stories to be included in a release. The selection is driven by the priorities assigned to the stories by the product owners.
						</p>
						
						<p class="p3">Similarly sprint planning sessions are recommended at the beginning of each sprint, where the team members pull stories from release backlog into the sprint based on the team velocity, and collectively commit to them. A sprint is considered to be a success if all the stories committed to for the sprint are complete and accepted by the testing team and product owner.
						</p>
						
						<p class="p3"><span class="text_bolder">Daily standups</span>
							The entire team meets once in a day for a short period of 15-30 minutes, where each team member reports on what he did yesterday, what he plans to do today, and if he is stuck because of some issue. These daily meetings, also called daily standups provide a powerful mechanism to transparently share the progress and assess any risks or roadblocks in successful completion of sprint. Any risks or roadblocks are managed proactively. 
						</p>
						<p class="p3"><span class="text_bolder">Acceptance testing by product owners </span>
							A story is considered to be done only when the product owner tests and accepts the story delivered by the engineering team. The acceptance criteria for a story is generally defined at the beginning of the sprint itself. This ensures that the customer is fully engaged in the development process and provides continuous feedback to the engineering team. It also ensures that the product released at the end of a sprint is a working software that is fully tested and meets the requirements of the end user.
						</p>
						<p class="p3"><span class="text_bolder">Retrospective sessions</span>
							One of the cornerstones of agile development is self-organizing mature teams that can reflect on their performance and continuously improve. Hence agile development lays emphasis on retrospective sessions at the end of each sprint and release to review what is working well and what can be further improved.
						</p>
						
						<p class="p3">We at Metacube fully understand the importance of continuous engagement and feedback from all stakeholders for the success of agile product development. Our teams are coached into playing an active role in these planning, standup and review sessions. We also make sure that the process achieves transparency across the team, thereby ensuring that each of our team member understands the individual and team responsibilities and expectations, and is fully committed to them. 
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
				<h6>Innovation Process</h6>
				<div class="h48p">Global teams is the order of the day</div>
				<p class="p3">Distributed development and collaboration tools are mandatory for success</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Ideally the agile team should be co-located in a single room, but with the best talent and stakeholders being distributed globally, global teams are increasingly becoming the order of the day. For the success of the global teams one needs to create the right infrastructure that is an enabler for remote collaboration. Hence all project resources should be accessible remotely, and the team members should we able to work, communicate and collaborate from their respective locations. </p>
						
						<p class="p3">Advancements in software engineering practices, open source systems and cloud platforms have contributed tremendously to creation of an ecosystem that enables distributed development and collaboration in a very powerful manner. Some of the tools that support distributed development and collaboration include:</p>
						
						<table class="popTable">
							<tr>
								<th>Tool Category</th>
								<th>Tool Examples</th>
							</tr>
							<tr>
								<td>Online Meeting</td>
								<td>Skype, GoToMeeting, Google Hangouts, Webex</td>
							</tr>
							<tr>
								<td>Group Chat and Messaging</td>
								<td>Slack, HipChat, Skype</td>
							</tr>
							<tr>
								<td>Content Sharing</td>
								<td>Google Drive, Dropbox, Confluence, Sharepoint</td>
							</tr>
							<tr>
								<td>Project Tracking</td>
								<td>Project Tracking JIRA, Assembla, Pivotal, Rally, TFS, Asana, Trello, VersionOne</td>
							</tr>
							<tr>
								<td>Source Code Repository</td>
								<td>GitHub, BitBucket </td>
							</tr>
							<tr>
								<td>Application Deployment Infrastructure</td>
								<td>AWS, Heroku, Google App Engine, Azure</td>
							</tr>
						</table>
						
						<p class="p3">Metacube since its inception has been working with remote customers, with project teams being distributed across continents. We have developed deep experience in distributed development and collaboration tools, and working with global teams has become our second nature.
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
				<h6>Innovation Process</h6>
				<div class="h48p">Best engineering practices</div>
				<p class="p3">Continuous delivery of production ready code needs field proven practices</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">Agile engineering demands delivering quality working software every iteration. Frequent delivery of quality software is made possible by utilising the best practices in engineering, and we adhere to these practices.</p>
						
						<p class="p3">Our teams successfully balance the challenging tasks of delivering production ready functionality at every iteration, while ensuring that previously developed functionalities do not break down.</p>
						
						<p class="p3"><span class="text_bolder">Test driven development</span>
						Test driven development ensures verifiability of software through a suit of unit tests defined by the developers. Test frameworks like TestNG, JUnit, NUnit, EasyMock Mockito, Mocha, Jasmine, RSpec have made this approach practical, and when integrated with the continuous build process it ensures that the code is kept not only in the buildable state but also in the verifiable state as defined by the unit test suite. Other than keeping the code in verifiable state, test driven development also has other advantages:
						</p>	
						<ul class="pop_list">
							<li>writing test cases ensures that the developer has understood the requirements </li>
							<li>test cases become an integral part of requirements and code documentation</li>
							<li>greatly improves the quality of code as it forces the developer to minimize the dependencies</li>
						</ul>
						<p class="p3"><span class="text_bolder">Design patterns and refactoring</span>
						Use of design patterns is highly recommended in Agile as they not only assist in developing software that conforms to design principles, but also help in communication within the engineering team. Over the years, open source community has contributed to development of many frameworks such as Spring, Hibernate, log4j, AngularJS, Ember.js, Ruby on Rails, Appcelerator Titanium, CakePHP, Express and Bootstrap that implement best design practices, and it is highly recommended that these frameworks should be leveraged in the product. This not only reduces the effort involved in engineering, but also ensures that design and code is of high quality thus minimizing technical debt. Agile methodology would generally suggest avoiding over engineering till the need for the same is felt. However, the code is continuously improved to the extent feasible through reviews and code refactoring.
						</p>
						<p class="p3"><span class="text_bolder">Continuous builds, integration and deployment</span>
						Short iteration cycles and distributed teams mandate that code must always be kept in a buildable state rather than end of the cycle rush at system integration and building the release. This has now become practical and achievable through use of powerful build tools like Maven and Ant; and continuous integration tools like Jenkins, Hudson, Bamboo and CruiseControl. 
						</p>
						<p class="p3"><span class="text_bolder">Documentation</span>
						Agile emphasizes working software as the primary measure of progress. This, combined with the preference for verbal communication, produces less written documentation than other methods—though, in an agile project, documentation and other artifacts rank equally with working product.
						</p>
						<p class="p3">The litmus test to decide whether a piece of documentation or artifact is a critical deliverable is to identify whether that artifact is kept live, or it slowly becomes stale and is not updated with time. In Agile the critical artifacts are- documented code, automated unit test cases, QA test plan, QA test cases and acceptance criteria. These are live elements of the software and are to be always current.</p>
						<p class="p3"><span class="text_bolder">Documented coding standards and code reviews</span>
						It is advisable that the agile team maintains documented coding standards, and adherence to same is ensured through appropriate settings in IDEs and automated style checks and code reviews using tools or plugins like PMD, CheckStyle, SonarQube, JSHint and Checkmarx. Manual code reviews for design and code quality are also recommended to improve code quality and also to share knowledge thereby improving team capabilities. <br />Metacube ensures that new team members are mentored in these best practices.  The team members are also encouraged to keep in step with the new developments that continue to emerge in the software industry.

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <input type="hidden" value="<?php echo $token; ?>" id="token" />
	<div class="popUp3_col" id="popUp5">
		<a href="" class="closebtnIcon closebtnIconJS"></a>
		<div class="pop_header">
			<div class="inner-content">
				<h6>Innovation Process</h6>
				<div class="h48p">Quality is not an afterthought</div>
				<p class="p3">Quality is built into the process right from the first step</p>
			</div>
		</div>
		<div class="popUp3_colInner">
			<div class="container">
				<div class="news-inside-content">
					<div class="text">
						<p class="p3">In Agile development quality is not an afterthought where QA team gets active once the development for a release is complete and they can now test the software. </p>
						
						<p class="p3">Agile mandates that QA team is engaged in every step of the development process, and they continuously test stories within a sprint as soon as each gets completed. Once QA team accepts the story the same is handed over to the product owner for acceptance and closure. This ensures that product owners, developers and QA engineers are all on the same page with respect to what is expected from a story, what is the acceptance criteria and whether it is complete from all aspects.</p>
						
						<p class="p3">Metacube QA team has several years of experience working in Agile projects, and they play a key role in the delivery of high quality software. They are engaged from the beginning of the development life cycle working in parallel with the developers; participating in grooming of stories, developing acceptance criteria, developing test cases, ensuring coverage, building regression suites, testing, certifying the release etc.
						</p>	
						<p class="p3">Other than manually testing the stories, Metacube QA team has developed expertise in test automation. Test automation is a critical requirement for effective agile development, as agile entails incremental adaptive development with rapid and frequent releases of the product. Short frequent releases do not provide sufficient time manual certification of a release.
						</p>
						<p class="p3">Our core automation experience is listed as below:
						</p>
						<ul class="pop_list">
							<li>Hands on experience in designing and implementing functional automation framework using Selenium web driver with multiple technology integration including Ruby, Capybara, Rspec, Java/TestNG and .net/TestNG.</li>
							<li>Rich experience in performance testing using Jmeter.</li>
							<li>Hands on experience in developing unit tests in Java and Apex language.</li>
							<li>Experience in continuous integration tools like Jenkins for automated execution of regression suit with each build. </li>
							<li>Experience in cloud based tools like Sauce Labs for running and tracking regression automation suits.</li>
							<li>Experience in testing of web services using rest client and Soap UI and automating them.</li>
						</ul>
						<p class="p3">A majority of QA team members at Metacube are ISTQB certified, which gives them an edge in understanding the testing needs for an application, and testing it rigorously to make it error free.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- pop up -->
	
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- <script src="assets/js/modernizr-custom.js"></script> -->
	<script src="assets/js/scripts.js"></script>
	<!-- <script src="assets/js/jquery.directional-hover.min.js"></script>	 -->
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
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = Math.floor((viewportWidth - containerWidth) / 2);
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
		}
		function largeDeviceFormatting()
		{
			var viewportWidth = $(window).width();
			var viewportHeight = $(window).height();
			var containerWidth = Math.floor((92.1875 / 100) * viewportWidth);
			var horizontalSpacerHeight = (1.5625 / 100) * viewportWidth;
			$(".horizontal-spacer").css("height", horizontalSpacerHeight);
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