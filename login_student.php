<?php 

	include("connection.php");
	session_start();

?>
<html>
	<head><link href="bootstrap.min.css" rel="stylesheet" /></head>
	<body>
		
			<form method="POST">
		<div class="container w-50 mt-4 bg-dark text-white">
		<h1 class="border-bottom p-1">Login</h1>
			<div class="row p-1">
				<div class="col-3">
					User Name
				</div>
				<div class="col-9">
					<input type="text" name="username" placeholder="Enter Your Name" class="form-control" required >
				</div>
			</div>
			
			<div class="row p-1">
				<div class="col-3">
					Password
				</div>
				<div class="col-9">
					<input type="password" name="password" placeholder="Enter Your Password" class="form-control" required >
				</div>
			</div>
			<div class="row p-1">
			<div class="col text-center">
				<button type="submit" class="btn bg-warning text-white" name="login">Login</button>
			</div>
		</div>
		</div>
		
		</form>
		
	</body>
</html>

<?php

	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$select="select * from student where username='$username' and password='$password'";
		$result=$conn->query($select);
		
		$count=mysqli_num_rows($result);
		
		if($count>0)
		{
			$_SESSION['username']=$username;
			echo "<script>window.location.href='student_show.php';</script>";
		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Incorrect username or Password</strong></div>";
		}
		
	}

?>