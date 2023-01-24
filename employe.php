<?php
include('header.php');
?>
<?php
include('conect.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
    <form method="POST">
    <div class="container bg-info text-white mt-4 w-50">
                <h1 class="text-center"><i>EMPLOYEE SALARY SLIP</i></h1>
                <div class="row p-1">
                    <div class="col-3">Name :</div>
                    <div class="col-9"><input type="text" name="name"placeholder="enter name"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Basic salary:</div>
                    <div class="col-9"><input type="number" name="txtsalary"placeholder="enter marks"class="form-control"/>
                    </div>
                </div>
                
                <div class="row p-1 ">
                    <div class="col-12 text-center"><input type="submit" name="add" value="Add"/>
                    
                    <a href="display.php" class="btn  bg-danger text-black ">Show</A>
                </div>
                </div>
            </div>
</form>
</body>
</html>
<?php
include('footer.php')
?>