<?php
include('emp_show.php');
?>
<?php
    $id=$_REQUEST['id'];
    $select="select * from employe where id=$id";
    $result=$conn->query($select);

    foreach( $result as $r)
    {
        $id=$r['id'];
        $name=$r['name'];
        $password=$r['password'];
        $email=$r['email'];
        $mobile=$r['mobile'];
    }
?>
<div class="container text-dark bg-warning w-50 ml-4 mt-50 p-4">
        <form method="POST">
            <div class="row">
                <div class="col-3">Name:</div>
                <div class="col-9">
                    <input type="text" name="name" value="<?php echo$name;?>"class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Password:
                </div>
                <div class="col-9">
                    <input type="password" name="password" value="<?php echo $password;?>"class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class=col-3 >
                    email:
                </div>
                <div class="col-9">
                    <input type="email" name="email" value="<?php echo$email;?>"class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-3" >
                    Mobile Number:
                </div>
                <div class="col-9">
                    <input type="number" name="mobile" value="<?php echo$mobile;?>"class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" name="btn"  value="UPDATE"class="btn bg-info font-weight-bold"/>
                </div>
            </div>
        </form>
</div>
<?php
    if(isset($_POST['btn']))
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
    $update="update employe set name='$name' ,password='$password', email='$email',mobile='$mobile' where id=$id";
    $result=$conn->query($update);
    
    if($result)
    {
      //  print_r($result);
      //  echo"<br>". $roll;
       header("location:emp_info.php");
    
    }
    else{
        $conn->error;
    }
    }
?>