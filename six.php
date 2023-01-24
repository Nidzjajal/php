<?php
include('ass.php');
?>
<html>
<head>
    
    <title>ODD OR EVEN</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
<body>
    <div class="container bg-info text-dark mt-4  p-4 w-50">
        
        <h2 class="text-center text-danger border-bottom">ODD OR EVEN</h2>
        <form method="POST">
        <div class="row p-1">
            <div class="col-3">
               ENTER NUMBER :-
            </div>
            <div class="col-9">
                <input type="number" class="form-control" name="number" placeholder="enter number to calculate odd/even...." required/>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 text-center">
                <button type="submit" value="submit" class="btn p-3  m-2 text-dark bg-warning" name="btn">
                submit
                </button>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $no=intval($_POST["number"]);
    
    if ($no%2==0)
        $ans="EVEN Number...";
    else 
        $ans="ODD Number...";
    echo"<div class='container mt-3  w-50 p-2 bg-primary text-white'>";
    echo " ODD or EVEN :"."<input type='text' value='$ans'class='form-control'/>";
    echo"</div>";
}
?>