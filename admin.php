<html>
<head>
<title> ADMIN PAGE </title>
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
<td width="200" height="592" style="background-color: #C99;width:10px;textalign: top;">
<p class="style2">
    <br></br>
	<a href="/SD2/index.php">ABOUT</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">SERVICE</a>   
	<br></br>
    <a href="/SD2/contact.php">CONTACT</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">
<table width="100%" height="100%">
<tbody>
<tr><td align="center">
  <table border="0" bordercolor="#f5f5f5" width="737" height="481" cellspacing="0" cellpadding="4">
<h1 align="center"><p style="background-color: white;">ADMIN SIGN IN</p></h1>
<form action="admin_action.php" method="post" >
<h1>
<input placeholder="Enter name" type="text" name="name"  value=""/><br><br>
<input placeholder="Enter Password" type="password" name="password" value="" /><br><br>
<input type="submit" name="submit" value="SUBMIT" />
</h1>
</form>
</table>
</body>
</html>