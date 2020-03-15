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
						<h2>THE SIM 4</h2>
						<p>Life and SIMs are things you can control. Customize your SIMs like no other. Design their house And take them on an exciting adventure with fame Romantic story Special festival days and others.</p>
                        <video width="650" controls autoplay>
                            <source src="https://www.youtube.com/embed/UEuw_jQLJYo" type="video/mp4">
                            <source src="https://www.youtube.com/embed/UEuw_jQLJYo" type="video/ogg">
                            
                          </video>
                          
                          <p>
                          Video from
                          <a href="https://www.origin.com/tha/th-th/store/the-sims/the-sims-4" target="_blank">Origin</a>.
                          </p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="submit" value="BUY NOW!!" name="pop"></form>
					<br><div><h2>300฿</h2></div>
					<?php #ส่งเกมมมม
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
                                    VALUES('The Sim',300, '$order_time','$name','$mail1')");
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
									<img src="https://data2.origin.com/asset/content/dam/originx/web/app/games/the-sims/the-sims-4/TS4_EF11_CARIBBEAN_SCREEN_01_002.PNG/60ad322b-a00c-4d6d-97d7-c1d58ca35bc0/original.png" alt="" class="img-responsive">
									<h2>Enjoy playing with life</h2>

									<p> 
                                    What will happen when SIMs with advanced emotional development come to chat and exchange ideas? Let's say that it is unpredictable. But assure you will never see the SIM card showing this design before.</p>
								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://data2.origin.com/asset/content/dam/originx/web/app/games/the-sims/the-sims-4/screenshots/sims-4/TSC_PREORDER_WORLD_02_004_1080.png/cd39f2ff-0d7b-43b4-b917-73661ff9f308/original.png" alt="" class="img-responsive">
									<h2>Lively neighborhood</h2>

									<p>Your sim doesn't need to be in the house to socialize with friends. Take them out to breathe the air outside! These gardens and community areas are built especially for them..</p>

								</div>
							</div>
							<div class="item">
								<div class="gtco-staff">
									<img src="https://data1.origin.com/asset/content/dam/originx/web/app/games/the-sims/the-sims-4/screenshots/sims-4/TSC_OFFICIAL_SCREEN_03_003_1080.png/8601e456-e518-4108-832c-2137da07bde9/original.png" alt="" class="img-responsive">
									<h2>Other free updates</h2>
                                    There are many free content added to The Sims 4 since release. Design and build a cool swimming pool. Resurrect the dead into a ghost of a neighbor And climb the business ladder to start your career as an independent investor or a giant businessman godfather!.

                                    
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
								<ul class="bb_ul"><li><strong>OS:</strong> Windows XP (Service Pack 2) or Windows Vista (Service Pack 1)<br>	</li><li><strong>Processor:</strong> (XP) 2.0 GHz P4 processor or equivalent; (Vista) 2.4 GHz P4 processor or equivalent <br>	</li><li><strong>Memory:</strong> (XP) 1 GB; (Vista) 1.5 GB<br>	</li><li><strong>Graphics:</strong> 128 MB Video Card with support for Pixel Shader 2.0<br> 	</li><li><strong>DirectX®:</strong> <br>	</li><li><strong>Hard Drive:</strong> At least 6.5 GB of hard drive space with at least 1 GB additional space for custom content<br>	</li><li><strong>Sound:</strong><br>	</li><li><strong>Built-in Graphics:</strong><ul class="bb_ul"><li>Intel Integrated Chipset, GMA X3000 or above. <br> 	</li><li>2.6 GHz Pentium D CPU, or 1.8 GHz Core 2 Duo, or equivalent <br> 	</li><li>0.5 GB additional RAM</li></ul></li><li><strong>Supported Video Cards:</strong>Nvidia GeForce series: FX5900 or greater, G100, GT 120, GT 130, GTS 150, GTS 250, GTX 260, GTX 275, GTX 280, GTX 285, GTX 295; ATI Radeon™ series: ATI Radeon 9500 series of greater, X300, X600, X700, X800, X850, X1300, X1600, X1800, X1900, X1950, 2400, 2600, 2900, 3450, 3650, 3850, 3870, 4850, 4870 series or greater; Intel® Graphics Media Accelerator (GMA): GMA 3-Series, GMA 4-Series <br>	</li><li>*Please note that the GeForce 6100 and 7100 cards are not supported</li></ul>							</ul>
						</div>
					</div>
					<!-- END News -->
					<div class="col-md-6 gtco-news">
						<div class="game_area_sys_req_leftCol">
                        <ul>
								<ul class="bb_ul"><li><strong>OS:</strong> Windows XP (Service Pack 2) or Windows Vista (Service Pack 1)<br>	</li><li><strong>Processor:</strong> (XP) 2.0 GHz P4 processor or equivalent; (Vista) 2.4 GHz P4 processor or equivalent <br>	</li><li><strong>Memory:</strong> (XP) 1 GB; (Vista) 1.5 GB<br>	</li><li><strong>Graphics:</strong> 128 MB Video Card with support for Pixel Shader 2.0<br> 	</li><li><strong>DirectX®:</strong> <br>	</li><li><strong>Hard Drive:</strong> At least 6.5 GB of hard drive space with at least 1 GB additional space for custom content<br>	</li><li><strong>Sound:</strong><br>	</li><li><strong>Built-in Graphics:</strong><ul class="bb_ul"><li>Intel Integrated Chipset, GMA X3000 or above. <br> 	</li><li>2.6 GHz Pentium D CPU, or 1.8 GHz Core 2 Duo, or equivalent <br> 	</li><li>0.5 GB additional RAM</li></ul></li><li><strong>Supported Video Cards:</strong>Nvidia GeForce series: FX5900 or greater, G100, GT 120, GT 130, GTS 150, GTS 250, GTX 260, GTX 275, GTX 280, GTX 285, GTX 295; ATI Radeon™ series: ATI Radeon 9500 series of greater, X300, X600, X700, X800, X850, X1300, X1600, X1800, X1900, X1950, 2400, 2600, 2900, 3450, 3650, 3850, 3870, 4850, 4870 series or greater; Intel® Graphics Media Accelerator (GMA): GMA 3-Series, GMA 4-Series <br>	</li><li>*Please note that the GeForce 6100 and 7100 cards are not supported</li></ul>							</ul>
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

