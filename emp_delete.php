<?php
include('emp_show.php');
?>

<?php
$x=$_REQUEST['id'];
$delete="delete from employe where id=$x";
$result=$conn->query($delete);
if($result)
{
    header("location:emp_info.php");
}
?>