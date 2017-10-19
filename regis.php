
<?php
mysql_connect("localhost","root","");
mysql_select_db(" socialweb_ranjit.sql ");

 
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 

?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<?php
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
 
$getquery=mysql_query("SELECT * FROM menu ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{

$comment=$rows['menu1'];
echo $comment ;
}
?>
 
