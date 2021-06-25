<?php
$host='localhost';
$user='root';
$pwd='';
$db='mydata';

$con = mysqli_connect ($host, $user, $pwd, $db);

if (mysqli_connect_errno()){
    echo mysqli_connect_errno();
    exit();
}
?>
