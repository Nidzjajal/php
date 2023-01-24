<html>
    <head>
        <title> pyramind program 3</title>
    </head><link rel="stylesheet" href="bootstrap.min.css" />
    <body>
<div class="container bg-primary text-dark mt-4 w-50">
        <form method="POST">
            <div class="row">
                <div class="col text-center p-3"><h1>patten program 3</h1></div>
            </div>

            <div class="row p-3">
                <div class="col-4"><h2> Enter a Number:</h2></div>
                <div class="col-8"><input type="number" name="Rows" class="form-control TextBox" placeholder="enter  number of row here.." required /></div>
            </div>

            <div class="row">
                <div class="col text-center p-3"><input type="submit" value="show" name="button" class="btn bg-success"/></div>
            </div>
        </form>
</div>
</body>
<?php
		if(isset($_POST['button']))
		{
				$Num=$_POST['Rows'];
				
				echo("<div class='text-center'>");
					for($i=1;$i<=$Num;$i++)
					{
							for($j=1;$j<=$Num-1;$j++)
							{
				
							}
							for($j=$i;$j>0;$j--)
							{
								echo chr($j+64);
							}
								for($j=2;$j<=$i;$j++)
								{
									echo chr($j+64);
								}
								echo("<br/>");
					}
					echo("</div>");
		}


?>
</html>