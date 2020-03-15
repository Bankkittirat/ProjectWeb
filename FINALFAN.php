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
	$mail1 = $_SESSION["Email"];
 
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
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </nav>

		

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>FINAL FANTASY XV WINDOWS EDITION</h2>
						<p>For the first time, players take control of Noctis's greatest foe in this brand-new episode of FINAL FANTASY XV! Delve into the dark tale of scorned saviour Ardyn Lucis Caelum and unravel the secrets surrounding his mysterious past.

*Players must purchase FINAL FANTASY XV in order to access this content. Updating to the latest version of the game may also be required.</p>
                        <video width="650" controls>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256706009/movie480.webm?t=1516114078" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256706009/movie480.webm?t=1516114078" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/637650/FINAL_FANTASY_XV_WINDOWS_EDITION/" target="_blank">Steam</a>.
                          </p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="submit" value="BUY NOW!!" name="pop"></form>
					<br><div><h2>1689฿</h2></div>
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
                                        echo "</script>";
									}
									else{
                                    
									$order_time = date("Y-m-d H:i:s");
									$Price =$_POST['Price'];
									$name = $_SESSION['name'];
                                    
                                    mysqli_query($con, "INSERT INTO Gorder(Gname, Price, order_time, username, Email)
                                    VALUES('Final Fantasy V',1689, '$order_time','$name','$mail1')");
                                    echo "<script type=\"text/javascript\">";
                                    echo "alert(\"Game  add!!\");";
									echo "window.history.back();";	
									Header("Location: payment/pay.php");
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
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/637650/ss_a1fcc0d974bfc660bf3f48a3687b8a9f10336da3.600x338.jpg?t=1553563213" alt="" class="img-responsive">
									<h2>Joined by your closest friends</h2>

									<p> 
									On the roadtrip of a lifetime through a breathtaking open world, witness stunning landscapes and encounter larger-than-life beasts on your journey to reclaim your homeland from an unimaginable foe.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/637650/extras/FFXV_WindowsEdition_10s_v4.jpg?t=1553563213" alt="" class="img-responsive">
									<h2>In an action-packed battle system</h2>

									<p>Channel the power of your ancestors to warp effortlessly through the air in thrilling combat, and together with your comrades, master the skills of weaponry, magic and team-based attacks.</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/637650/ss_c3bc3ff54a74503709c84ffefa68139933853724.600x338.jpg?t=1553563213" alt="" class="img-responsive">
									<h2>Now realised with the power</h2>
                                    The developers describe the content like this:

                                    Power of cutting-edge technology for Windows PCs, including support for high-resolution displays and HDR10, the beautiful and carefully-crafted experience of FINAL FANTASY XV can be explored like never before.



                                    
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
							<ul>
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows® 7 SP1/ Windows® 8.1 / Windows® 10 64-bit<br></li><li><strong>Processor:</strong> Intel® Core™ i5-2500（3.3GHz and above）/ AMD FX™-6100 （3.3GHz and above）<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA® GeForce® GTX 760 / NVIDIA® GeForce® GTX 1050 / AMD Radeon™ R9 280<br></li><li><strong>DirectX:</strong> Version 11<br></li><li><strong>Storage:</strong> 100 GB available space<br></li><li><strong>Sound Card:</strong> DirectSound® compatible sound card, Windows Sonic and Dolby Atmos support<br></li><li><strong>Additional Notes:</strong> 720p 30fps</li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
							<ul>
								v
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
  cursor: pointer;}</style>

	</body>
</html>

