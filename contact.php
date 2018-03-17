<html>
<head>
<title> Online Restaurant Service </title>
<style type="text/css">
<!--
.style1 
{font-size: 20px;}
.style2 
{font-size: 30px;
font-weight: bold;
}
.style3 {
font-size: 20px;
font-weight: bold;
}-->
table, tr, td {border:1px solid green;}
div{
border:10px;
margin:10px;
padding:10px;
border-radius:10px;
width:750px;
right:0;
background-color: pink;}

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
		?>
<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center"><font color="white">Online Restaurant Service</font></h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99;width:100px;textalign: top;">
<p class="style2">
    <a href="/SD2/admin.php">SIGN IN</a>
    <br></br>
	<a href="/SD2/index.php">ABOUT US</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">CONTACT US</a>   
	<br></br>
    <a href="/SD2/contact.php">PLACE ORDER</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">
<table width="100%" height="100%">
<tbody>
<tr><td align="center">
  <table border="0" bordercolor="#f5f5f5" width="737" height="481" cellspacing="0" cellpadding="4">
  <div>
  <h3>
<h3><font color="green">  You have to order minimum 60 minutes before the deliver time</font></h3>
<form action="contact_action.php" method="post" >
<br />MAIL ID:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="mail" name="mail">
	<br />
PHONE NO:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="tel" name="phn">
<br />ADDRESS:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="text" name="add">
<br />DELIVERY TIME: &nbsp;
    <input type="text" name="tm">

<br />DELIVERY DATE: &nbsp;
    <input type="text" name="dt">
	<br />
	
<input type="submit" name="submit" value="SUBMIT" />
</h3>
</form>
</div></table>
</body>
</html>