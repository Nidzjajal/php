<html>
	<body>
		<form method="POST">
			<table border="1">
				<tr>
					<td>enter number</td>
					<td><input type="number" name="txtnum"/></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="btn" value="submit"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php   
    $num=($_POST["txtnum"]);
    $flag=0;

   for($i=2;$i<$num;$i++)
   {
		if($num%$i==0)
		{
			$flag=true;
			break;
		}
   }
    if($flag==true)
    {
        echo "GIVEN NUMBER IS PRIME";
    }
    else
    {
        echo "GIVEN NUMBER IS NOT PRIME";
    }
?>