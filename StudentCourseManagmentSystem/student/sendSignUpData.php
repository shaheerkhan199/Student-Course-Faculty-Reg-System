<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	
</script>
<body>

</body>
</html>

<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$userpassword = $_POST['password'];
$dob = $_POST['dob'];
$status = "Unapproved";

include('../conn.php');
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
else{
	$sql = "INSERT INTO student VALUES ('','$full_name', '$email', '$userpassword', '$dob','$status')";
    mysqli_query($conn,$sql);
	$seconds = 5;
	sleep($seconds);
  } 
   $conn->close();
   $a = True;
   header("Location: ../login.php?success=$a");

?>