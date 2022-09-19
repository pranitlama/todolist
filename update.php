<?php
include 'dbconfig.php';
if(isset($_POST['edit-btn']))
{
    $id=$_POST['id'];
    $task=$_POST['todo'];
    $query="UPDATE  todotask set task='$task' where  id='$id'";
    $resultss=$con->query($query);
    header('location:index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
        <input type="text" class="input"  name="todo" palceholder="task to do" id="" value="<?php echo $_POST['todo']?>"required>
        <button type="submit" class="btn btn-primary add" name="edit-btn">EDIT</button>

    </form>
</body>
</html>