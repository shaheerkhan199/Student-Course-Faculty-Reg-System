<?php
include('../checkSession.php');
include('header.php');
?>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <a href="addFaculty.php" class="btn btn-primary btn-block">Add Faculty</a>
    </div>
    <br>
    <div class="col-md-4"></div>
</div>
<br>
<?php
    include('../conn.php');
    $query = "SELECT * FROM faculty";
    $result = $conn->query($query);
    if ($result->num_rows>0) 
    {
        ?>
        <div class="container">
        <h2>All Faculty Members</h2>
            <table class="table table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Designation</th>
                <th>Edit/Delete</th>
                </tr>
            </thead>
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['faculty_id']."</td>";
            echo "<td>".$row['faculty_full_name']."</td>";
            echo "<td>".$row['faculty_des']."</td>";
            echo "<td><a href='#' onclick='deleteRecord(".$row['faculty_id'].");' >Delete</a></td>";
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
    var conf = confirm("Are you sure you want to delete this choice?");
    if(conf == true)
    {
        window.location = "deleteFaculty.php?id="+id;
    }
}
</script>

<?php
include('footer.php')
?>