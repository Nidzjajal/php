<?php
include('ass.php');
?>
<html>
<head>
    <title>PALINDROME OR NOT</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
      
      body{
        border:10px  double orange;
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
        <h2 class="text-center text-danger border-bottom">PALINDROME OR NOT</h2>
            <form method="POST">
            <div class="row p-1">
                <div class="col-3">
                     ENTER NUMBER :-
                </div>
                 <div class="col-9">
                    <input type="number" class="form-control" name="number" placeholder="enter number to calculate palindrome no or not...." required/>
                </div>
            </div>
             <div class="row p-2">
                <div class="col-12 text-center">
                         <button type="submit" value="submit" class="btn p-3  m-2 text-dark bg-warning " name="btn">
                         Submit
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
    $i=1;
    $number=$no;
    $sum=0;
    while(floor($number)){
        $rem=$number%10;
        $sum=$sum * 10+$rem;
        $number=$number/10;
    }
    if($no==$sum)
        $ans="PALINDROME NUMBER...";
    else
        $ans=" NOT PALINDROME NUMBER...";
    echo"<div class='container w-50 p-2 mt-3 bg-primary text-white'>";
    echo "PALINDROME NO / NOT :"."<input type='text' value='$ans'class='form-control'/>";
    echo"</div>";
   
}
?>