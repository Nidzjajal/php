<?php
    include('header.php')
?>
            <form method="POST">
                <div class="container bg-dark text-white mt-4 w-50">
                <h1 class="text-center"><i>INFORMATION</i></h1>
                <div class="row p-1">
                    <div class="col-3">Name :</div>
                    <div class="col-9"><input type="text" name="name"placeholder="enter name"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Contact NUmber :</div>
                    <div class="col-9"><input type="number" name="contact"placeholder="enter your number"class="form-control"/>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-3">Gender :</div>
                    <div class="col-9"><input type="radio" name="gender"class="form-check-input" value="Male">Male
                                        <input type="radio" name="gender"class="form-check-input" value="Female">Female
                         
                </div>
                </div>
                <div class="row p-1">
                    <div class="col-12 text-centre"><input type="submit" name="btn" value="Add"/>
                    </div>
                </div>
</div>
</form>
<?php
    $conn=new mysqli("localhost","root","","kbpccs");
    if($conn)
        echo"connect";
    else
        echo"not connect";
    if(isset($_POST['btn']))
    {
         $name=$_POST['name'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
    
         
         $insert="insert into information(name,contact,gender)values('$name','$contact','gender')";
         $result=$conn->query($insert);
         
         if($result)
         {
             
                 echo "<script> alert('insert');</script>";			
                 echo "<script>window.location.href='dummy.php';</script>";	
         }
         else	
              echo "error";
    }
?>
<?php
    include('footer.php');
?>