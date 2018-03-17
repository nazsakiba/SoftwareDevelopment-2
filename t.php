<HTML>
<HEAD>
<title>Bill</title>
</HEAD>
</br></br>
<h1>YOUR BILL</h1>
</br></br></br>
<form action="test.php" method="post">
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);

		
session_start();
$mail=$_SESSION['mail'];
$address=$_SESSION['add'];
$dlvr_time=$_SESSION['tm'];
echo "MAIL ID: ";
echo $mail;
echo "                                                        ";
echo "ADDRESS: ";
echo $address;

$cost=60;
$ORDER_ID="ALTER TABLE FOOD AUTO_INCREMENT=000001;";
$j=1;
$check=$_POST['chk'];


if($_POST["Submit"]=="Submit")
{
echo "<table border='1'>
<tr>
<th>No</th>
<th>Item_id</th>
<th>Item_Name</th>
<th>Cost</th>
</tr>";

  echo "<tr>";
  echo "<td> </td>";
  echo "<td> </td>";
  echo "<td>Delivary cost</td>";
  echo "<td>60 BDT</td>"; 
  echo "</tr>";

for($i=0;$i<sizeof($check);$i++)
{
$result = mysql_query("select * from MENU where m_id=$check[$i]",$con);
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$j++."</td>";
  echo "<td>".$row['m_id']."</td>";
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  $cost+=$row['m_cost'];
  }
  }
    echo "<tr>";
  echo "<td> </td>";
  echo "<td> </td>";
  echo "<td> Total </td>";
  echo "<td>".$cost."</td>"; 
  echo "</tr>";

echo"Your payable amount is ", $cost," BDT ";

$_SESSION['mail']=$mail;
$_SESSION['add']=$address;
$_SESSION['tm']=$dlvr_time;
$_SESSION['cost']=$cost;
header("location:chk.php");
}?>
<input type="submit" name="Confirm" value="Confirm" />
</form>
</HTML>