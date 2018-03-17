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
		mysql_select_db($dbName) or die("Database name doesn't exist");
		if(!$a)
		{
		echo "Not Connected";
		}
		else echo "Connected";

$ADDRESS=$_POST['add'];
$MAIL_ID=$_POST['mail'];
$PHN=$_POST['phn'];
$TM=$_POST['tm'];
$DT=$_POST['dt'];

$ORDER_ID="ALTER TABLE FOOD AUTO_INCREMENT=111111;";
$r=mysql_query("Insert into CUSTOMER values ('$USER_ID','$MAIL_ID','$PHN','$ADDRESS','$TM',$DT)");
session_start();
if($r==1)
{
session_start();
$_SESSION['mail']=$MAIL_ID;
$_SESSION['phn']=$PHN;
$_SESSION['add']=$ADDRESS;
$_SESSION['tm']=$TM;
$_SESSION['dt']=$DT;
header("location:menu.php");
}
else echo "FILL UP THE EMPTY SPACE";
exit;		
?>
</body>
</html>