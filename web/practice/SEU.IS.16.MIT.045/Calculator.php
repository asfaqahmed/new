<html>
<body>
<form method="post" action="Calculator.php">
Enter the first number: <input type="text" name="fnum" ><br><br>
Enter the second number: <input type="text" name="snum" > <br><br>
Select the Operator:<br><br>
<input type="radio" name="add" value="+"> Add <br>
<input type="radio" name="substract" value="-"> Substract <br>
<input type="radio" name="multiply" value="*"> Multiply <br>
<input type="radio" name="divide" value="/"> Divide <br>
<input type="radio" name="mod" value="%"> Module <br><br>
<input type="Submit" name="submit"><br><br>
<h2 style= "color: blue";> Output:  </h2>
</form>


<?php
    
	if(isset($_POST['add']))
	{
	   $fnum=$_POST['fnum'];
	   $snum=$_POST['snum'];
	   $output=$fnum+$snum;
       echo $output;
	}
	
	if(isset($_POST['substract']))
	{
	   $fnum=$_POST['fnum'];
	   $snum=$_POST['snum'];
	   $output=$fnum-$snum;
       echo $output;
	   
	}
	
	if(isset($_POST['multiply']))
	{
	   $fnum=$_POST['fnum'];
	   $snum=$_POST['snum'];
	   $output=$fnum*$snum;
       echo $output;
	   
	}
	
	if(isset($_POST['divide']))
	{
	   $fnum=$_POST['fnum'];
	   $snum=$_POST['snum'];
	   $output=$fnum/$snum;
       echo $output;
	   
	}
	
	if(isset($_POST['mod']))
	{
	   $fnum=$_POST['fnum'];
	   $snum=$_POST['snum'];
	   $output=$fnum%$snum;
       echo $output;
	   
	}
	
	?>
	
	</body>
	</html>