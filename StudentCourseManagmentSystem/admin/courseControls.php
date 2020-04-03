<?php
include('../checkSession.php');
include('header.php');
?>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <a href="addCourse.php" class="btn btn-primary btn-block">Add New Course</a>
    </div>
    <br>
    <div class="col-md-4"></div>
</div>
<br>
	<?php
    include('../conn.php');
    $query = "SELECT * FROM course";
    $result = $conn->query($query);
    if ($result->num_rows>0) 
    {
        ?>
        <div class="container">
        <h2>All Courses</h2>
            <table class="table table-striped">
            <thead>
                <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Faculty Member</th>
                <th>Strength</th>
                <th>Edit/Delete</th>
                </tr>
            </thead>
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['course_id']."</td>";
            echo "<td>".$row['course_name']."</td>";
            echo "<td>".$row['course_faculty_name']."</td>";
            echo "<td>".$row['course_strength']."</td>";
            $cid=(int)$row['course_id'];
           	echo "<td><a href='#' onclick='deleteRecord(".$cid.")' >Delete</a></td>";
           	//href='deleteCourse.php?cid=$cid'
            echo "</tr>";
            echo "</tbody>";
        }

        echo "</table>";
        echo "</div>";
    }
?>
    
    
<script type="text/javascript">
function deleteRecord(id)
{
    var conf = confirm("Are you sure you want to delete this choice?" + id);
    if(conf == true)
    {
    	//var id = "<?php $cid ?>";
        //alert(id);
        window.location = "deleteCourse.php?id="+id;
    }
}
</script>

<?php
include('footer.php')
?>