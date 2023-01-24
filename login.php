<?php
	include("header.php");
?>
	<form method="POST">
	<div class="container bg-dark text-white w-50 mt-2">
		<h1 class ="border-bottom">Register</h1>
		
		<div class="row p-1">
			<div class="col-3">Username</div>
			<div class="col-9"><input type="text" class="form-control"name="username" placeholder="enter user name"/>
			</div>
		</div>
		
		<div class="row p-1">
			<div class="col-3">Password</div>
			<div class="col-9"><input type="password" class="form-control"name="password" placeholder="enter password"/>
			</div>
		</div>
		<div class="row p-1">
			<div class="col text-center">
			<input type="submit" class="btn bg-danger text-white"name="Add" />
			</div>
		</div>
	</div>
	</form>
	<?php
	$conn=new mysqli("localhost","root","","kbpccs");
	if($conn)
			echo "connected";
	else
			echo "not conected";
	if(isset($_POST['Add']))
	{
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$insert="insert into student(username , password)values('$username','$password')";
			$result=$conn->query($insert);
			
			if($result)
			{
				
					echo "<script> alert('insert');</script>";			
					echo "<script> window.location.href='dummy.php';</script>";	
			}
			else	
			     echo "error";
			
	}
	?>
<?php
	include("footer.php");
?>