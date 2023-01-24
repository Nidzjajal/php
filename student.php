<?php
    include('header.php');
?>
<?php
    include('conn.php');
?>
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
                    <div class="col-3">Marks of php :</div>
                    <div class="col-9"><input type="text" name="txtphp"placeholder="enter marks"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Marks of os :</div>
                    <div class="col-9"><input type="text" name="txtos"placeholder="enter marks"class="form-control"/>
                    </div>
                </div>
                
                <div class="row p-1">
                    <div class="col-3">Marks of vbnet :</div>
                    <div class="col-9"><input type="text" name="txtvbnet"placeholder="enter marks"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Marks of ooad :</div>
                    <div class="col-9"><input type="text" name="txtooad"placeholder="enter marks"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1 ">
                    <div class="col-12 text-center"><input type="submit" name="add" value="Add"/>
                    
                    <a href="sow.php" class="btn  bg-danger text-black ">Show</A>
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
        $php=($_POST['txtphp']);
        $os=($_POST['txtos']);
        $vbnet=($_POST['txtvbnet']);
        $ooad=($_POST['txtooad']);

       // $insert="insert into student(name,php,os,vbnet,ooad)values('$name','$php,'$os','$vbnet','$ooad')";
        $insert="insert into student(name,php,os,vbnet,ooad)values('$name','$php','$os','$vbnet','$ooad')";
        $result=$conn->query($insert);

        if($result)
        {
            echo"<script>window.location.href='dummy.php';</script>";
        }
        else
            echo $conn->error;
    }
?>
<?php
    include('footer.php');
?>