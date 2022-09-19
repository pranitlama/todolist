<?php
include('./dbconfig.php');
$sql="SELECT * from todotask";
$result=$con->query($sql);


?>


<style>

span{
  color:red;
}
h1{
    text-align:center;
}

input[type=text],btn-primary{
  position:absolute;
   left:30%;
   width:400px;
   height:35px;
}
.add{
  position:absolute;
  right:34%;
}
</style>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO LISTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
<?php


?>
  <h1>TO<span>DO</span> LISTS</h1>
    <form action="todo.php" method="post">
        <input type="text" class="input"  name="todo" palceholder="task to do" id="" required>
        <button type="submit" class="btn btn-primary add" >ADD TASK</button>

    </form>
    <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TASKS</th>
      <th scope="col">DELETE</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row=$result->fetch_assoc())
    {?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['task']?></td>
      <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <td><button class="btn btn-danger" name="del">DELETE</button></td>
      </form>
      <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      <input type="hidden" name="todo" value="<?php echo $row['task']?>">
        <td><button class="btn btn-primary">EDIT</button></td>
      </form>
    </tr>
    <?php
    }
    ?>
   
   
  </tbody>
</table> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>