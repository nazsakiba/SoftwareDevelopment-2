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

		?>


<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99;width:10px;textalign: top;">
<p class="style1"><a href="/SD2/about.php">ABOUT</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">SERVICE</a>   
	<br></br>
    <a href="/SD2/contact.php">CONTACT</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">
<h3>New customer have to write  address &amp; mail ID so that we can send him a confirmation mail with user_ID and he will be our customer. </h3>
<form action="contact_action.php" method="post" >
USER_ID:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="text" name="id">
     <br /><br />

ADDRESS:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="text" name="add">
	<br /><br />

MAIL_ID:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" name="mail">
<br /><br />

<input type="submit" name="submit" value="SUBMIT" />
<input type="reset" value="DELETE" name="clear" />
</form>
</table>
<?php
$USER_ID=$_POST['id'];
$ADDRESS=$_POST['add'];
$MAIL_ID=$_POST['mail'];
$r=mysql_query("Insert into CUSTOMER values ('$USER_ID','$ADDRESS','$MAIL_ID') or die(mysql_error());
header("location:menu.php);
?>

</body>
</html>