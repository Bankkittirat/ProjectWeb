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
						<h2>PLANET ZOO</h2>
						<p>Build a world for wildlife in Planet Zoo. From the developers of Planet Coaster and Zoo Tycoon comes the ultimate zoo sim, featuring authentic living animals who think, feel and explore the world you create around them.</p>
                        <video width="650" controls autoplay>
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256766382/movie480.webm?t=1572955356" type="video/mp4">
                            <source src="https://steamcdn-a.akamaihd.net/steam/apps/256766382/movie480.webm?t=1572955356" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://store.steampowered.com/app/703080/Planet_Zoo/?l=eng" target="_blank">Steam</a>.
                          </p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
                        
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="submit" value="BUY NOW!!" name="pop"></form>
					<br><div><h2>980฿</h2></div>
					<?php #ส่งเกมมมมมม
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
                                    
                                    mysqli_query($con, "INSERT INTO Gorder(Gname, Price, order_time, username, Email)
                                    VALUES('Planet zoo',980, '$order_time','$name','$mail1')");
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
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/703080/ss_fac76f23b1b655dd0459db1a443bc8adb02e4279.600x338.jpg?t=1578044080" alt="" class="img-responsive">
									<h2>Build a world for wildlife</h2>

									<p> 
                                    Build a world for wildlife in Planet Zoo. From the developers of Planet Coaster and Zoo Tycoon comes the ultimate zoo sim, featuring authentic living animals who think, feel and explore the world you create around them. Experience a globe-trotting campaign or let your imagination run wild in the freedom of Sandbox mode. Create unique habitats and vast landscapes, make big decisions and meaningful choices, and nurture your animals as you construct and manage the world’s wildest zoos.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/703080/ss_6a247086e998d16983a109f2ab9567b16ddd6ec1.600x338.jpg?t=1578044080" alt="" class="img-responsive">
									<h2>Meet a world of incredible animals</h2>

									<p>From playful lion cubs to mighty elephants, every animal in Planet Zoo is a thinking, feeling individual with a distinctive look and personality of their own. Craft detailed habitats to bring your animals’ natural environments home, research and manage each species to allow them to thrive, and help your animals raise families to pass their genes onto future generations.</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://steamcdn-a.akamaihd.net/steam/apps/703080/ss_02c241bac536f6c4a99642c66203fa3abac7e9db.600x338.jpg?t=1578044080" alt="" class="img-responsive">
									<h2>LIMITLESS CREATIVITY</h2>
                                    Planet Zoo’s powerful piece-by-piece construction tools let you effortlessly make your zoo unique. Every creative decision you make impacts the lives of your animals and the experience of your visitors. Let your imagination run wild as you dig lakes and rivers, raise hills and mountains, carve paths and caves, and build stunning zoos with a choice of unique themes and hundreds of building components.

                                    
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
								<strong>Minimum:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 7 (SP1+)/8.1/10 64bit<br></li><li><strong>Processor:</strong> Intel i5-2500 / AMD FX-6350<br></li><li><strong>Memory:</strong> 8 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA GeForce GTX 770 (2GB) / AMD Radeon R9 270X (2GB)<br></li><li><strong>Storage:</strong> 16 GB available space<br></li><li><strong>Additional Notes:</strong> Minimum specifications may change during development</li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
                        <ul>
								<strong>Recommended:</strong><br><ul class="bb_ul"><li>Requires a 64-bit processor and operating system<br></li><li><strong>OS:</strong> Windows 10 64bit<br></li><li><strong>Processor:</strong> Intel i7-4770k / AMD Ryzen 5 1600<br></li><li><strong>Memory:</strong> 16 GB RAM<br></li><li><strong>Graphics:</strong> NVIDIA GeForce GTX 1070 (8GB) or AMD Radeon RX 580 (8GB)<br></li><li><strong>Storage:</strong> 16 GB available space</li></ul>							</ul>
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

