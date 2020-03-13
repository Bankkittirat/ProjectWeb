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
						<h2>MONSTER HUNTER WORLD</h2>
						<p>DWelcome to a new world! Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and 
                            its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts!</p>
                        <video width="650" controls autoplay>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256769022/movie480.webm?t=1578591120" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256769022/movie480.webm?t=1578591120" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/582010/MONSTER_HUNTER_WORLD/" target="_blank">Steam</a>.
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
									<img src="https://www.monsterhunterworld.com/images/pc/top/img_feature_thumb03.jpg" alt="" class="img-responsive">
									<h2>HUNTING</h2>
                                    A Diverse Arsenal, and an Indispensable Partner
                                    Your equipment will give you the power to need to carve out a place for yourself in the New World.
                                    
                                    The Hunter's Arsenal
                                    There are fourteen different weapons at the hunter's disposal, each with its own unique characteristics and attacks. Many hunters acquire proficiency in multiple types, while others prefer to attain mastery of one.
									<p> 
										</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://www.monsterhunterworld.com/images/pc/top/img_media01.jpg" alt="" class="img-responsive">
									<h2>Key Features</h2>

									<p>Overview
                                        Battle gigantic monsters in epic locales.
                                        As a hunter, you'll take on quests to hunt monsters in a variety of habitats.
                                        Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.
                                        In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://www.monsterhunterworld.com/images/pc/top/img_media_armor_us.jpg" alt="" class="img-responsive">
									<h2>MATURE CONTENT DESCRIPTION</h2>
                                    Setting
                                    Once every decade, elder dragons trek across the sea to travel to the land known as the New World in a migration referred to as the Elder Crossing.
                                    To get to the bottom of this mysterious phenomenon, the Guild has formed the Research Commission, dispatching them in large fleets to the New World.
                                    As the Commission sends its Fifth Fleet in pursuit of the colossal elder dragon, Zorah Magdaros, one hunter is about to embark on a journey grander than anything they could have ever imagined.
								</div>
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
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> WINDOWS® 7, 8, 8.1, 10 (64-bit required)<br></li><li><strong>Processor:</strong> Intel® Core™ i5-4460, 3.20GHz or AMD FX™-6300<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x (VRAM 2GB)<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Network:</strong> Broadband Internet connection<br></li><li><strong>Storage:</strong> 48 GB available space<br></li><li><strong>Sound Card:</strong> DirectSound (DirectX® 9.0c)<br></li><li><strong>Additional Notes:</strong> 1080p/30fps when graphics settings are set to "Low"</li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
							<ul>
								<strong>Recommended:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> WINDOWS® 7, 8, 8.1, 10 (64-bit required)<br></li><li><strong>Processor:</strong> Intel® Core™ i7 3770 3.4GHz or Intel® Core™ i3 8350 4GHz or AMD Ryzen™ 5 1500X<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA® GeForce® GTX 1060 (VRAM 3GB) or AMD Radeon™ RX 570  (VRAM 4GB)<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Network:</strong> Broadband Internet connection<br></li><li><strong>Storage:</strong> 48 GB available space<br></li><li><strong>Sound Card:</strong> DirectSound (DirectX® 9.0c or better)<br></li><li><strong>Additional Notes:</strong> 1080p/30fps when graphics settings are set to "High"</li></ul>							</ul>
						</div>
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

