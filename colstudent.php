<?Php
include('col_show.php');
?>
<?php
$select="select *from student";
$result=$conn->query($select);

echo "<table class='table container w-50' ";
echo"<tr><th>Roll</th><th>name</th><th>email</th><th>action contrl</th></tr>";
foreach($result as $r)
{
    echo"<tr>";
    echo"<td>$r[roll]</td>";
    echo"<td>$r[name]</td>";
    echo"<td>$r[email]</td>";
    echo"<td><a href='delete.php?roll=$r[roll]' class='btn bg-danger' >Delete</a><a href='update.php?roll=$r[roll]' class='btn bg-warning' >Edit</a></td>";
    echo"</tr>";
}
echo"</table>";
?>