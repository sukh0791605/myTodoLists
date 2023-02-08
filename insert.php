<?php
 
include "config.php";
$Listtodo=$_POST['todo'];
 
    $sql="INSERT INTO `todo_list` (`Name`) VALUES ('$Listtodo')";
    if(mysqli_query($conn,$sql)){
       header("location:index.php");
    }
    else{
        echo "something is wrong";
    }



?>