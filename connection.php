<?php

$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'crudtable');


if($conn){
    echo "connetced";
}else{
    echo "Not connected";
}








?>