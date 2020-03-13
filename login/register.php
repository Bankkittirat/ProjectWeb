
<?php
include('h.php');
?>
<!DOCTYPE HTML>



<html>
	<head>
    <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CSGAMESTORE &mdash; REGISTER</title>
    


	
</head>
<body>






<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Register</h3>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" required placeholder="Username" />
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="Email" class="form-control" require placeholder="Email">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="password" name= "password" class="form-control" require placeholder="Password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" name ="name1" class="form-control" require placeholder="Nickname">
					</div>

					<div align="center" class="form-group">
                        <input type="submit" value="Register" name="pop" class="btn login_btn"></a>
					</div>
				</form>
			</div>

			<div class="card-footer">
                <div class="d-flex justify-content-center links">
					Already have an account?<a href="index.php" >Login</a>
				</div>
                <div class="card-footer">
				<div align="center" class="form-group">
					<a href="../index2.php"><input type="submit" value="Back to home" class="btn login_btn">
				</div>

			</div>
        
		</div>
	</div>
</div>



    
<!-- <form method="post" action="">
                    
                    <input type="text" name="username" require placeholder="Username">
                    <input type="email" name="Email" require placeholder="Email">
                    <input type="password" name= "password" require placeholder="Password">
                    <input type="text" name ="name1" require placeholder="Nickname">
                    <input type="submit" value="Register" name="pop">
</form> -->







<?php session_start();
include 'condb.php';

$io = 0;
// function getLog($con,$username){
//     $sql3 = "SELECT * FROM login";
//     $result = $con->query($sql3);
// while ($row = $result->fetch_assoc()) {

//     $UYT = $row['username'];
//     echo $UYT;
//     if($UYT == $username){
//         echo "<script type=\"text/javascript\">";
//         echo "alert(\"ซ้ำจ้าาาา\");";
//         echo "window.history.back();";
//         echo "</script>";
//     }
//     else{
        
//     }
    
// }
// }
function yui($val){
    return $val;
    }
if(isset($_POST["pop"])){
    echo yui($_POST["pop"]);
    $io = $io+1;
    // header("Location: index.php");
}
    
    if ($io==1){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name1'];
        $Email = $_POST['Email'];
        
        
        $sql3 = "SELECT * FROM login";
        $result = $con->query($sql3);
        $jj = 0;
        while ($row = $result->fetch_assoc()) {

        $UYT = $row['username'];
   
        if($UYT == $username){
        echo "<script type=\"text/javascript\">";
        echo "alert(\"ซ้ำจ้า\");";
        ;
        echo "</script>";
        $jj = $jj+1;
        } 
        else{
        
        }
    
    }   
    mysqli_query($con, "INSERT INTO login(username, password, name, Email ,level,coin)
    VALUES('$username', '$password', '$name', '$Email', 'member', 0)");
    if($jj <= 0){
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Register complete\");";
    echo "</script>";
    $io = 0;
    header("Location: register.php");
    }   
    }
else {
    echo "Member not added";
}
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://www.ecopetit.cat/wpic/mpic/5-51207_4k-gaming-wallpaper-assassins-creed-full-hd.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
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
       
        <!-- //$query = "INSERT INTO login(username, password, name, Email)
         //VALUES('$username', '$password', '$name', '$gmail')";
          
            

    //    if($result){
    //          echo "<div class = 'from'>
    //            <h3> You are  registered successfully</h3>
    //           <br> Click here to <a  herf='login.php'>Login</a>
    //           </div>";
    //       }
    //    else { }

    
        //  $username = stripslashes($_REQUEST['username']);
        // $username = myqli_real_escape_string($con, $username);
        // $email = stripslashes($_REQUEST['email']);
        // $email = myqli_real_escape_string($con, $email);
        // $password = stripslashes($_REQUEST['password']);
        // $password = myqli_real_escape_string($con, $password);

        // $query = "INSERT INTO login(username,password,Email )
        //             VALUES('$username','".md5($password)."','$email')";

        // $result = mysqli_query($con, $query);
        // if($result){
        //     echo "<div class = 'from'>
        //          <h3> You are  registered successfully</h3>
        //          <br> Click here to <a  herf='login.php'>Login</a>
        //          </div>";
        //     }
        // else { -->
                
            
        
      
            <!-- <from action="" method="post">
                    <label>Username</label>
                    <input type="text" name="username" require>
                    <input type="email" name="Email" require>
                    <input type="password" name= "password" require>
                    <input type="text" name ="name1" require>
                    <input type="submit" value="Register">
            </from> -->

</body>
            
</html>