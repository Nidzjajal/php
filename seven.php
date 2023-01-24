<?php
include('ass.php');
?>
<html>
<head>
    <title>ANAGRAM OR NOT </title>
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
    <div class="container bg-info text-dark mt-4  p-4  w-50">
        <h2 class="text-center text-danger border-bottom">ANAGRAM OR NOT</h2>
            <form method="POST">
            <div class="row p-1">
                <div class="col-3">
                     ENTER NUMBER 1:-
                </div>
                 <div class="col-9">
                    <input type="text" class="form-control" name="str" placeholder="enter number to calculate anagram no or not...." required/>
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
if(isset($_POST['btn']))
{
    $str1=($_POST["str"]);

    $str1=strtoupper($str1);

    $str1array= str_split($str1);
    $str2array=$str1array;
     sort($str1array);
   $str=NULL;
     $str=implode("",$str1array);

     rsort($str1array);
     $str1=implode("",$str1array);

   
     krsort($str2array);
    $str3=implode("",$str2array);

 
    }
?>
 <div class='container w-50 p-2 bg-primary text-white'>
    <div class="row">
<div class="col-3">ANAGRAM NO / NOT :</div>
<div class="col-9 font-weighti-bold"><input type="text" value="<?php echo $str.','.$str1.','.$str3;?>" class="form-control"/>
</div>
</div>