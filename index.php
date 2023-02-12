<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <form action="insert.php" method="get">
        <div class="contanier">
            <div class="bg-white mt-3 py-3">
                <h3 class="d-flex justify-content-center">TODO LIST</h3>
                <div class="d-flex justify-content-center">
                    <input type="text" name="todo" class="from-control">
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" name="submit" type="submit" >Add DATA</button>
                </div>
            </div>
        </div>
    </form>
    <?php
 include 'config.php';

    $rawdata=mysqli_query($conn,"SELECT * FROM `todo_list`");


?>
    <!-- / table/ --> 
   <div class="container">
    <div class="col-8 bg-white m-auto mt-3">
        <table class="table">
         <tbody>
         <tr>
       
       <?php
       while($row=mysqli_fetch_array($rawdata)){

       
       ?>
        <td > 
            <?php
            echo $row['Id'];
            
            
            ?>
    </td>
    <td  > 
            <?php
           
            echo $row['Name'];
            
            ?>
    </td>
    <td  >
    <a href="update.php ? ID=<?php echo $row['Id'];?> ">
     <button style="width:100%"  class="btn btn-danger" >update</button>
    </a> 
</td>
    <td  >
    <a href="delete.php ? ID=<?php echo $row['Id'];?> ">
    <button style="width:100%" type="submitdelete" name="submitdelete" class="btn btn-success" > 
        delete</button>
    </a>
</td>
</tr>
<?php
}
?>

         </tbody>   

        </table>

    </div>


   </div>


</body>

</html>

