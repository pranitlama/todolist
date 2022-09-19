<?php
include 'dbconfig.php';

if(isset($_POST['del']))
{
    $id=$_POST['id'];
    $query="DELETE from todotask where id='$id'";
    $resultss=$con->query($query);
}
header('location:index.php');


?>