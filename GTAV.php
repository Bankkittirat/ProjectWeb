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
						<h2>GRAND THEFT AUTO V</h2>
						<p>When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.

                            Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.
                            
                            The game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.</p>
                        <video width="650" controls autoplay>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256703142/movie480.webm?t=1513275242" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256703142/movie480.webm?t=1513275242" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/" target="_blank">Steam</a>.
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
									<img src="https://cdn.gtaboom.com/wp-content/uploads/2013/07/gta-5-cheats-pc-1.jpg" alt="" class="img-responsive">
									<h2>Action Games</h2>

									<p> 
									Grand Theft Auto V for PC also includes Grand Theft Auto Online, with support for 30 players and two spectators. Grand Theft Auto Online for PC will include all existing gameplay upgrades and Rockstar-created content released since the launch of Grand Theft Auto Online, including Heists and Adversary modes</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://i.ytimg.com/vi/vnrwUGvd_kY/maxresdefault.jpg" alt="" class="img-responsive">
									<h2>Key Features</h2>

									<p>• Grand Theft Auto V for PC also brings the debut of the Rockstar Editor, a powerful suite of creative tools to quickly and easily capture, edit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. The Rockstar Editor’s Director Mode allows players the ability to stage their own scenes using prominent story characters.</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://notebookspec.com/web/wp-content/uploads/2014/10/gta01.jpg" alt="" class="img-responsive">
									<h2>MATURE CONTENT DESCRIPTION</h2>
                                    The developers describe the content like this:

                                    This Game may contain content not appropriate for all ages, or may not be appropriate for viewing at work: General Mature Content
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
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br></li><li><strong>Processor:</strong> Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz<br></li><li><strong>Memory:</strong> 4 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)<br></li><li><strong>Storage:</strong> 72 GB available space<br></li><li><strong>Sound Card:</strong> 100% DirectX 10 compatible<br></li><li><strong>Additional Notes:</strong> Over time downloadable content and programming changes will change the system requirements for this game.  Please refer to your hardware manufacturer and <a href="https://steamcommunity.com/linkfilter/?url=http://www.rockstargames.com/support" target="_blank" rel="noopener">www.rockstargames.com/support</a> </li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
							<ul>
								<strong>Recommended:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br></li><li><strong>Processor:</strong> Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA GTX 660 2GB / AMD HD 7870 2GB<br></li><li><strong>Storage:</strong> 72 GB available space<br></li><li><strong>Sound Card:</strong> 100% DirectX 10 compatible</li></ul>							</ul>
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

