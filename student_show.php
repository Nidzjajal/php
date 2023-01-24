<?php 
include("connection.php");

session_start();

if($_SESSION['username']!=NULL)
{
	echo "<form method='POST'><div class='container bg-dark text-white'><strong>Welcome to user:</strong>".$_SESSION['username'];
		
			echo "<button class='btn bg-warning text-right' name='logout' type='submit'>Logout</button>";
		
	echo "</form></div>";
}
else
{
	echo "<script>window.location.href='login_student.php';</script>";
}
?>

<?php 
	$select="select * from student";
	$result=$conn->query($select);
	
	echo "<table class='table container w-50'>";
		echo "<tr><th>Roll</th><th>Name</th><th>Email</th><th>Action</th></tr>";
		foreach($result as $r)
		{
			echo "<tr>";
				echo "<td>$r[id]</td>";
				echo "<td>$r[username]</td>";
				echo "<td>$r[password]</td>";
				echo "<td><a href='delete.php?roll=$r[id]' class='btn bg-danger text-white m-1'>Delete</a><a href='update.php?roll=$r[id]' class='btn bg-warning text-white'>Edit</a></td>";
			echo "</tr>";
		}
	echo "</table>";
	

	if(isset($_POST['logout']))
	{
		session_destroy();
		echo "<script>window.location.href='login_student.php';</script>";
		
	}

?>