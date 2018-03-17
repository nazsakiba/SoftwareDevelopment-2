<html>
<head>
<title>Credit Action</title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
div{
border:1px sloid red;
margin:10px;
padding:10px;
border-radius:15px;
width:500px;
right:0;
background-color: white;}
</style>
</head>

<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: pink;width:10px;textalign: top;">
<p class="style1">

	<a href="/SD2/about.php">ABOUT</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">SERVICE</a>   
	<br></br>
    <a href="/SD2/contact.php">CONTACT</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">

<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
<div>
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$a=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName) or die("Database name doesn't exist");
		if(!$a)
		{
		echo "Sorry your order is not accepted";
		}
		else {
$acc_name=$_POST['cardname'];
$acc_type=$_POST['cardtype'];
$acc_no=$_POST['cardno'];
$acc_pin=$_POST['pin'];
session_start();
$mail=$_SESSION['mail'];
$Phn=$_SESSION['phn'];
$address=$_SESSION['add'];
$dlvr_time=$_SESSION['tm'];
$Date=$_SESSION['dt'];
$cost=$_SESSION['cost'];
$check=$_SESSION['check'];
$n=0;
if($_POST["Submit"]=="Submit")
{
$k=mysql_query("Insert into acc_info values ('$acc_name','$acc_type','$acc_no','$acc_pin')") or die(mysql_error());
$sql="select amount from bank where ( Name='$acc_name' AND C_no='$acc_no' AND pin='$acc_pin')";
$result=mysql_query($sql) or die (mysql_error());
$id = $result;
if($result){
while ($row=mysql_fetch_array($result))
{
$n=$row['amount'];
}
if ($n>$cost)
{
$remain=$n-$cost;
$up="UPDATE bank set amount='$remain' WHERE C_no= $acc_no" ;
$retval = mysql_query( $up, $a );
if(! $retval )
{
  die('Could not update amount data: ' . mysql_error());
}
$ID="ALTER TABLE OR.ORDER AUTO_INCREMENT=000001;";
$r=mysql_query("insert into OR.ORDER values ('$ID','$Phn','$mail','$address','$Date','$dlvr_time','".implode($check, ',')."','$cost')");
$sl="select amount from bank where Name='Restora Account'";
$res=mysql_query($sl) or trigger_error(mysql_error().$sl);
if($res){
while ($row=mysql_fetch_array($res))
{
$bal=$row['amount'];
}
$add=$bal+$cost;
$ad="UPDATE bank set amount='$add' WHERE Name='Restora Account'" ;
$retval = mysql_query( $ad, $a );
if(! $retval )
{
  die('Error to add balance in restaurant account data: ' . mysql_error());
}}
echo "THANK YOU: ";
echo $acc_name;
echo "<br>";
echo " You have paid ";
echo $cost;
echo " tk";
echo "<br>";
echo "We will deliver the item within: ";
echo $Date;
echo " ";
echo $dlvr_time;
echo "<br> Your address: ";
echo $address;
echo "<br>";
echo " The bill has been sent in your mail-ID: ";
echo $mail;
echo "<br>";
$ID+=1;
echo " Your Bill is";
}
else {
echo "You don't have sufficient balance in your bank account to buy this or Account information is wrong";
}
}
else {echo "Sorry your information does not match with bank information :TRY AGAIN";}
}
}
$c=60;
$j=1;
$check=$_SESSION['check'];
echo "<table border='1'>
<tr>
<th>No</th>
<th>Item_Name</th>
<th>Cost</th>
</tr>";
for($i=0;$i<sizeof($check);$i++)
{
$result = mysql_query("select * from MENU where m_id=$check[$i]",$a);
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$j++."</td>";
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  $c+=$row['m_cost'];
  }
  }
  echo "<tr>";
  echo "<td>".$j++."</td>";
  echo "<td>Delivary cost</td>";
  echo "<td>60 </td>"; 
  echo "</tr>";
  
    echo "<tr>";
  echo "<td> </td>";
  echo "<td> Total </td>";
  echo "<td>".$c."</td>"; 
  echo "</tr>";
exit;		
?>
</div>
</body>
</html>