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
	$commentt = $_SESSION["commento"];
	$Mcoin =  $_SESSION["coin"]
	?>

    </head>
<body>
<div class="bgbg">
    <div class="gtco-loader"></div>
	
	<div id="page" >

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index2.php">CSGAMESTORE</div>
					</div>
					<div class="col-xs-10 text-right menu-1 menuu">
						<ul>
							<?php if ($loginn == 1){

									echo "<a class = 'TI2'> $name as $level : $Mcoin M &nbsp&nbsp</a>";
									echo "<a class = 'TI2' href='http://localhost/beryllium/login/logout.php'>Logout &nbsp&nbsp</a>";
							}
								else{
									echo "<a class = 'TI2' href='http://localhost/beryllium/login/'>Login &nbsp&nbsp</a>";
									echo "<a class = 'TI2' href=http://localhost/beryllium/login/register.php'>Register &nbsp&nbsp</a>";
								}
							?>
							<a class = 'TI2' href="about.php">about</a>
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
							<a href="DEADBY.php">
								<img src="https://images4.alphacoders.com/707/707865.jpg" alt="DBD">
								<div class="slider-copy">
									<h2>DEAD BY DAYLIGHT</h2>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="ZOO.php">
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

		<div class="gtco-section" >
			<div class="gtco-container" >
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center ">
						<a class='TI3'>WELCOME TO CSGAMESTORE </a><br>
						<a class='TI4'>หากคุณกำลังมองหาร้านขายเกมส์คุณภาพ ที่ซื้อได้ชัวป๊าบ และมีเกมส์มากมาย ทั้ง Steam Wallet หรือ เติม Game online ก็สามารถจับจองกันได้ง่ายๆที่เกม Gamefilling ฟิลล์ทุกความสุข สนุกทุกการเล่น
							อย่าลืมหันมาซื้อเกมเเท้กันนะฮัฟฟฟฟ
						</a>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							<div class="item">
								<div class="gtco-item">
									<a href="#"><img src="https://www.playulti.com/static/thumb/2017/8/19/attach-1505796331670.jpg" alt="" class="img-responsive"></a>
									<h2><a href="#">FINAL FANTASY XV WINDOWS EDITION</h2></a>
									<a class='TII'>1689 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="MHW.php"><img src="https://i.pinimg.com/originals/14/c5/f5/14c5f59c5e02da6ae953e8e9a523c3b4.jpg" alt="" class="img-responsive"></a>
									<h2><a href="MHW.php">MONSTER HUNTER WORLD</h2></a>
									<a class='TII'>1090 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="ZOO.php"><img src="https://www.beartai.com/wp-content/uploads/2019/06/PZ_key_art_1080logo.jpg" alt="" class="img-responsive"></a>
									<h2><a href="ZOO.php">PLANET ZOO</h2></a>
									<a class='TII'>980 ฿</a>
								</div>
							</div>

							<div class="item">
								<div class="gtco-item">
									<a href="PUBG.php"><img src="https://www.ecopetit.cat/wpic/mpic/27-272658_pubg-new-hd.jpg" alt="" class="img-responsive"></a>
									<h2><a href="PUBG.php">PLAYERUNKNOW'S BATTLEGROUND</h2></a>
									<a class='TII'>490 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="DEADBY.php"><img src="https://images5.alphacoders.com/778/thumb-1920-778923.jpg" alt="" class="img-responsive"></a>
									<h2><a href="DEADBY.php">Dead By Daylight </h2></a>
									<a class='TII'>380 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="SIM.php"><img src="https://s.isanook.com/ga/0/ud/190/954333/01.jpg" alt="" class="img-responsive"></a>
									<h2><a href="SIM.php">THE SIMS4</h2></a>
									<a class='TII'>300 ฿</a>
								</div>
							</div>

							<div class="item">
								<div class="gtco-item">
									<a href="GTAV.php"><img src="https://www.ps4home.com/wp-content/uploads/2014/11/GTA-V-ps4-wallpapers.jpg" alt="" class="img-responsive"></a>
									<h2><a href="GTAV.php">Grand Theft Auto V</h2></a>
									<a class='TII'>580 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="COASTER.php"><img src="https://www.itl.cat/pngfile/big/92-922726_planet-coaster-download.jpghttps://www.itl.cat/pngfile/big/92-922726_planet-coaster-download.jpg" alt="" class="img-responsive"></a>
									<h2><a href="COASTER.php">PLANET CLOSTER</h2></a>
									<a class='TII'>750 ฿</a>
								</div>
							</div>
							<div class="item">
								<div class="gtco-item">
									<a href="TOTALWAR.php"><img src="https://i.pinimg.com/originals/c2/c5/77/c2c577b2e2e7a45348628847755c0266.jpg" alt="" class="img-responsive"></a>
									<h2><a href="TOTALWAR.php">TOTAL WAR TREEKINGDOMS</h2></a>
									<a class='TII'>980 ฿</a>
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
									<span class="TIII">March 11, 2020</span><br>
									<span class="HH">New member can get discount code for free here!!!</span><br>
									<span class="TIII">New member can get a free discount code from now until the end of April due to the opportunity open a new website.</span>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="TIII">March 11, 2020</span><br>
									<span class="HH">Found a first error on web!!!</span><br>
									<span class="TIII">We found the first error. Which we don't know how to solve the problem But we can fix it.</span>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="TIII">March 10, 2020</span><br>
									<span class="HH">Please celebrate the opening of the website</span><br>
									<span class="TIII">Because there is an opportunity open a new website You can bless us on our social media. There are also giveaways. Please stay tuned.</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- END News -->
					<div class="col-md-5 col-md-push-1 gtco-testimonials">
						<h2>COMMENT</h2>
						<blockquote>
                        <style>
                            textarea {
                                resize: none; }
                        </style>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">	
								<textarea rows="4" cols="25" name="commento" placeholder="Comment here" style= "height:100px;width:300px;" require></textarea><br>
								<br>
								<input type="submit" value="Comment" name="pop">
							  </form> 
							</blockquote>
						<blockquote>

						
							<div style="height:350px;width:300px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:#FFFFFF;opacity:0.85;" >
                                <?php #ดึงคอมเม้นนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนต์
                                    $io = 0;
                                    include 'login/condb.php';
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
                                    }else{
                                    $commento= $_POST['commento'];
                                    $date_time = date("Y-m-d H:i:s");
                                    
                                    mysqli_query($con, "INSERT INTO comment(commento, name, date_time)
                                    VALUES('$commento','$name', '$date_time')");
                                    echo "<script type=\"text/javascript\">";
                                    echo "alert(\"Comment complete\");";
                                    echo "window.history.back();";	#6c8393
                                    echo "</script>";
                                    exit();
                                    }	
                                }
                                else {
                                    echo "<br>";
                                } 
                                ?>
							
                                <div class="d-flex justify-content-center links">
                                    <?php 
                                        function getComment($con){
                                            $sql3 = "SELECT * FROM comment ORDER BY date_time DESC;";
                                            $result = $con->query($sql3);
                                            while ($row = $result->fetch_assoc()) {
											echo "<a class = 'TI'>".$row['name']."</a>";
                                            echo "<a class = 'TI'>".$row['date_time']."</a>"."<br>";
                                            echo "<p>&ldquo;"." ".$row['commento']." "."&ldquo;"."<br>"."<br></p>";
                                            }
                                        }	
                                        getComment($con);
                                    ?>
                                </div>
							</div>


						</blockquote>
					</div>
					
				</div>
			</div>
        </div>
        <style>
            .TI{
                color:#B0B0B0	;text-align:center; font-size:1;
			}
			.TII{
                color:white;	;text-align:center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
			}
			.TIII{
                color: #ECECEC; 
			}
			.HH{
                color: #2FFF16; font-size:25px
			}
			

        </style>

		<!-- END  -->

		<div class="gtco-section gto-features" style="background-color:#FFFFFF;opacity:0.8;"">
			<div class="gtco-container" >
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
									<li><a href="login/blog/resources/views/auth/login.blade.php">Login</a></li>
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
</div>

<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://i.imgur.com/jy6j0pT.jpg');
background-attachment: fixed;
opacity: 1;
background-size: cover;
background-repeat: no-repeat;
opacity: 1 !important;
height: 100%;
font-family: 'Numans', sans-serif;
}

.TI2{
	color:#000000 !important ;text-align:center;
}

.TI3{
	color:#000000	;text-align:center; font-size:40px;
}

.TI4{
	color:#1F1A1A	;text-align:center; font-size:20px;
}


#menuu {
	color: white !important;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

</style>




