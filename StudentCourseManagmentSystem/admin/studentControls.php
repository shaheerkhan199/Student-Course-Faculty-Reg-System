<?php
include('../checkSession.php');
include('header.php');
?>
<br><br>

<?php
    include('../conn.php');
    $query = "SELECT * FROM student";
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
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Approve/Delete</th>
                </tr>
            </thead>
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tbody style='overflow:auto;'>";
            echo "<tr>";
            echo "<td>".$row['stud_id']."</td>";
            echo "<td>".$row['stud_full_name']."</td>";
            echo "<td>".$row['stud_email']."</td>";
            echo "<td>".$row['stud_password']."</td>";
            echo "<td>".$row['status']."</td>";
            $sid=$row['stud_id'];
            echo "<td><a href='deleteStudent.php?sid=$sid'>Delete</a>/<a href='approveStudent.php?sid=$sid'>Approve</a></td>";
            echo "</tr>";
            echo "</tbody>";
        }

        echo "</table>";
        echo "</div>";
    }
?>

    
</script>

<?php
include('footer.php')
?>