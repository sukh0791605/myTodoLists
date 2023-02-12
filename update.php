<?php
 include 'config.php';
 $id=$_GET['ID'];
    $rawdata=mysqli_query($conn,"SELECT `Name` FROM `todo_list` WHERE `Id`=$id");

    while($row=mysqli_fetch_array($rawdata))
    {
$Name= $row['Name'];
echo $Name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="updatenew.php">
<div class="contanier">
    <div class="bg-white mt-3 py-3">
        <h3 class="d-flex justify-content-center">TODO LIST</h3>
        <div class="d-flex justify-content-center">
            <input type="text" name="updatetodo" value="
            <?php
            
           
           echo  $Name;
            
            
            ?>
            " class="from-control" >
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <input type="submit" name="Id" value="<?php
             echo $id;
            ?>">
        </div>
    </div>
</div>
</form>   
</body>
</html>
