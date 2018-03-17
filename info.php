<html>
<head>
<title> Online Restaurant Service </title>


<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>
<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$a=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		if(!$a)
		{
		echo "Not Connected";
		}
		else echo "Not connected"
		
		$s=mysql_select_db($dbName); 
		if(!$s)
		{
		die('can\'t use'.DB_NAME. ': '. mysql_error());
		}
		else
		{
		echo 'selected';
		echo '<br/>';
		}

$USER_ID: $_POST["id"];?>
$ADDRESS:$_POST["add"];?>
$MAIL_ID:$_POST["mail"];?>
$r=mysql_query("select * from CUSTOMER where CMR_ID='$USER_ID' and CMR_ADD='$ADDRESS' and CMR_MAIL='$MAIL_ID'") or die(mysql_error());
	
?>
</body>
</html>