<?php
$username="monitor";
$password="etc1brew";
$database="monitor";

//$first=$_POST['first'];
//$last=$_POST['last'];
//$phone=$_POST['phone'];
//$mobile=$_POST['mobile'];
//$fax=$_POST['fax'];
//$email=$_POST['email'];
//$web=$_POST['web'];

mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "select config_data from monitor_servers limit 1";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();

$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"config_data");
echo $first;

$i++;
}
?>