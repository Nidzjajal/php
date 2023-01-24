<?php

include('col_show.php');
?>
<?php
$roll=$_REQUEST['roll'];
$delete="delete from student where roll=$roll";
$result=$conn->query($delete);

if($result)
{
    header("location:colstudent.php");
}
?>