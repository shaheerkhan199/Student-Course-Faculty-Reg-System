<?php
	include('../checkSession.php');
	include('../conn.php');
	$sid = $_GET['sid'];
	$status="Approved";
    $sql = "UPDATE student SET status='Approved' WHERE stud_id=$sid";
    mysqli_query($conn,$sql);
    $conn->close(); 
    header("Location:studentControls.php");

?>