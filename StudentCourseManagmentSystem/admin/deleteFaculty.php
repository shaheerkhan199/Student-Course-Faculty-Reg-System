<?php
    include('../checkSession.php');
	include('../conn.php');
	$facultyId = $_GET['id'];
	$query="DELETE FROM faculty WHERE faculty_id=$facultyId";
	$retval = mysqli_query($conn,$query);
	if(! $retval ) 
	{
        die('Could not delete data: ' . mysql_error());
    }
    else
    {
    	?>
    	alert("Data Deleted Successfully");
    	<?php
    }        
             mysqli_close($conn);
             header("Location:facultyControls.php");
?>