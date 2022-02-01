<?php

include("connection.php");


$id=$_GET['id'];

$q="DELETE FROM crud WHERE id=$id";

$result=mysqli_query($conn,$q);

if($result){
    header("location:display.php");
}else{
    echo "data not deleted";
}







?>