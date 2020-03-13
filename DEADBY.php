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
						<h2>DEAD BY DAYLIGHT</h2>
						<p>Death Is Not an Escape.
                        Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.
                        Survivors play in third-person and have the advantage of better situational awareness. The Killer plays in first-person and is more focused on their prey.
                        The Survivors' goal in each encounter is to escape the Killing Ground without getting caught by the Killer - something that sounds easier than it is, especially when the environment changes every time you play.
                        More information about the game is available at http://www.deadbydaylight.com</p>
                        <video width="650" controls autoplay>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256777591/movie480.webm?t=1583856325?autoplay=1" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256777591/movie480.webm?t=1583856325?autoplay=1" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/381210/Dead_by_Daylight/" target="_blank">Steam</a>.
                          </p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="submit" value="BUY NOW!!" name="pop"></form>
					<?php #ดึงคอมเม้นนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนต์
                                    $io = 0;
                                    
                                    function yui($val){
                                    return $val;
                                    }
                                    if(isset($_POST["pop"])){
                                    echo yui($_POST["pop"]);
                                    $io = $io+1;
                                } 
                                if ($io==1){
                                    if($loginn == 0){
                                        echo "<script type=\"text/javascript\">";
                                        echo "alert(\"PLEASE LOGIN FIRST\");";
                                        echo "window.history.back();";
                                        echo "</script>";;
									}
									else{
                                    
									$order_time = date("Y-m-d H:i:s");
									$Price =$_POST['Price'];
									$name = $_SESSION['name'];
                                    
                                    mysqli_query($con, "INSERT INTO Gorder(Gname, Price, order_time, username)
                                    VALUES('DEAD BY DAYLIGHT',380, '$order_time','$name')");
                                    echo "<script type=\"text/javascript\">";
                                    echo "alert(\"Game  add!!\");";
                                    echo "window.history.back();";	
                                    echo "</script>";
                                    exit();
                                    }	
                                }
                                else {
                                    echo "<br>";
                                } 
                                ?>
							
                                
                                    
						
					</div>
				</div> 
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-staff">
									<img src="https://macgamesbox.com/wp-content/uploads/3088931-0001.jpg" alt="" class="img-responsive">
									<h2>Horror game</h2>

									<p> 
										Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/1135280/ss_2ecfea25bf44577cda1f2f527e789069c86ef4cf.1920x1080.jpg?t=1578603205" alt="" class="img-responsive">
									<h2>Key Features</h2>

									<p>• Survive Together… Or Not - Survivors can either cooperate with the others or be selfish. Your chance of survival will vary depending on whether you work together as a team or if you go at it alone. Will you be able to outwit the Killer and escape their Killing Ground?</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://ksassets.timeincuk.net/wp/uploads/sites/54/2018/09/DbD-Shattered-3.jpg" alt="" class="img-responsive">
									<h2>MATURE CONTENT DESCRIPTION</h2>
										The developers describe the content like this:
										This Game may contain content not appropriate for all ages, or may not be appropriate for viewing at work: Frequent Violence or Gore, General Mature Content
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
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> 64-bit Operating Systems (Windows 7, Windows 8.1)<br></li><li><strong>Processor:</strong> Intel Core i3-4170 or AMD FX-8120<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> DX11 Compatible GeForce GTX 460 1GB or AMD HD 6850 1GB<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Network:</strong> Broadband Internet connection<br></li><li><strong>Storage:</strong> 25 GB available space<br></li><li><strong>Sound Card:</strong> DX11 compatible<br></li><li><strong>Additional Notes:</strong> With these requirements, it is recommended that the game is played on Low quality settings.</li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
							<ul>
								<ul>
                                    <strong>Recommended:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> 64-bit Operating Systems (Windows 7, Windows 8.1 or above)<br></li><li><strong>Processor:</strong> Intel Core i3-4170 or AMD FX-8300 or higher<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> DX11 Compatible GeForce 760 or AMD HD 8800 or higher with 4GB of RAM<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Network:</strong> Broadband Internet connection<br></li><li><strong>Storage:</strong> 25 GB available space<br></li><li><strong>Sound Card:</strong> DX11 compatible</li></ul>							</ul>
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
	<style>
	input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
	</style>

	</body>
</html>

