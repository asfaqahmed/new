<html>
<body>

<?php

   print "<form method = post   action = Array.php>";
 
   for($x=0; $x<=10; $x++)
 {
	print  "<input type = text  name = num$x    />"; 
 }
     
	
	 
    print  "<input type = Submit   value = Submit />";
	
	print  "</form>";
	
	$num = array();
	if(isset($_POST['num0']))
	{
		for($x=0; $x<=10; $x++)
		{
	
		$num[$x]=$_POST['num'.$x];
	
        }
	
	
	print_r ($num);
	
	}	

?>
</body>
</html>