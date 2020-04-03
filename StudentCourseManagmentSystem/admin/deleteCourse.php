<?php
    include('../checkSession.php');
	include('../conn.php');
	$courseId = (int)$_GET['id'];
    //echo $courseId;
	//$query="DELETE FROM course WHERE course_id=$courseId";
	$sql = "DELETE FROM course WHERE course_id=$courseId";
    //$retval = mysqli_query($conn,$query);
	if ($conn->query($sql) === TRUE) {
       ?>
        alert("Data Deleted Successfully");
        <?php 
    }
    else 
    {
        echo "Error deleting record: " . $conn->error;
    }
     $conn->close();
             header("Location:courseControls.php");
?>