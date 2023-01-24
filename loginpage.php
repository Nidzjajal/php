
<?php
include('conection.php');
session_start();
?>
	<form method="POST">
	<div class="container bg-dark text-white w-50 mt-2">
		<h1 class ="border-bottom">Register</h1>
		
		<div class="row p-1">
			<div class="col-3">Username</div>
			<div class="col-9"><input type="text" class="form-control"name="username" placeholder="enter user name" required/>
			</div>
		</div>
		
		<div class="row p-1">
			<div class="col-3">Password</div>
			<div class="col-9"><input type="password" class="form-control"name="password" placeholder="enter password"required/>
			</div>
		</div>
		<div class="row p-1">
			<div class="col text-center">
			<input type="submit" class="btn bg-danger text-white"name="Add" />
            <a href="login_show.php" class="btn  bg-danger text-black ">Show</A>
			</div>
		</div>
	</div>
	</form>
	<?php
	
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
    if(isset($_POST['Add']))
	{
			
			$username=$_POST['username'];
			$password=$_POST['password'];
            $select="select *from student where username='$username' and password='$password'";
            $result=$conn->query($select);
            $count=mysqli_num_rows($result);

            if($count>0)
            {
                $_SESSION['username']=$username;
                echo"<script>window.location.href='login_show.php'></script>";
            }
            else
            {
                echo"<div class='alert' alert-danger'><strong>incorrect user name</
            }
    ?>
