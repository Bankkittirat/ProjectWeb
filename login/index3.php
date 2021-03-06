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

	<link href="../https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <?php session_start();  
    include('condb.php');

    $ID = $_SESSION['ID'];
    $name = $_SESSION['name'];
	$level = $_SESSION['level'];
	$loginn = $_SESSION['login_in'];
 	if($level!='member'){
    Header("Location: ../index2.php");  
  	}  
	?>
	</head>
	
	<body>
	
	<div class="gtco-loader"></div>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index3.php">CSGAMESTORE</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							
						<
							 ?php if ($loginn == 1){
									
									echo "<li> $name as $level</li>";
									echo "<li><a href='http://localhost/beryllium/login/logout.php'>Logout</a></li>";
							}
								else{
									echo "<li><a href='http://localhost/beryllium/login/'>Login</a></li>";
									echo "<li><a href='http://localhost/beryllium/login/register.php'>REGISTER</a></li>";
								}
							?>
							<li><a href="about.html">about</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
							<a href="PUBG.php">
								<img src="https://www.ecopetit.cat/wpic/mpic/27-272658_pubg-new-hd.jpg" alt="PUBG">
								<div class="slider-copy">
									<h2>PUBG</h2>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="../DEADBY.php">
								<img src="https://images4.alphacoders.com/707/707865.jpg" alt="DBD">
								<div class="slider-copy">
									<h2>DEAD BY DAYLIGHT</h2>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="https://www.beartai.com/wp-content/uploads/2019/06/PZ_key_art_1080logo.jpg" alt="PLANETZOO">
								<div class="slider-copy">
									<h2>PLANET ZOO</h2>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>WELCOME TO CSGAMESTORE </h2>
						<p>หากคุณกำลังมองหาร้านขายเกมส์คุณภาพ ที่ซื้อได้ชัวป๊าบ และมีเกมส์มากมาย ทั้ง Steam Wallet หรือ เติม Game online ก็สามารถจับจองกันได้ง่ายๆที่เกม Gamefilling ฟิลล์ทุกความสุข สนุกทุกการเล่น
							อย่าลืมหันมาซื้อเกมเเท้กันนะฮัฟฟฟฟ
						</p>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-item">
									<a href="#"><img src="https://www.playulti.com/static/thumb/2017/8/19/attach-1505796331670.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">FINAL FANTASY XV WINDOWS EDITION</h2></a>
									<p class="role">1689 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="MHW.html"><img src="https://i.pinimg.com/originals/14/c5/f5/14c5f59c5e02da6ae953e8e9a523c3b4.jpg" alt="" class="img-responsive"></a>
									<h2><a href="MHW.html">MONSTER HUNTER WORLD</h2></a>
									<p class="role">1090 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="#"><img src="https://www.beartai.com/wp-content/uploads/2019/06/PZ_key_art_1080logo.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">PLANET ZOO</h2></a>
									<p class="role">980 ฿</p>
								</div>
							</div>

							<div class="item">
								<div class="gtco-item">
									<a href="PUBG.html"><img src="https://www.ecopetit.cat/wpic/mpic/27-272658_pubg-new-hd.jpg" alt="" class="img-responsive"></a>
									<h2><a href="PUBG.html">PLAYERUNKNOW'S BATTLEGROUND</h2></a>
									<p class="role">490 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="DEADBY.html"><img src="https://images5.alphacoders.com/778/thumb-1920-778923.jpg" alt="" class="img-responsive"></a>
									<h2><a href="DEADBY.html">Dead By Daylight </h2></a>
									<p class="role">380 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="#"><img src="https://s.isanook.com/ga/0/ud/190/954333/01.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">THE SIMS4</h2></a>
									<p class="role">300 ฿</p>
								</div>
							</div>

							<div class="item">
								<div class="gtco-item">
									<a href="GTAV.html"><img src="https://www.ps4home.com/wp-content/uploads/2014/11/GTA-V-ps4-wallpapers.jpg" alt="" class="img-responsive"></a>
									<h2><a href="GTAV.html">Grand Theft Auto V</h2></a>
									<p class="role">580 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="..COASTER.php"><img src="https://www.itl.cat/pngfile/big/92-922726_planet-coaster-download.jpghttps://www.itl.cat/pngfile/big/92-922726_planet-coaster-download.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">PLANET CLOSTER</h2></a>
									<p class="role">750 ฿</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="#"><img src="https://i.pinimg.com/originals/c2/c5/77/c2c577b2e2e7a45348628847755c0266.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">TOTAL WAR TREEKINGDOMS</h2></a>
									<p class="role">980 ฿</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END Work -->

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 gtco-news">
						<h2>NEWS AND PROMOTIONS</h2>	
						<ul>
							<li>
								<a href="#">
									<span class="post-date">March 11, 2020</span>
									<h3>New member can get discount code for free here!!! </h3>
									<p>New member can get a free discount code from now until the end of April due to the opportunity open a new website.</p>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="post-date">March 11, 2020</span>
									<h3>Found a first error on web!!!</h3>
									<p>We found the first error. Which we don't know how to solve the problem But we can fix it</p>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="post-date">March 10, 2020</span>
									<h3>Please celebrate the opening of the website</h3>
									<p>Because there is an opportunity open a new website You can bless us on our social media. There are also giveaways. Please stay tuned.</p>
								</a>
							</li>
						</ul>
					</div>
					<!-- END News -->
					<div class="col-md-5 col-md-push-1 gtco-testimonials">
						<h2>COMMENT</h2>
						<blockquote>
							<form action="/action_page.php">
								<label for="fname">COMMENT HERE</label><br>
								<input type="text" id="fname" name="fname" value=""  maxlength="250" style="height:200px;width:300px;"><br>
								<br>
								<input type="submit" value="Submit">
							  </form> 
							  
						</blockquote>
						<blockquote>
							<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.&ldquo;</p>
							<p class="author"><cite>&mdash; John Doe Dueller</cite></p>
						</blockquote>
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
									<li><a href="index.html">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Register</a></li>
									<li><a href="login/blog/resources/views/auth/login.blade.php">Login</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</div>
							<div class="col-md-6 gtco-footer-link">
								<h3>BEST SELLING</h3>
								<ul class="gtco-list-link">
									<li><a href="#">GTA V</a></li>
									<li><a href="#">DEAD BY DAYLIGHT</a></li>
									<li><a href="#">PLANET ZOO</a></li>
									<li><a href="#">THE SIMS4</a></li>
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
	
	
	<script src="../js/jquery.min.js"></script>
	
	<script src="../js/jquery.easing.1.3.js"></script>
	
	<script src="../js/bootstrap.min.js"></script>
	
	<script src="../js/jquery.waypoints.min.js"></script>
	
	<script src="../js/owl.carousel.min.js"></script>

	
	<script src="../js/main.js"></script>

	</body>
</html>

