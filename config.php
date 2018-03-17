<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$conn=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$conn);
		?>