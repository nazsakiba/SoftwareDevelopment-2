<HTML>
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

if($_POST["Delete"]=="Delete")
{
 $st=$_POST["itm"];
for($i=0;$i<sizeof($st);$i++)
{
  $sql ="DELETE FROM OR.ORDER WHERE tkn = $st[$i]" ;
}
}
$retval = mysql_query( $sql, $link );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}

  echo "<h1>"."<center>"."<B>"."Deleted data successfully\n"."</B>"."</center>"."</h1";
 echo '<br>';
header('Location:cmrtable.php');
?>
