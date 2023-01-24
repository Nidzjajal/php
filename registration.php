
<?php
    include("header.php")
?>
<form method="POST">
	<div class="container bg-dark text-white mt-4 w-50">
		<h1 class="border-bottom">Registration</h1>
		<div class="row p-1">
			<div class="col-3">Email</div>
			<div class="col-9"><input type="email" name="email" placeholder="Enter email" class="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">Mobile</div>
			<div class="col-9"><input type="numeric" name="Mobile" placeholder="Enter Mobile number" class="form-control"/></div>
		</div>
		<div class="row p-1">
			<div class="col-3">	Gender</div>
			<div class="col-9"><input type="radio" class="form-check-input"name="gender" />Male
							   <input type="radio" class="form-check-input" name="gender"/>Female
			</div>
		</div>
		<div class="row p-1 text-center">
			<div class="col-12"><input type="submit" name="submit" value="registration"/></div>
		</div>
	</div>
</form>
<?php
    include("footer.php")

?>>
