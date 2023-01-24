<?php
include('col_show.php');
?>
<?php
    $roll=$_REQUEST['roll'];
    $select="select *from student where roll=$roll";
    $result=$conn->query($select);
    foreach($result as $r)
    {
        $roll=$r['roll'];
        $name=$r['name'];
        $email=$r['email'];
    }
?>
<div class="container mt-4 w-50">
    <form method="POST">
         <div class=row>
            <div class="col-12"> update record</div>
        </div>
        <div class ="row">
            <div class="col-3">name</div>
            <div> <input type="text" name="name"value="<?php echo$name;?>" class="form-control"/></div>
        </div>
        <div class ="row">
            <div class="col-3">email</div>
            <div> <input type="email" name="email"value="<?php echo$email;?>" class="form-control"/></div>
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
    $name=$_POST['name'];
    $email=$_POST['email'];
$update="update student set name='$name' , email='$email'where roll=$roll";
$result=$conn->query($update);

if($result)
{
  //  print_r($result);
  //  echo"<br>". $roll;
   header("location:colstudent.php");

}
else{
    $conn->error;
}
}
?>