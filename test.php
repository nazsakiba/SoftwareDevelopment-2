<HTML>
<HEAD>
<title>Test</title>
</HEAD>
</br></br>
<h1>Test</h1>
</br></br></br>
<body>

<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);

$itm_id=array('44','23','45');
$ID="ALTER TABLE OR.ORDER AUTO_INCREMENT=000001;";
$mail="hello@yahoo.com";
$address="12, College Road, Ctg";
$dlvr_time="14:11:00";
$cost="60";
echo implode(",",$itm_id);
$r=mysql_query("insert into OR.ORDER values ('$ID','$mail','$address','$dlvr_time','".implode($itm_id, ',')."','$cost')");
?>
</body>
</HTML>