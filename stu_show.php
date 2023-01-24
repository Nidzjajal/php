<?php
include('connection.php');
?>
<?php
    $select="select * from stud_tbl_1";
    $result=$conn->query($select);

    echo"<div class='container'>";
    echo"<div class='row p-1'>";
        echo"<div class='col-12'><a href='stu.php' class='btn bg-dark text-white'>ADD</a></div>";
    echo"</div>";
    echo"</div>";

    echo"<div class='container bg-primary text-white w-50 '>";
    echo"<div class='row p-1'>";
        echo"<table class='table'>";
            echo"<tr class='bg-info'><th>id</th><th>Name</th><th>Email</th><th>DOB</th><th>Gender</th><th>Total marks</th><th>Action</th></tr>";
            foreach($result as $r)
            {
                echo"<tr>";
                    echo"<td>$r[id]</td>";
                    echo"<td>$r[stud_Name]</td>";
                    echo"<td>$r[stud_Email]</td>";
                    echo"<td>$r[stud_DOB]</td>";
                    echo"<td>$r[stud_Gender]</td>";
                    echo"<td>$r[stud_tot_marks]</td>";
                    echo"<td><a href='delete.php?id=$r[id]' class='btn bg-danger text-dark m-2'>delete</a><a href='update.php?id=$r[id]' class='btn bg-warning text-dark'>Edit</a></td>";
                echo"</tr>";
            }
        echo"</table>";
    echo"</div>";
    echo"</div>";
?>