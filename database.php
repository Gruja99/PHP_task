<?php
    $url='localhost';
    $username='root';
    $password='';
    $name = "php_task";

    $conn=mysqli_connect($url,$username,$password,$name);
    if(!$conn){
        die('Nije se moguce konektovati:'.mysqli_error());
    };
?>