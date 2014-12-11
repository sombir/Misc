<?php
$conn = mysql_connect("10.0.0.130","root","root") or die(mysql_error());

mysql_select_db("test",$conn);

if($conn){
	echo "Connected";
}else{
	echo "Not Connected";
}

$sqlQuery = mysql_query("select * from emp");
while(($rows = mysql_fetch_object($sqlQuery))) {
	echo "<pre>";
	print_r($rows);
}
