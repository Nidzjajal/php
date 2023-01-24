<?php
include('conection.php');
?>
<?php
$roll=$_REQUEST['id'];
$delete="delete from student where id=$roll";
$result=$conn->query($delete);

if($result)
{
    header("location:login_show.php");
}
?>