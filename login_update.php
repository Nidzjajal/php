<?php
include('conection.php');
?>
<?php
    $roll=$_REQUEST['id'];
    $select="select *from student where id=$roll";
    $result=$conn->query($select);
    foreach($result as $r)
    {
        $id=$r['id'];
        $username=$r['username'];
        $password=$r['password'];
    }
?>
<div class="container mt-4 w-50">
    <form method="POST">
         <div class=row>
            <div class="col-12"> update record</div>
        </div>
        <div class ="row">
            <div class="col-3">name</div>
            <div> <input type="text" name="username"value="<?php echo$username;?>" class="form-control"/></div>
        </div>
        <div class ="row">
            <div class="col-3">password</div>
            <div> <input type="email" name="password"value="<?php echo$password;?>" class="form-control"/></div>
        </div>
        <div class ="row">
            <div class="col-12">
            <input type="submit" name="update"value="update" /></div>
        </div>
    </form>
</div>
<?php
if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
$update="update student set username='$username' , password='$password'where id=$roll";
$result=$conn->query($update);

if($result)
{
  //  print_r($result);
  //  echo"<br>". $roll;
   header("location:login_show.php");

}
else{
    $conn->error;
}
}
?>