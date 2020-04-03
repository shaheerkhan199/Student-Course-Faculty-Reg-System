<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
			<h1>Welcome <?php echo $_SESSION['uname']?></h1>
			<p>You Can Regitser your course here</p>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <a class="navbar-brand" href="studentDashboard.php">Dashboard</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="checkRegisteredCourse.php">Check Registered Courses</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Demo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Demo</a>
	      </li>    
	    </ul>
	    
	  </div>
	  <div class="float-right">
	  	<ul class="nav navbar-nav">
	      <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	    </ul>
	  </div>  
	</nav>
</body>