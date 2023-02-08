<?php

$servername="localhost";
$username="root";
$password="";
$db="MyTodoList";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error){
    die("ohh error".$conn->connect_error);
}


?>