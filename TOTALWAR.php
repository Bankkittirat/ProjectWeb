<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CSGAMESTORE &mdash; The best game store ever</title>

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<?php session_start();  
    include('login/condb.php');

    $ID = $_SESSION['ID'];
    $name = $_SESSION['name'];
	$level = $_SESSION['level'];
	$loginn = $_SESSION['login_in'];
 
	?>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

        <div class="gtco-loader"></div>
	
        <div id="page">
    
            <nav class="gtco-nav" role="navigation">
                <div class="gtco-container">
                    
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <div id="gtco-logo"><a href="index2.php">CSGAMESTORE</div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
							<?php if ($loginn == 1){
									
									echo "<li> $name as $level</li>";
									echo "<li><a href='http://localhost/beryllium/login/logout.php'>Logout</a></li>";
							}
								else{
									echo "<li><a href='http://localhost/beryllium/login/'>Login</a></li>";
									echo "<li><a href='http://localhost/beryllium/login/register.php'>REGISTER</a></li>";
								}
							?>
							<li><a href="about.php">about</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </nav>

		

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Total War: THREE KINGDOMS</h2>
						<p>Total War: THREE KINGDOMS is the first in the multi award-winning strategy series to recreate epic conflict across ancient China. Combining a gripping turn-based campaign game of empire-building, statecraft and conquest with stunning real-time battles, Total War: THREE KINGDOMS redefines the series in an age of heroes and legends.</p>
                            <video width="650" controls autoplay>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256751447/movie480.webm?t=1558620943" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256751447/movie480.webm?t=1558620943" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/779340/Total_War_THREE_KINGDOMS/" target="_blank">Steam</a>.
                          </p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
                        
						<p class="mt-md"><a href="#" class="btn btn-special btn-block">BUY NOW</a></p>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/779340/extras/02.jpg?t=1583425545" alt="" class="img-responsive">
									<h2>ANCIENT CHINA RECREATED</h2>

									<p> Discover Three Kingdoms China, a land of breath-taking natural beauty. Battle across lush subtropics, arid deserts and snow-capped mountains. Marvel at legendary landmarks like the Great Wall of China and the Yangtze River. Explore the length and breadth of ancient China as you restore harmony to its embattled landscape.</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/779340/extras/04.jpg?t=1583425545" alt="" class="img-responsive">
									<h2>GUANXI SYSTEM</h2>

									<p>Modelled on Guanxi, the Chinese concept of dynamic inter-relationships, Total War: THREE KINGDOMS takes a paradigm-shifting approach to character agency, with iconic, larger-than-life heroes and their relationships defining the future of ancient China. Each of these characters is brought to life with their own unique personality, motivations, and likes/dislikes. They also form their own deep relationships with each other, both positive and negative, that shape how your story plays out.
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/779340/extras/05.jpg?t=1583425545" alt="" class="img-responsive">
									<h2>ARTISTIC PURITY</h2>
                                    With stunning visuals and flamboyant Wushu combat, THREE KINGDOMS is the art of war. With beautiful UI, vibrant vistas and authentic Chinese-inspired artwork, this reimagining of ancient China is a visual feast.</div>
							</div>

							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
                        <ul>
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 7 64 Bit<br></li><li><strong>Processor:</strong> Intel Core 2 Duo 3.00Ghz<br></li><li><strong>Memory:</strong> 4 GB RAM<br></li><li><strong>Graphics:</strong> GTX 650 Ti 1GB|HD 7850 1GB|Intel UHD Graphics 620<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Storage:</strong> 60 GB available space<br></li><li><strong>Additional Notes:</strong> 6GB Memory if using integrated GPU</li></ul>							</ul></div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
                        <ul>
								<strong>Recommended:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 10 64 Bit<br></li><li><strong>Processor:</strong> Intel i5-6600 | Ryzen 5 2600X<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> GTX 970 | R9 Fury X 4GB VRAM<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Storage:</strong> 60 GB available space</li></ul>							</ul></div>
					</div>
				</div>
			</div>
		</div>
		<!-- END  -->

		<div class="gtco-section gto-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-zip icon"></i>
							<div class="copy">
								<h3>EASY BUY</h3>
								<p>Easy to understand how to use website and easy to pay :)</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-hummer icon"></i>
							<div class="copy">
								<h3>Maintenance <br>by quality work team</h3>
								<p>Maintenance by a highly experienced team. Able to work quickly and quality.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-plug icon"></i>
							<div class="copy">
								<h3>High security</h3>
								<p>Don't be afraid, your personal or financial information will be lost. Because we use server-side script.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>CSGAMESTORE</h3>
						<p>The best games selling website in Thailand. Founded by 2 Comscience students in 2020.
							 Was created because it was a project.</p>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6 gtco-footer-link">
								<h3>Links</h3>
								<ul class="gtco-list-link">
									<li><a href="index2.php">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Register</a></li>
									<li><a href="#">Login</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<div class="col-md-6 gtco-footer-link">
								<h3>BEST SELLING</h3>
								<ul class="gtco-list-link">
                                    <li><a href="GTAV.php">GTA V</a></li>
									<li><a href="DEADBY.php">DEAD BY DAYLIGHT</a></li>
									<li><a href="ZOO.php">PLANET ZOO</a></li>
									<li><a href="SIM.php">THE SIMS4</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2020 CSGAMESTORE 10-MARCH-2020. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Designed by <a href="https://www.facebook.com/knablovecom" target="_blank">Kittirat Aomchompool</a> and: <a href="https://www.facebook.com/chutdanai.charoensri" target="_blank">Chutdanai Charoensri</a>  From  <a href="https://www.facebook.com/iamUBU/" target="_blank">CSUBU</a></small> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END footer -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>

	
	<script src="js/main.js"></script>

	</body>
</html>

