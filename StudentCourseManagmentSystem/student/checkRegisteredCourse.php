<?php
include('../checkSession.php');
include('header.php');
?>
<br/>

	<?php
    include('../conn.php');
    $sid=(int)$_SESSION['sid'];
    //$query = "SELECT * FROM course WHERE course_id=(SELECT course_id FROM registeredCourses WHERE stud_id='$sid')";
$query = "SELECT * FROM course c INNER JOIN registeredCourses rc WHERE c.course_id=rc.course_id AND rc.stud_id='$sid';";
    $result = $conn->query($query);
    if ($result->num_rows>0) 
    {
        ?>
        <div class="container">
        <h2>Only Your Registered Courses</h2>
            <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Credit Hrs</th>
                <th>Faculty Member</th>
                <th>Timetable</th>
                <th>Strength</th>
                <th>Register/Unregister</th>
                </tr>
            </thead>
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['course_id']."</td>";
            echo "<td>".$row['course_name']."</td>";
            echo "<td>".$row['course_credit_hour']."</td>";
            echo "<td>".$row['course_faculty_name']."</td>";
            echo "<td>".$row['course_day_time']."</td>";
            echo "<td>".$row['course_strength']."</td>";
            $cid=(int)$row['course_id'];
           	echo "<td><a href='removeCourse.php?cid=$cid'><input type='reset' class='btn btn-danger' value='Remove'></a> </td>";
            //<a href='removeCourse.php?cid=$cid'><input type='reset' class='btn btn-danger' value='Remove'></a>
           	//href='deleteCourse.php?cid=$cid'
            echo "</tr>";
            echo "</tbody>";
        }

        echo "</table>";
        echo "</div>";
    }
?>
    	<br/>

<?php
include('footer.php');
?>
