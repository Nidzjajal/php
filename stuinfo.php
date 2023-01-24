<?php
    include('header.php')
?>
<?php
    include('conection.php')
?>

<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
        <form method="POST">
                <div class="container bg-primary text-white mt-4 w-50">
                <h1 class="text-center"><i>Student INFORMATION</i></h1>
                <div class="row p-1">
                    <div class="col-3">Name :</div>
                    <div class="col-9"><input type="text" name="name"placeholder="enter name"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Email :</div>
                    <div class="col-9"><input type="Email" name="email" placeholder="enter your Email"class="form-control"/>
                    </div>
                </div>
                
                <div class="row p-1">
                    <div class="col-3">Gender :</div>
                    <div class="col-9"><input type="radio" name="gender"class="form-check-input" value="Male">Male
                                        <input type="radio" name="gender"class="form-check-input" value="Female">Female
                         
                </div>
                </div>
                <div class="row p-1 ">
                    <div class="col-12 text-center"><input type="submit" name="add" value="Add"/>
                    
                    <a href="show.php" class="btn  bg-danger text-black ">Show</A>
                </div>
                </div>
            </div>
        </form>

</body>
</html>
<?php
    if(isset($_POST['add']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];

        $insert="insert into registration(name,email,gender)values('$name','$email','$gender')";
        $result=$conn->query($insert);

        if($result)
        {
            
                echo "<script> alert('insert');</script>";			
                echo "<script>window.location.href='dummy.php';</script>";	
        }
        else	
             echo "error";
   }
    
?>
<?php
    include('footer.php')
?>