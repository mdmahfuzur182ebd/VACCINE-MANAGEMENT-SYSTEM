<?php
$DB_host = "127.0.0.1:3308";
$mysql_user = "sajib";
$mysql_password = "1234";
$DB_name = "ingram";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>