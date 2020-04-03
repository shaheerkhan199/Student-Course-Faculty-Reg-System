
<?php
include('../checkSession.php');
include('header.php');
?>
	<br>
	<?php
	include('../conn.php');
	if ($conn->connect_error) {
    	die("Connection failed: " . $con->connect_error);
	} 
	else{
		$sql1 = "SELECT * from student WHERE status='Approved';";
	    $result1=mysqli_query($conn,$sql1);
	    $totalApprovedStudents=mysqli_num_rows($result1);

		$sql2 = "SELECT * from student WHERE status='Unapproved';";
	    $result2=mysqli_query($conn,$sql2);
	    $totalUnApprovedStudents=mysqli_num_rows($result2);

	    $sql3 = "SELECT * from faculty;";
	    $result3=mysqli_query($conn,$sql3);
	    $totalFaculty=mysqli_num_rows($result3);

	    $sql4 = "SELECT * from course;";
	    $result4=mysqli_query($conn,$sql4);
	    $totalCourses=mysqli_num_rows($result4);
	} 
	 echo "<div class='container'>";
        
        echo "<div class='alert alert-success alert-dismissible'>
        	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Note!</strong> Our Total number of Active Students is $totalApprovedStudents.
        </div>";

         echo "<div class='alert alert-success alert-dismissible'>
        	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Note!</strong> Our Total number of Active Students is $totalUnApprovedStudents.
        </div>";

         echo "<div class='alert alert-success alert-dismissible'>
        	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Note!</strong> Our Total number of Faculty is $totalFaculty.
        </div>";

        echo "<div class='alert alert-success alert-dismissible'>
        	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Note!</strong> Our Total number of Offered Courses is $totalCourses.
        </div>";

    echo "</div>";
	 //echo $rowcount;
    $conn->close();
  


	?>
	<?php
		include('footer.php');
	?>