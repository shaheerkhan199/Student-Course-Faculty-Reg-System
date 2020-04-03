<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username or Email" required="required" name="uname">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required" name="pwd">
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="student/signup.php">Create an Account</a></p>
</div>
</body>
</html>                

<?php
if (isset($_GET['success'])) {
    //$isShowAlert = $_GET['success'];
    echo "<div class='container'>";
        echo "<div class='alert alert-success'>
        <strong>Success!</strong> You are now Registered and able to Login.
        </div>";
    echo "</div>";
}
else{
    echo "<div class='container'>";
        echo "<div class='alert alert-warning'>
        <strong>Warning!</strong> Make Sure you are Registered if not Then Registered First by clicking Here <a href='student/signup.php'>SignUp</a>.
        </div>";
    echo "</div>";
}


?>                		                            

<?php

if (isset($_POST['uname']) && isset($_POST['pwd'])) {
   //header("Location:admin/adminDashboard.php");
    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];
    if (strtolower($uname)=='admin' && strtolower($pass)=='admin') {
        $_SESSION["login"] = True;
        header("Location:admin/adminDashboard.php");
    }
    else{
        include('conn.php');
        $sql = "SELECT * FROM student WHERE stud_email='$uname' AND stud_password='$pass'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
            if ($result->num_rows>=1) {
                $_SESSION["login"] = True;
                $_SESSION['uname']=$row['stud_full_name'];
                $_SESSION['sid']=$row['stud_id'];
                header('Location: student/studentDashboard.php');                
            }
            else {
                echo "<div class='container'>";
                    echo "<div class='alert alert-danger alert-dismissible'>
                    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Warning!</strong> Invalid Login Username or Password is incorrect
                    </div>";
                echo "</div>";
            }
    }
}




?>