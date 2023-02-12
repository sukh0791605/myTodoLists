<?php

include 'config.php';
$newtodo=$_POST['updatetodo'];
$id=$_POST['Id'];
    $update="UPDATE `todo_list` SET `Name`='$newtodo' WHERE `Id`=$id";
    if(mysqli_query($conn,$update)){
       
       
        header("location:index.php");
    }
     else{
         echo "something is wrong";
     }


?>