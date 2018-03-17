<html>
<head>
<title>Authorization DEFAULT TEMPLATE</title>   
 <style type="text/css">
table, tr, td {
border:1px solid green;}

#float {
position: fixed;
top: 50%;
left: 0;
}
.style8 {color: #000000}
.style9 {
	font-size: 10pt;
	font-weight: bold;
}

</style>
</head>
<div id="float">
            <img  src="visa.jpg" title="WE ACCEPT VISA CARD"><br><br>
            <img  src="macrd.jpg" title="WE ACCEPT MASTER CARD"><br><br>
            <img  src="duchb.png" title="WE ACCEPT DUCH BANGLA BANK"><br><br>
            <img  src="bracb.png" title="WE ACCEPT BRAC BANK"></div>
        <script type="text/javascript" language="javascript"></script>
<body bgcolor="#000000" background="I1.jpg" text="#000000" link="#FFFFFF">
<table width="100%" height="100%"><tbody width="80%" ><tr width="80%" ><td width="80%" align="center">
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);
session_start();
$mail=$_SESSION['mail'];
$phn=$_SESSION['phn'];
$address=$_SESSION['add'];
$dlvr_time=$_SESSION['tm'];
$dlvr_date=$_SESSION['dt'];
$cost=60;
$j=1;
$check=$_POST['chk'];
if($_POST["Submit"]=="Submit")
{
echo "<table border='1'>
<tr>
<th>No</th>
<th>Item_Name</th>
<th>Cost</th>
</tr>";
for($i=0;$i<sizeof($check);$i++)
{
$result = mysql_query("select * from MENU where m_id=$check[$i]",$con);
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$j++."</td>";
  echo "<td>".$row['m_name']."</td>";
  echo "<td>".$row['m_cost']."</td>"; 
  echo "</tr>";
  $cost+=$row['m_cost'];
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
  echo "<td>".$cost."</td>"; 
  echo "</tr>";
$_SESSION['mail']=$mail;
$_SESSION['phn']=$phn;
$_SESSION['add']=$address;
$_SESSION['tm']=$dlvr_time;
$_SESSION['dt']=$dlvr_date;
$_SESSION['cost']=$cost;
$_SESSION['check']=$check;
}    
?>
<h1><font color="BLUE">YOUR BILL</font></h1>
</td></tr></tbody>
</table>
<h3><strong><a href="/SD2/menu.php">Go back to change the order.</a></strong><h3>
<table width="100%" height="100%"><tbody><tr><td align="center">
  <table border="0" bordercolor="#f5f5f5" width="737" height="481" cellspacing="0" cellpadding="4">
     <tbody><tr height="300">
     <td width="729" align="right" valign="top" height="387">
      <table width="34%" cellspacing="0" style="FONT: 9pt Verdana">
      <tbody><tr>
      <td align="left" valign="top"><img height="109" src="r.jpg" width="725"></td></tr>	  
      <tr>
        <td colspan="2" align="center" bgcolor="#f5f5f5">
        <font size="6" color="#0000cc">Nexus Gateway</font></td></tr>
      <tr>
      <td align="left"><table width="721" border="0" cellpadding="0" cellspacing="0">
         <tbody><tr>
           <th width="381" scope="col" align="center" valign="top">
	

	<form action="credit_action.php" method="post" >
<table width="378" border="1" cellpadding="1" cellspacing="0"  color="#f5f5f5" style="FONT: 8pt Verdana">
             <tbody><tr>
               <td colspan="2"><div align="center" class="style9">Card Information </div></td></tr>
             <tr><td width="145"><div align="right">Card Holder Name</div></td>
               <td width="218"><input type="text" name="cardname" placeholder="As written as card" size="19" maxlength="100"></td></tr>
              
			  <tr><td><div align="right">Card Type</div></td>
            	<td width="300"> <input type="text" name="cardtype" placeholder="VISA/ MASTER CARD" size="19" maxlength="100"></td></tr>
			 
			 <tr><td><div align="right">Card Number</div></td>
                <td width="300"><input type="text" name="cardno" value="" size="19" maxlength="100"></td></tr>
			
			<tr><td> <div align="right"> PIN </div></td>
			  <td width="300"><input type="password" name="pin" size="19" maxlength="100"></td></tr>
                          
						  <tr><td><div align="right">Bill</div>
                 <td 
				 width="300"><?php echo $cost;
echo " BDT";				 ?>
</td>
<tr>	  
 <td height="21">&nbsp;</td>
  <td>  <input type="submit" value="Submit"  name="Submit">
	     <input type="reset" value="RESET"   name="reset1"> 
</td>
</td>
</tr>
</tbody>
</table>
</form>
</th>
<th width="160" scope="col" align="left"><img height="80" src="h.jpg" width="120"></th></tr></tbody></table></td></tr></tbody></table></td></tr>
<td height="5" align="center" valign="top" bgcolor="#ffffff">ecom.dutchbanglabank.com</td></tr></tbody></table></td></tr></tbody></table>
</tr>
</body>
</html>