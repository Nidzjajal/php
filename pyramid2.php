<?php
include('ass.php');
?>
<html>
<head>
    <title>PYRAMID</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
        body{
           border:10px double orange;
             font-style:bold;
             font-weight:bold;
             font-size:larger;
             background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)),url('image.jpg'); 
             background-size:cover;
              background-repeat:no-repeat; 
             
             /* background:linear-gradient( white , lightgreen); */
        }
        .btn{        
           font-size:larger;
             font-style:bold;
             font-weight:bold;
             margin-top:9px;
         }
    </style>
</head>
</html>
<body>
<div class="container bg-info text-dark mt-4  p-4  w-50">
        <form method="POST">
           
            <h2 class="text-center text-danger border-bottom"> PROGRAM PATTERN 2 </h2>
            <div class="row p-1">
                <div class="col-4"><h2> Enter a Number:</h2></div>
                <div class="col-8"><input type="number" name="Rows" class="form-control TextBox" placeholder="enter  number of row here.." required /></div>
            </div>

            <div class="row p-1">
                <div class="col text-center p-3"> <button type="submit" value="submit" class="btn p-3  m-2 text-dark bg-warning" name="btn">
                submit
                </button></div>
            </div>
        </form>
 </div> 
</body>
</html>
<?php

if(isset($_POST['btn']))
{
    $no=$_POST['Rows'];


    echo"<div class='container bg-info text-dark mt-4 ml-4 w-50 p-3'>";
    echo"<div class='bg-warning text-primary m-2 p-3 '>";
    echo"Pyramid";
    echo"</div>";
    echo"<br>";

   // $no=6;
    $i=0;
    $p=0;
    for($i=0;$i<$no;$i++)
    {
        for($j=0;$j<$i;$j++)
        {
            echo$p%2;
            $p++;
        }
        echo"<br/>";
    }
    echo"</div>";
}
?>