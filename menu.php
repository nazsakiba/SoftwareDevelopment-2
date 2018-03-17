<html>
<head>
<title>Menu</title>
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
border:1px sloid red;
margin:10px;
padding:10px;
border-radius:15px;
width:750px;
right:0;}
</style>
</head>

<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #94C;">
<h1 align="center"><font color="white">Online Restaurant Service</font></h1></td>
</tr>

<tr valign="top">
<td width="200" height="592" style="background-color: pink;width:150px;textalign: top;">
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

<body bgcolor="#000000" background="I1.jpg" text="#000000" link="#FFFFFF">
<table width="100%" height="100%">
<tbody>
<tr><td align="center">
  <table border="0" bordercolor="#f5f5f5" width="737" height="481" cellspacing="0" cellpadding="4">

<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);
if($con) {	
session_start();
$MAIL_ID=$_SESSION['mail'];
$ADDRESS=$_SESSION['add'];
$PHN=$_SESSION['phn'];
$TM=$_SESSION['tm'];
$DT=$_SESSION['dt'];
echo $MAIL_ID;
echo " ";
echo $ADDRESS;
}
?>


<div>
<form action="chk.php" method="post">
<h1 class="style2"><p style="color:olive;"><strong>About our menu</strong></p></h1>

<marquee behavior="alternate" direction="left">
<img src="index5.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="index4.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="rice.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="veg.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="images.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="veg1.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="index6.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="images5.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="veg2.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
</marquee>
<?php
	$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);

$result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Rice"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
	
	$result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Veg"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Non Veg"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Rooti"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Snacks"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Soup" || $row['m_type']=="Noodles"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Dessert"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
  
  $result = mysql_query("SELECT * FROM MENU",$con);
echo "<table border='1'>
<tr>
<th> Choice </th>
<th> No </th>
<th> Item </th>
<th> Cost </th>
</tr>";
$i=1;
$j=1;
while($row = mysql_fetch_array($result))
  {
  if ($row['m_type']=="Drinks"){
  echo "<tr>";
  $s=$row['m_id'];
   echo "<td>"."<input type='checkbox' name='chk[]' value='$s'>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }
  }
$_SESSION['phn']=$PHN;
$_SESSION['mail']=$MAIL_ID;
$_SESSION['add']=$ADDRESS;
$_SESSION['tm']=$TM;
$_SESSION['dt']=$DT;
?>

<marquee behavior="alternate" direction="left">
<img src="dessert.jpg" alt="" width="159" height="194" longdesc="images1.jpg">
<img src="drinks.jpg" alt="" width="159" height="194" longdesc="images1.jpg">
<img src="Ice.jpg" alt="" width="150" height="194" longdesc="images1.jpg">
<img src="Ice1.jpg" alt="" width="150" height="194" longdesc="images1.jpg">
<img src="faluda.jpg" alt="" width="159" height="194" longdesc="images1.jpg">
<img src="drinks2.jpg" alt="" width="259" height="194" longdesc="images1.jpg">
<img src="faluda1.jpg" alt="" width="200" height="194" longdesc="images1.jpg">
<img src="dessert1.jpg" alt="" width="159" height="194" longdesc="images1.jpg">
</marquee>
<table border="0" cellpadding="0" cellspacing="3" style="border-collapse: collapse" width="97%"  bordercolor="#A89065">
<input type="submit" name="Submit" value="Submit">
</table>
</tr></tbody></table></table></td>
</body>
</html>