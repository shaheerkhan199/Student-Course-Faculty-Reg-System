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
    <form action="addCourse.php" method="post">
        <h2 class="text-center">Add New Course</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Course ID" name="cid" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Course Name" name="cname" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Credit Hours" name="chours" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Faculty Name" name="fname" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Day & Time" name="cdt" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Location" name="cloc" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Strength" name="cstrength" required="required">
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
    $cid = $_POST['cid'];
    $cname = $_POST['cname'];
    $chours = $_POST['chours'];
    $fname = $_POST['fname'];
    $cdt = $_POST['cdt'];
    $cloc = $_POST['cloc'];
    $cstrength = $_POST['cstrength'];
    include('../conn.php');
    $sql = "INSERT INTO course VALUES ('$cid','$cname', '$chours', '$fname', '$cdt','$cloc','$cstrength')";
    mysqli_query($conn,$sql);
    $seconds = 5;
    sleep($seconds);
    $conn->close(); 
    header("Location:courseControls.php"); 
}

?>