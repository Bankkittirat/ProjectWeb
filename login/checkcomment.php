<?php 
include 'condb.php';
function getComment($con){
    $sql3 = "SELECT * FROM comment";
    $result = $con->query($sql3);
while ($row = $result->fetch_assoc()) {

    echo $row['name']."   ";
    echo $row['date_time']."<br>";
    echo $row['commento']."<br>";
    # code...
}
}

getComment($con)
       
?>
