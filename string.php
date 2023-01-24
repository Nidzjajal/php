<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<div class="container w-50 p-2 m-4 bg-info text white">
    <form method="POST">
        <div class="row p-1 ">
            <div class="col-3">ENTER STRING :</div>
            <div class="col-6"><input type="text" name="string" placeholder="enter your string "class="form-control" required/></div>
            <div class="col-3"><input type="submit" name="submit" value="submit" class="btn bg-danger text-dark"/></div>
        </div>

    </div>
</form>
</div>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $string=$_POST['string'];
        echo"<div class='container bg-dark text-white'>";
        echo"<div class='row p-1'>";
            echo"<div class='col-3'>total length :</div>";
            echo"<div class='col-9'>".strlen($string)."</div>";
        echo"</div>";

        echo"<div class='row p-1'>";
            echo"<div class='col-3'>total words :</div>";
            echo"<div class='col-9'>".str_word_count($string)."</div>";
        echo"</div>";

        echo"<div class='row p-1'>";
            echo"<div class='col-3'>Reverse :</div>";
            echo"<div class='col-9'>".strrev($string)."</div>";
        echo"</div>";
        echo"</div>";
    }
?>