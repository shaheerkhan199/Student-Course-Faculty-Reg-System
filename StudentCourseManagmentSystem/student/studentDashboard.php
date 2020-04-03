<?php
include('../checkSession.php');
include('header.php');
?>
<br/>

	<?php
    include('../conn.php');
    $query = "SELECT * FROM course";
    $result = $conn->query($query);
    if ($result->num_rows>0) 
    {
        ?>
        <div class="container">
        <h2>All Courses</h2>
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
            // $sid = $_SESSION['sid'];
            // $sql="SELECT * from registeredCourses WHERE stud_id='$sid' AND course_id='$cid'";
            // $result = $conn->query($sql);
            // if ($result->num_rows>=1) 
            // {
            //     echo "<td><a href='addCourse.php?cid=$cid'><input type='submit' class='btn btn-success' value='Add' disabled></a> </td>";
            // }
            // else{
            //     echo "<td><a href='addCourse.php?cid=$cid'><input type='submit' class='btn btn-success' value='Add'></a> </td>";                    
            // }

           	echo "<td><a href='addCourse.php?cid=$cid'><input type='submit' class='btn btn-success' value='Add'></a> </td>";
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
