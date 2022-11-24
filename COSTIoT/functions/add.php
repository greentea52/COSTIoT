<?php
$con = mysqli_connect("localhost", "user", "password", "dbname");
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno());
}

$test=htmlspecialchars($_POST['test']);

$query=$con->prepare("Insert into `tablename` (`columnname`) values (?)");
$query->bind_param('s', $test);

if ($query-execute()){
    header("Location:http://");
}
else{
    echo $query->error;
}
?>