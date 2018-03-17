<html>
<head>
<title>New Order</title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->

table, tr, td {border:1px solid green;}
div{
border:1px sloid red;
margin:10px;
padding:10px;
border-radius:15px;
background-color:pink;
width:1050px;
}
</style>
</head>

<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99;width:200px;textalign: top;">
<p class="style1">

    </br></br>
	<a href="/SD2/cmrtable.php">VIEW NEW ORDER</a>
    </br></br>
	<a href="/SD2/mtable.php">VIEW MENU</a>
    </br></br>
	<a href="/SD2/delete.php">DELETE ITEM</a>
    </br></br>
	<a href="/SD2/insert.php">ADD ITEM</a>
    </br></br>
	<a href="/SD2/update.php">UPDATE ITEM</a>
    </br></br>
	<a href="/SD2/about.php">USER PANEL</a>
    </br></br>
	<a href="/SD2/admin.php">SIGN OUT</a>
    
	<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
	<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">
<div>
<form action="del_ord.php" method="POST">
<?php
$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);
if($con) 
{
$r = mysql_query("SELECT * FROM OR.ORDER",$con);
echo "<table border='1'>
<tr>
<th> </th>
<th> No </th>
<th>Order_id</th>
<th>MOBILE</th>
<th>MAIL</th>
<th>ADDRESS</th>
<th> DATE </th>
<th> TIME </th>
<th> ITEM ID </th>
<th> COST </th>
</tr>";
$i=1;
while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
    $s=$row['tkn'];
  echo "<td>"."<input type='checkbox' name='itm[]' value='$s'>"."</td>"; 
  echo "<td>".$i++."</td>";	
  echo "<td>" .$row['tkn'] ."</td>";
  echo "<td>" .$row['Phn'] ."</td>";
  echo "<td>" .$row['mail'] ."</td>";
  echo "<td>" .$row['address'] ."</td>";
  echo "<td>" .$row['Date'] ."</td>"; 
  echo "<td>" .$row['dlvr_time'] ."</td>"; 
  echo "<td>" .$row['itm_id'] ."</td>"; 
  echo "<td>" .$row['cost'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
}
mysql_close($con);
?>
<input type="submit" name="Delete" value="Delete" />
</form>
</div>
</body>
</html>
