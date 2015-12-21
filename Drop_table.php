<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 9:02 PM
 */
require_once 'login_info.php';
$con=mysql_connect("$db_hostname","$db_username","$db_password");
if(!$con)
{
    die ("Error" .mysql_error());
}

$db_select=mysql_select_db("$db_name");
if(!$db_select){
    die("Error" .mysql_error());
}

$query="Drop table cats";
$result=mysql_query($query);
if($result)
{
    die("Error" .mysql_error);
}



?>