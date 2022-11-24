<?php
$con = mysqli_connect("localhost", "user", "password", "dbname");
    if (!$con){
        die('Could not connect: ' . mysqli_connect_errno());
    }

    $test=$_POST['test'];

    $query=$con->prepare("Delete from `columnname` where `id` = ?");
    $query->bind_param('i', $test);

    if ($query->execute()){
        header("Location:");
    }
    else{
        echo $query->error;
    }
?>