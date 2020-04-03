<?php
session_start();
include('../conn.php');
$cid = (int)$_GET['cid'];
//echo $cid;
$sid=(int)$_SESSION['sid'];
$sql = "DELETE FROM registeredCourses where stud_id='$sid' AND course_id='$cid'";
    mysqli_query($conn,$sql);
    $conn->close();
   header("Location: checkRegisteredCourse.php");




?>