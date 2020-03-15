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
    $mail1 = $_SESSION["Email"];
 $connect = mysqli_connect("localhost", "root", "", "login_db");  

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
    <title>CSGAMESTORE &mdash; Admin</title>
    
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

									echo "<li class='TI3'> $name as $level &nbsp&nbsp </li>";
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
	            color:#000000 !important ;text-align:center;
            }
            .gg{
                 font-size:50px;
            }

        </style>
        <br /><br />  
           <div class="container" style="width:500px;">  
                <h2 align="center">Welcome <br>Admin  <?php echo $name;?></h2>  
                <br />  
                <div align="center">
                <form method="post" enctype="multipart/form-data">  
                       
                     <br />  
                     
                     <input type="submit" name="insert" id="insert" value="Check Order" class="btn btn-info" />  
                     </form>  
                     <div>

                <br />  
                <br />  
                <div >
                <table class="table table-bordered">  
                    <tr>  
                          <th>ref. img</th> 
                          <th>Username</th>
                          <th>Comfrim</th>
                          <th>email</th>
                          <th>Game</th>
                          <th>OrderTime</th>
                          <th>Price</th>
                          
                    </tr>
          
               <div class="gg">
                <?php  
                // $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                // $result = mysqli_query($connect, $query);
                // $io = 0;
                // $RTY = 0;
                // $eamilC = [];

                $query = "SELECT * 
                FROM tbl_images INNER JOIN gorder
                ON tbl_images.id = gorder.id";   
                
                $result = mysqli_query($connect, $query);
                $io = 0;
                $RTY = 0;
                

                                    
               function yui($val){
                    return $val;
               }
               if(isset($_POST["insert"])){
                    $io = $io+1;
               } 
               if ($io==1){
                    while($row = mysqli_fetch_array($result))            
               { 
                    echo '  
                         <tr>  
                              <td>  
                                   <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="320" width="220" class="img-thumnail" />
                         ';   
                                   echo "</td>";  
                                   echo '<td>';  
                                   echo "<a>".$row['username']."</a><td >"; 
                                    
                                   
                                   $OT = $row['Email'];
                                   $OT1 = $row['username'];
                                   $OT2 = $row['order_time'];
                                   $OT3 = $row['Gname'];
                                   
                                   echo '<form method="post" action ="mailjet/send.php">';
                                   
                                   echo "<input type='hidden' name='member' value='$OT'>";
                                   echo "<input type='hidden' name='username' value='$OT1'>";
                                   echo "<input type='hidden' name='order_time' value='$OT2'>";
                                   echo "<input type='hidden' name='Gname' value='$OT3'>";
                                   echo "<input type='submit' value='ยืนยันการชำระเงิน' name='P_$RTY'>";
                                   echo "</form></td><td>";

                                   $RTY =  $RTY+1;
                                   echo "<a>".$row['Email']."</a></td>"; 
                                   
                                   echo "<td><a>".$row['Gname']."</a></td>"; 
                                   echo "<td><a>".$row['order_time']."</a></td>";
                                   echo "<td><a>".$row['Price']."</a></td>";
                                   
                                   
                                  

                
                                    
                                    
                         echo "</tr>"; 
               
                      
                         
                              
                               
                              } 
                         
                    }
                    
                   
                    
                    
                    // $io0 = 0;
                    // function yui0($val0){
                    //      return $val0;
                    //      }
                    //      if(isset($_POST["P_0"])){
                         
                    //      $io0 = $io0+1;
                    //     } 
                    //  if ($io==1){

                    //      $_SESSION["Email"] = $eamilC[0];
                         
                    //  }

                    $i1 = 0;
                    function yui1($val1){
                         return $val1;
                    }
                    if(isset($_POST["P_0"])){
                          $i1 = $i1+1;
                    } 
                    if ($i1==1){
                         $_SESSION["Email"] = $eamilC[0];
                    } else{}
                    $i1 = 0;
                    ?>
                    </div>





                       
                       
                    
                    <!-- //    function yui2($val2){
                    // return $val2;
                    // }
                    // if(isset($_POST["P_'$RTY'"])){
                    // echo yui2($_POST["p_'$RTY'"]);
                    // $ior = $ior+1;
                    // } 
                    // if ($ior==1){} -->
                    
                       

                    </table>
                    
                        <?php 
                        // include('login/condb.php');
                        // function getComment($con){
                        //     $sql3 = "SELECT * FROM gorder ORDER BY order_time DESC;";
                        //     $result = $con->query($sql3);
                        //     echo '<td>'; 
                        //     while ($row = $result->fetch_assoc()) {
                                 
                        //                     echo   '<tr>';  
                        //                         echo "<a>เกมส์ที่สั่ง : ".$row['Gname']."</a>";
                        //                             echo "</td>";   
                        //                         echo "</tr>";  
                                              
                        //                          echo '<td>';  
                        //                             echo   '<tr>';  
                        //                                 echo "<a>ราคา : ".$row['Price']."</a>";
                        //                                 echo   '</tr>';
                        //                                     echo "</td>";   
                                                         
                        //     }echo "</td>"; 
                        // }	
                        // getComment($con);


                // function getComment2($connect){
                //     $sql3 = "SELECT * FROM gorder ORDER BY Price DESC;";
                //     $result3 = $conect->query($sql3);
                //     while ($row = $result3->fetch_assoc()) {
                //         echo '<tr>';  
                //             echo   '<td>';  
                //                 echo "<a>เกมส์ที่สั่ง : ".$row['Gname']."</a>";
                //                     echo "</td>";   
                //                 echo "</tr>";  
                              
                //                  echo '<tr>';  
                //                     echo   '<td>';  
                //                         echo "<a>ราคา : ".$row['Price']."</a>";
                //                             echo "</td>";   
                //                         echo "</tr>";  
                //     }
                // }	
                // getComment2($conect);
            
            
            
            
            
                                
                
               
               
               
               
               
               
               
                // while ($row = $result1->fetch_assoc()) 
                // {  
                //     echo '<tr>';  
                //     echo   '<td>';  
                //         echo "<a>เกมส์ที่สั่ง : ".$row['Gname']."</a>";
                //             echo "</td>";   
                //         echo "</tr>";  
                      
                //          echo '<tr>';  
                //             echo   '<td>';  
                //                 echo "<a>ราคา : ".$row['Price']."</a>";
                //                     echo "</td>";   
                //                 echo "</tr>";  
                       

                     
                // }}

                    
               //  while($row = mysqli_fetch_array($result))  
               //  {  
               //       echo '  
               //            <tr>  
               //                 <td>  
               //                      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
               //                 </td>  
               //            </tr>  
               //       ';  
               //  } ?>
                 
                 
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



