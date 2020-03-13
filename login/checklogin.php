<?php 
session_start();

        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];
                      $_SESSION["username"]=$row["username"];
                      $_SESSION["coin"]=$row["coin"];
                      $_SESSION["Email"]=$row["Email"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: admin.php");


                      }
                  if ($_SESSION["level"]=="member"){ 

                        Header("Location: ../index2.php");  
                        $_SESSION['login_in'] = 1; // ล็อคอินสำเร็จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ
                        // echo '<br /><a href="index3.php">index3</a>';
                        // echo '<br /><a href="index2.php">index2</a>';
                        // echo '<br /><a href="DEADBY.php">DEADBY</a>';
                        // echo '<br /><a href="GTAV.php">GTAV</a>';
                        // echo '<br /><a href="PUBG.php">PUBG</a>';
                        // echo '<br /><a href="MHW.php">MHW</a>';
                        $login_in = 1;
                      }
                  }else{
                        echo "<script>";
                        echo "alert(\" Invalid username or password\");"; 
                        echo "window.history.back()";
                        echo "</script>";
                        $_SESSION['login_in'] = 0;
                        

 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>
