<html>
<head>
	<link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
<form method="POST">
	<div class="container bg-warning text-white mt-4 w-50">
		<h1 class="border-bottom">CREATE ACCOUNT</h1>
		<div class="row p-1">
			<div class="col-3">Name:</div>
			<div class="col-9"><input type="text" name="name" placeholder="Enter your name" class ="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">Email:</div>
			<div class="col-9"><input type="email" name="email" placeholder="Enter your email" class ="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">Contect number:</div>
			<div class="col-9"><input type="numeric" name="mobile" placeholder="Enter your number" class ="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">Gender:</div>
			<div class="col-9"><input type="radio" name="gender" class ="form-check-input"/>Male
							   <input type="radio" name="gender" class ="form-check-input"/>Female
			</div>
		</div>
		<div class="row p-1">
			<div class="col-3">Date of Birth:</div>
			<div class="col-9"><input type="date" name="date" placeholder="Enter your date" class ="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">Hobbies:</div>
			<div class="col-9"><input type="checkbox" name="hobbies" class ="form-check-input"/>cricket
								<input type="checkbox" name="hobbies" class ="form-check-input"/>Singing
			</div>
		</div>
		<div class="row p-1">
			<div class="col-3">country:</div>
			<div class="col-9"><select name="country">
									<option value="mahuva">Mahuva</option>
									<option value="bhavnager">Bhavnager</option>
									<option value="rajkot">Rajkot</option>
								</select>
			</div>
		</div>
		<div class="row p-1 text-center">
			<div class="col-12">
				<input type="submit" name="submit" class="btn bg-white" value="Create Account"/>
			</div>
		</div>
	</div>
	</form>
	</body>
</html>
		
		