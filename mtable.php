<html>
<head>
<title>View Menu</title>
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
background-color: pink;
width:500px;
}
</style>
</head>

<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99; width:150px;textalign: top;">
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
	<a href="/SD2/index.php">USER PANEL</a>
    </br></br>
	<a href="/SD2/admin.php">SIGN OUT</a>
    
	<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
	<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">
<h1 align="center" >MENU</h1>
	<div>
<?php
$con=mysqli_connect("localhost","root","sakiba","or");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM MENU");
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Item</th>
<th>Cost</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$row['m_id']."</td>";
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  }

echo "</table>";
mysqli_close($con);
?>
</div>
</body>
</html>