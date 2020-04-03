<?php
	include('../checkSession.php');
	include('../conn.php');
	$sid = $_GET['sid'];
    $sql = "DELETE FROM student WHERE stud_id=$sid";
    mysqli_query($conn,$sql);
    $conn->close(); 
    header("Location:studentControls.php"); 
?>