<?php
include 'dbconfig.php';

if($_SERVER['REQUEST_METHOD']==="POST")
{
    $todoitem=$_POST['todo'];
    $query="INSERT into todotask(task) values('$todoitem')";
    $results=$con->query($query);
   
 
    header('location:index.php');
}
?>