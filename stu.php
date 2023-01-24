<?php
include('connection.php');
?>
<div class="container bg-dark text-white w-50 m-4 p-2">
<form method="POST">
    <div class="row p-1">
        <div class="col-3"> Enter Name :</div>
        <div class="col-9"><input type="text" name="name" required class="form-control"/></div>
    </div>

    <div class="row p-1">
        <div class="col-3"> Enter Email :</div>
        <div class="col-9"><input type="email" name="email" required class="form-control"/></div>
    </div>

    <div class="row p-1">
        <div class="col-3"> Enter DOB :</div>
        <div class="col-9"><input type="date" name="date" required class="form-control"/></div>
    </div>

    <div class="row p-1">
        <div class="col-3"> Enter gender :</div>
        <div class="col-9"><input type="radio" name="gender" checked class="form-check-input" value="male">male
                        <input type="radio" name="gender"   class="form-check-input" value="female">female    
    </div>
    </div>

    <div class="row p-1">
        <div class="col-3"> Enter Marks :</div>
        <div class="col-9"><input type="number" name="mark" required class="form-control"/></div>
    </div>

    <div class="row p-1 p-1">
			<div class="col text-center">
          
			<input type="submit" class="btn bg-danger text-white"name="Add" value="submit"/>
            <a href="stu_show.php" class="btn  bg-danger text-black ">Show</A>
			</div>
		</div>
</form>
</div>

<?php
    if(isset($_POST['Add']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $dob=$_POST['date'];
        $gender=$_POST['gender'];
        $mark=$_POST['mark'];

        $insert="insert into stud_tbl_1 (stud_Name,stud_Email,stud_DOB,stud_Gender,stud_tot_marks)values('$name','$email','$dob','$gender','$mark')";
        $result=$conn->query($insert);
        if($result)
        {
            echo"<script>alert('insert');</script>";
        }
        else{
            echo $conn->error;
        }
    }
?>