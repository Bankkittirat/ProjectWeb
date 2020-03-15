<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php  
 session_start(); 
 include('login/condb.php');
 $username = $_SESSION["username"];
 $ID = $_SESSION['ID'];
    $name = $_SESSION['name'];
	$level = $_SESSION['level'];
    $loginn = $_SESSION['login_in'];
    $Mcoin =  $_SESSION["coin"];
 
 
$connect = mysqli_connect("localhost", "root", "", "login_db");  
//  if(isset($_POST["insert"]))  
//  {  
//       $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
//       $query = "INSERT INTO tbl_images(name,username) VALUES ('$file','$username')";  
      
//       if(mysqli_query($connect, $query))  
//       {  
//            echo '<script>alert("Your receipt has been uploaded. Please wait for the administrator to check.")</script>';  
           
        
//       }  
//  }  

$io = 0;
                                    
           function yui($val){
           return $val;}
           if(isset($_POST["insert"])){
           $io = $io+1;} 
            if($io==1){
                Header("Location: index2.php");
            }

 ?>  
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSGAMESTORE &mdash; News</title>
    
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    

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

                                echo "<li class='TI3'> $name as $level&nbsp&nbsp </li>";
                                echo "<a class = 'TI2' href='http://localhost/beryllium/login/logout.php'>LOGOUT &nbsp&nbsp</a>";
                                }
                                else{
                                echo "<a class = 'TI2' href='http://localhost/beryllium/login/'>LOGIN &nbsp&nbsp</a>";
                                echo "<a class = 'TI2' href=http://localhost/beryllium/login/register.php'>REGISTER &nbsp&nbsp</a>";
                                }
                                ?>
                                
                                </ul>
                                </div>
                                </div>
                                </div>
                                </nav>
<style>
.TI2{
color:#FFFFFF !important ;text-align:center;
}
.TI3{
color:#000000 !important ;text-align:center; font-size:15px;
}

.TI4{
color:#FFFFFF; text-align:center; font-size:20px;
}
.cc{
margin: auto;
}
.bg{
background-color:white;opacity:0.8;
}

.sizeb{height:50px;width:200px;}
.button4 {
    background-color: white;
    color: black;
    border: 0.5px solid #FFFFFF;
    border-radius: 8px;
    transition-duration: 0.18s;
}
.button4:hover {
    background-color: #009933;
    color: white;
}
.slip{
    margin-left: 130px;
    margin-right: 130px;
}
.TIII{
    color: black; 
    opacity:0.8;
    font-size:20px;
}
.gg{
    font-size:50px;
    opacity:0.7;
}

.TIIII{
    color: black; 
    opacity:0.9;
    font-size:30px;
}
.TIIIII{
    color: red; 
    opacity:0.6;
    font-size:30px;
}


</style>
        <br /><br /> 
           <div class="container" style="width:1500px;">  
                <h3 align="center" class="gg">On the occasion of celebrating the opening of a new website</h3>  
                <br><br/><br><br/>
                <form method="post" enctype="multipart/form-data">  
                <div align="center" >
                    <span class="TIII">This is 20% discount for everyone. Expires only by the end of this month.</span><br/><br/>
                    <span class="TIIII">Here is your code : </span><span class="TIIIII">ZXCVBN</span>
                    <br/><br/><br/><br/><br/>/><br/><br/>/><br/><br/>/><br/><br/>/><br/><br/>/><br/><br/>/><br/>
                </div>
                <div align="center" >
					<button type="submit" name="insert" id="insert" class="button4 sizeb">Back to home</button>
				</div>
                </form>  

                <br />  
                <br />  
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

<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
           
      });  
 });  
 </script>  


