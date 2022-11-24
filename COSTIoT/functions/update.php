<?php
$con = mysqli_connect("localhost", "user", "password", "dbname");
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id =$_POST['id'];
    $test=htmlspecialchars($_POST['test']);
    
    $query=$con->prepare("UPDATE `tablename` SET `columnname` = ?, WHERE `id` = ?");
    $query->bind_param('si', $test, $id);
    
    if ($query-execute()){
        header("Location:");
    }

    else{
        echo $query->error;
    }
}
?>