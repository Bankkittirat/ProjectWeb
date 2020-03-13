<?php session_start();
include 'condb.php';


    $username = $_POST['username'];
    $sql3 = "SELECT * FROM login";
    $result = $con->query($sql3);
    while ($row = $result->fetch_assoc()) {

    $username = $row['username'];
    
    if($UYT == $username){
        echo "<script type=\"text/javascript\">";
        echo "alert(\"ซ้ำจ้าาาา\");";
        echo "</script>";
    }
    else{}
    
}

?>