<html>
<head>

<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$a=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName) or die("Database name doesn't exist");
		if(!$a)
		{
		echo "Not Connected";
		}
		else echo "Connected";


$ORDER_ID="ALTER TABLE FOOD AUTO_INCREMENT=000001;";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["a"]))
     {}
   else
    {
	$FOOD_ID=$_POST['a'];
	$COST="150"*$FOOD_ID;
	$r=mysql_query("Insert into FOOD values ('ORDER_ID','$FOOD_ID','$COST')") or die(mysql_error());
	}
	
	if (empty($_POST["b"]))
     {}
   else
    {
	$FOOD_ID=$_POST['b'];
	$COST="70"*$FOOD_ID;
	$r=mysql_query("Insert into FOOD values ('ORDER_ID','$FOOD_ID','$COST')") or die(mysql_error());
	}
	
	if (empty($_POST["c"]))
     {}
   else
    {
	$FOOD_ID=$_POST['c'];
	$COST="70"*$FOOD_ID;
	$r=mysql_query("Insert into FOOD values ('ORDER_ID','$FOOD_ID','$COST')") or die(mysql_error());
	}
	
	if (empty($_POST["d"]))
     {}
   else
    {
	$FOOD_ID=$_POST['d'];
	$COST="100"*$FOOD_ID;
	$r=mysql_query("Insert into FOOD values ('ORDER_ID','$FOOD_ID','$COST')") or die(mysql_error());
	}
	
	if (empty($_POST["e"]))
     {}
   else
    {
	$FOOD_ID=$_POST['e'];
	$COST="150"*$FOOD_ID;
	$r=mysql_query("Insert into FOOD values ('ORDER_ID','$FOOD_ID','$COST')") or die(mysql_error());
	}
}

header('Location:m.php');
exit;		
		?>

</body>
</html>