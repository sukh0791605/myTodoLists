<?php

include 'config.php';
$id=$_GET['ID'];

echo $id;


   $delete="DELETE FROM `todo_list` WHERE `Id`=$id";
   if(mysqli_query($conn,$delete)){
    header("location:index.php");
   }
   else{
    echo "something is worng";
   }


?>