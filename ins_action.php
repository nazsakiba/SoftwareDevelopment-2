<html>
<head>
<title>Insert</title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>
<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99;width:10px;textalign: top;">
<p class="style1">

    <a href="/SD2/admin.php">ADMIN PANEL</a>
    <br></br>
	<a href="/SD2/about.php">ABOUT</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">SERVICE</a>   
	<br></br>
    <a href="/SD2/contact.php">CONTACT</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">

<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
<?php
$hostname="localhost";
$database="or";
$username="root";
$password="sakiba";
$link=mysql_connect($hostname,$username,$password);
if (!$link)
{
  echo 'can\'t connect'.mysql_error();
}
$mysqldb=mysql_select_db($database);
  
  if(!$mysqldb){
  die('can\'t use'. DB_NAME. ': '. mysql_error());
  }
  
  $m_id="ALTER TABLE MENU AUTO_INCREMENT=220;";
  $m_name=$_POST['nm'];
  $m_cost=$_POST['cst'];
  $sql="INSERT INTO MENU ( m_id, m_name , m_cost) VALUES ('$_POST[no]','$_POST[nm]','$_POST[cst]')";


if (! mysql_query($sql,$link) )
 {
  die('Error: ' . mysql_error($link));
  }
else
{
  echo '<br/>';
  echo "<h1>"."<center>"."<B>"."Successfully Added!"."</B>"."</center>"."</h1";
 }
 header('Location:mtable.php');
?>
</body>
</html>