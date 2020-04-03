<?php
session_start();
include('../conn.php');
$cid = (int)$_GET['cid'];
//echo $cid;
$sid=(int)$_SESSION['sid'];
$sql = "INSERT INTO registeredCourses VALUES ('$sid','$cid')";
    mysqli_query($conn,$sql);
    $conn->close();
   header("Location: studentDashboard.php");




?>