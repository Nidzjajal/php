<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING REVERSE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .items{
            border:2px solid black;
            padding:20px 20px;
            background:blue;
        }
        .btn{
            background: #000;
            margin-top:20px;
            color: white;
        }
        form{
            margin-top:40px;
            
        }
        label{
            font-size:27px;
        }
    </style>
</head>
<body>
    <div class="container w-50 ">
        <div class="items">
        <h2 class="text-center text-white">STRING REVERSE</h2>
        <form method="POST">
        <div class="row">
            <div class="col-3">
                <label for="number" class="text-white">STRING</label>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="number">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button type="submit" value="submit" class="btn" name="btn">
                submit
                </button>
            </div>
        </div>
        </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $no=($_POST["number"]);
    $number=$no;
    $sum=0;
    $str=strrev($no);
        echo"REVERSE STRING IS:" .$str;
}
?>