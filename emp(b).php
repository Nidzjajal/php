<?php 
	
	include("connection.php");
	session_start();

?>
<html>
	<head><link rel="stylesheet" href="bootstrap.min.css" /></head>
	<body>
		<div class="container bg-secondary text-dark mt-4 w-50">
			<form method="POST">
				<h1 class="border-bottom">EMPLOYEE</h1>
				<div class="row p-1">
					<div class="col-3">Name</div>
					<div class="col-9"><input type="text" name="name" class="form-control" placeholder="Enter Your Name"></div>
				</div>
				
				<div class="row p-1">
					<div class="col-3">Email</div>
					<div class="col-9"><input type="Email" name="email" class="form-control" placeholder="Enter Your Email"></div>
				</div>
                <div class="row p-1">
					<div class="col-3">Password</div>
					<div class="col-9"><input type="password" name="password" class="form-control" placeholder="Enter Password here"></div>
				</div>
                <div class="row p-1">
					<div class="col-3">Mobile</div>
					<div class="col-9"><input type="number" name="mobile" class="form-control" placeholder="Enter Mobile number"></div>
				</div>
					<div class="col-6 text-center"><button type="submit" name="add" class="btn bg-dark text-white">Add</button><button type="submit" name="login" class="btn bg-info text-white">Login</button>
					<a href="show.php" class="btn bg-danger text-white">Show</a>
					
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<?php 

	if(isset($_POST['add']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobile=$_POST['mobile'];

		$insert="insert into employee(name,email,password,mobile)values('$name','$email','$password','$mobile')";
		$result=$conn->query($insert);
		
        if($result)
        {
            echo"<script>alert('inserted...');window.location.href='show.php'</script>";
        }
        else
        {
            echo"error..";
        }
	}
	if(isset($_POST['login']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobile=$_POST['mobile'];
	}

?>