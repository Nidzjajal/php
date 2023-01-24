<?php
include('ass.php');
?>
<html>
<head>
    
    <title>ARMSTRONG OR NOT</title>
    <link rel="stylesheet" href="bootstrap.min.css">
      <style>
        
    
       
    </style>
</head>
<body>
    <form method="POST">
        <div class="container bg-info text-dark mt-4  p-4 w-50">
            <h2 class="text-center text-danger border-bottom">ARMSTRONG OR NOT</h2>
            <div class="row p-1">
                <div class="col-3">
                    Enter Number:-
                </div>
                 <div class="col-9">
                      <input type="number" class="form-control" name="number" placeholder="enter number to calculate armstrong no or not...." required/>
                 </div>
             </div>
            <div class="row p-2">
                <div class="col-12 text-center ">
                <button type="submit" value="submit" class="btn p-3  m-2 text-dark bg-warning" name="btn">
                Submit
                </button>
                </div>
            </div>
        </div> 
    </form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $no=intval($_POST["number"]);
    $val1=0;
    $val2=0;
    $i=0;
   
    $temp=$no;
    $size;
    if($no<10)
    $size=1;
    else if($no<99)
    $size=2;
    else if($no<999)
    $size=3;
    else if($no<9999)
    $size=4;
    else if($no<99999)
    $size=5;

    for($i=0;$i<$size;$i++)
    {
        $val1=$no%10;
        $val2+=$val1*$val1*$val1;
        $no=$no/10;
    }
    if($temp==$val2)
    {
        $ans="ARMSTRONG NUMBER.....";
    
    }
    else{
        $ans=" NOT ARMSTRONG NUMBER...";
    }
    echo"<div class='container w-50 p-2 bg-primary text-white '>";
    echo "ARMSTRONG NO / NOT :"."<input type='text' value='$ans'class='form-control'/>";
    echo"</div>";
}
?>