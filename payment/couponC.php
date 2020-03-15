<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php  
 session_start(); 
 $username = $_SESSION["username"];
 $ID = $_SESSION['ID'];
    $name = $_SESSION['name'];
	$level = $_SESSION['level'];
    $loginn = $_SESSION['login_in'];
    $Mcoin =  $_SESSION["coin"];
 $connect = mysqli_connect("localhost", "root", "", "login_db");  
    

 
 include("../login/condb.php");
 function getComment($con){
     $sql3 = "SELECT * FROM gorder;";
     $result = $con->query($sql3);
     while ($row = $result->fetch_assoc()) {
    $_SESSION["id"] = $row["id"];
     
     $_SESSION["Gname"] = $row["Gname"];
     
     $_SESSION["Price"] = $row["Price"];
     }
}	
getComment($con);
$YourG = $_SESSION["Gname"];
$Price =  $_SESSION["Price"];
$GID =  $_SESSION["id"];
$CP= $_POST["coupon"];

// if($CP != "QWERTY" || "ASDFGH" || "ZXCVBN"){
    
                                   
    
//     $CPW = "<h4>คุณกรอกโค้ดไม่ถูกต้อง<h4>";

    
    

// }else{}

                         

//  if(isset($_POST["insert"]))  
//  {  
//       $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
//       $query = "INSERT INTO tbl_images(name,username) VALUES ('$file',$username)";  
//       if(mysqli_query($connect, $query))  
//       {  
//            echo '<script>alert("Image Inserted into Database")</script>';  
//       }  
//  }  

 ?>  
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSGAMESTORE &mdash; Payment</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
						<div id="gtco-logo"><a href="../index2.php">CSGAMESTORE</div>
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
                background-color:white;opacity:0.8;border-radius:16px;
            }
        </style>
        <br><br>  

           <div class="container " style="width:500px;">  
                <h2 align="center">PAYMENT METHODS</h2><br>
                <div align="center" class="TI3">
                <?php 
                switch ($CP) {
                case "QWERTY":
                    $Price = $Price*0.95;
                    echo "Your Game : ".$YourG." --> Price : ".$Price." Baht"; 
                    if($connect === false){ 
                        die("ERROR: Could not connect. "  
                                    . mysqli_connect_error()); 
                    } 
                      
                    $sql2 = "UPDATE gorder SET Price=$Price WHERE id=$GID"; 
                    if(mysqli_query($connect, $sql2)){ 
                        echo "<br>คุณได้ใช้คูปองส่วนลดเรียบร้อยแล้ว."; 
                    } else { 
                        echo "ERROR: Could not able to execute $sql2. "  
                                                . mysqli_error($connect); 
                    }  
                    mysqli_close($connect); 
                    $_SESSION["CPrice"] = $Price;
                    break;
                case "ASDFGH":
                    $Price = $Price*0.90;
                            echo "Your Game : ".$YourG." --> Price : ".$Price." Baht";
                            if($connect === false){ 
                                die("ERROR: Could not connect. "  
                                            . mysqli_connect_error()); 
                            } 
                              
                            $sql2 = "UPDATE gorder SET Price=$Price WHERE id=$GID"; 
                            if(mysqli_query($connect, $sql2)){ 
                                echo "<br>คุณได้ใช้คูปองส่วนลดเรียบร้อยแล้ว."; 
                            } else { 
                                echo "ERROR: Could not able to execute $sql2. "  
                                                        . mysqli_error($connect); 
                            }  
                            mysqli_close($connect); 
                            $_SESSION["CPrice"] = $Price;
                    break;
                case "ZXCVBN":
                    $Price = $Price*0.80;
                    echo "Your Game : ".$YourG." --> Price : ".$Price." Baht"; 
                    if($connect === false){ 
                        die("ERROR: Could not connect. "  
                                    . mysqli_connect_error()); 
                    } 
                      
                    $sql2 = "UPDATE gorder SET Price=$Price WHERE id=$GID"; 
                    if(mysqli_query($connect, $sql2)){ 
                        echo "<br>คุณได้ใช้คูปองส่วนลดเรียบร้อยแล้ว."; 
                    } else { 
                        echo "ERROR: Could not able to execute $sql2. "  
                                                . mysqli_error($connect); 
                    }  
                    mysqli_close($connect);
                    $_SESSION["CPrice"] = $Price;
                         break;
                default:
                echo "Your Game : ".$YourG." --> Price : ".$Price." Baht";
                
                echo "<br><br>"; 
                echo "<h4>คุณกรอกโค้ดไม่ถูกต้อง<h4>";  
                echo '<div align="center" >
                        <a href="pay.php"><button type="button" value="HOME" class="button4 sizeb">กรอกโค้ดอีกครั้ง</button>
                </div><br><br>';
            }?>
            
            
    <br><br>
                
                
          
                
                <div align="center" >
					<a href="paycom.php"><button type="button" value="HOME" class="button4 sizeb">ยืนยันการชำระเงิน</button>
			</div><br><br>





		

          

            <style>
                .sizeb{height:50px;width:200px;}
                .button4 {
                    background-color: white;
                    color: black;
                    border: 0.5px solid #000000;
                    border-radius: 100px;
                    transition-duration: 0.18s;
                }
                .button4:hover {
                    background-color: green;
                    color: white;
                }
            </style>

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
<table align="center">
<td>
<div  class="container " style="width:500px; ">
    <div align="center" class="card cc" style="width: 38rem;">
        <img src="pic/bank.jpg" style="height: 38rem;" class="card-img-top" alt="...">
    </div><br> 
    <div class="bg" align="center">
        <h3 align="center">Mr.Kittirat Aomchompool<br>SCB </h3>
    </div>
</div><br><br>
</td>
<td>
<div class="container " style="width:500px;">
    <div align="center" class="card cc" style="width: 38rem;">
        <img src="pic/goppy.jpg" style="height: 38rem;" class="card-img-top" alt="...">
    </div><br>
    <div class="bg">
        <h3 align="center">Mr.Chutdanai Charoensri<br>SCB </h3>
    </div>
</div><br><br>
</td>
</table>
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


