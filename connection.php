<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="amazon_register";
    $conn=new mysqli($servername,$username,$password,$dbname,3307);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
?>