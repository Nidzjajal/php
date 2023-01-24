<?php
include('ass.php');
?>
<html>
<head>
    
    <title>MAGIC OR NOT</title>
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
             
             /* background-image:url('black.jpg'); */
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
    <form method="POST">
        <div class="container bg-info text-dark mt-4  p-4 w-50">
            <h2 class="text-center text-danger border-bottom">MAGIC OR NOT</h2>
            <div class="row p-1">
                <div class="col-3">
                    Enter Number:-
                </div>
                 <div class="col-9">
                      <input type="number" class="form-control" name="number" placeholder="enter number to calculate magic no or not...." required/>
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
if(isset($_POST['btn']))
{
    $num=($_POST['number']);

		if($num%9==1)
		{
			
            $ans=" MAGIC NUMBER .....";
		}
        else
        {
            $ans="NOT MAGICNUMBER .....";
        }
		echo"<div class='container w-50 p-2 bg-primary text-white'>";
		echo "MAGIC NO / NOT :"."<input type='text' value='$ans'class='form-control'/>";
		  echo"</div>";
	}
?>