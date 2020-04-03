<?php
include('../checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;           
    }
</style>
</head>
<body>
	<div class="login-form">
    <form action="addFaculty.php" method="post">
        <h2 class="text-center">Add New Faculty</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name" name="fname" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="fpwd" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cell no" name="fcell" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Designation" name="fdes" required="required">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Salary" name="fsal" required="required">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="fdob" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="fmail" required="required">
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submitbtn">Submit</button>
        </div>
            
    </form>
    <p class="text-center"><a href="adminDashboard.php">Go Back</a></p>
</div>
</div>
</body>
</html>   
<?php
if(isset($_POST['submitbtn']))
{
    //header("Location:adminDashboard.php");
    $fname = $_POST['fname'];
    $fpwd = $_POST['fpwd'];
    $fcell = $_POST['fcell'];
    $fdes = $_POST['fdes'];
    $fsal = $_POST['fsal'];
    $fdob = $_POST['fdob'];
    $fmail = $_POST['fmail'];
    include('../conn.php');
    $sql = "INSERT INTO faculty VALUES ('','$fname', '$fpwd', '$fcell', '$fdes','$fsal','$fdob','$fmail')";
    mysqli_query($conn,$sql);
    $seconds = 5;
    sleep($seconds);
    $conn->close(); 
    header("Location:facultyControls.php"); 
}

?>