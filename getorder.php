
<?php 
session_start();

include("login/condb.php");

$member = $_POST['POPW'];


echo $member;
function getComment($con){
    $sql3 = "SELECT * FROM gorder;";
    $result = $con->query($sql3);

    while ($row = $result->fetch_assoc()){
    echo "<a".$row['Gname']."</a>";
    $_SESSION["Gname"] = $row["Gname"];

    echo "<a>".$row['Price']."</a>"."<br>";
    $_SESSION["Price"] = $row["Price"];
    }

                                        }	
                                        getComment($con);
                                        echo $_SESSION["Gname"];
                                       echo $_SESSION["Price"];
                                        echo $_SESSION["Email"];                             
?>