<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="username" class="form-control" required placeholder="Username" />
<input type="submit" value="Register" name="pop" class="btn login_btn"></a>
</form>
<?php 
include 'condb.php';
$username = $_POST['username'];



    $sql3 = "SELECT * FROM login";
    $result = $con->query($sql3);
while ($row = $result->fetch_assoc()) {

    $UYT = $row['username'];
   
    if($UYT == $username){
        echo "<script type=\"text/javascript\">";
        echo "alert(\"ซ้ำจ้า complete\");";
        ;
        echo "</script>";
    }
    else{
        
    }
    
}



       
?>
