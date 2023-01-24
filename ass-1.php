 <!-- <?php
include('conection.php');
session_start();
?>  -->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        
</head>
<body>
	<form method="POST">
	<div class="container bg-dark text-white w-50 mt-2">
		<h1 class ="border-bottom">Register</h1>
		
		<div class="row p-1">
			<div class="col-3">Username</div>
			<div class="col-9"><input type="text" class="form-control"name="username" placeholder="enter user name" required/>
			</div>
		</div>
		
		
		
		<div class="row p-1">
			<div class="col-3">Gender:</div>
			<div class="col-9"><input type="radio" name="gender" value="Male" class ="form-check-input"checked />Male
							   <input type="radio" name="gender" value="Female" class ="form-check-input"/>Female
			</div>
		</div>
		
		<div class="row p-1">
			<div class="col-3">Course:</div>
			<div class="col-9"><input type="checkbox" name="course[]" value="BBA" class ="form-check-input"/>BBA
								<input type="checkbox" name="course[]" value="BCA" class ="form-check-input" checked/>BCA
								<input type="checkbox" name="course[]"value="BCOM" class ="form-check-input"/>BCOM
								
			</div>
		</div>
		<div class="row p-1">
			<div class="col-3">city:</div>
			<div class="col-9"><select name="city" class="form-control">
									<option value="mahuva">Mahuva</option>
									<option value="bhavnager">Bhavnager</option>
									<option value="rajkot">Rajkot</option>
									<option value="surat">surat</option>
									<option value="amreli">amreli</option>
									<option value="keshod">keshod</option>
								</select>
			</div>
		</div>
        <div class="row p-1">
			<div class="col-3">Contect number:</div>
			<div class="col-9"><input type="numeric" name="mobile" placeholder="Enter your number" class ="form-control" required/></div>
		</div>
		<div class="row p-1 text-center">
			<div class="col-12">
				<input type="submit" name="submit" class="btn bg-white" value="submit"/>
			</div>
		</div>
		
		<!-- <div class="row p-1">
			<div class="col text-center">
            <input type="submit" class="btn bg-danger text-white"name="login"value="login" />
			<input type="submit" class="btn bg-danger text-white"name="Add" value="submit"/>
            <a href="login_show.php" class="btn  bg-danger text-black ">Show</A>
			</div>
		</div> -->
	</div>
	</form>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
	session_start();

	$_SESSION['username']=$_POST['username'];
	$_SESSION['gender']=$_POST['gender'];
	//$_SESSION['BCA']=$_POST['BCA'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['course']=implode(",",$_POST['course']);
	$_SESSION['mobile']=$_POST['mobile'];
	//$course="NULL";
	// if((isset($_POST['BCA'])) && !(isset($_POST['BBA'])) && !(isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BCA'].",";
	// }
	// else if (!(isset($_POST['BCA'])) && (isset($_POST['BBA'])) && !(isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BBA'].",";
	// }
	// else if (!(isset($_POST['BCA'])) && !(isset($_POST['BBA'])) && (isset($_POST['BCOM'])))
	// { 
	// 	$course=$_POST['BCOM'].",";
	// }
	// else if ((isset($_POST['BCA'])) && (isset($_POST['BBA'])) && !(isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BCA'].",".$_POST['BBA'].",";
	// }
	// else if ((isset($_POST['BCA'])) && !(isset($_POST['BBA'])) && (isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BCA'].",".$_POST['BCOM'].",";
	// }
	// else if (!(isset($_POST['BCA'])) && (isset($_POST['BBA'])) && (isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BBA'].",".$_POST['BCOM'].",";
	// }
	// else if ((isset($_POST['BCA'])) && (isset($_POST['BBA'])) && (isset($_POST['BCOM'])))
	// {
	// 	$course=$_POST['BCA'].",".$_POST['BBA'].",".$_POST['BCOM'].",";
	// }
	// $_SESSION['course']=rtrim($course,",");
	 header("location:another_page.php");
}


?>