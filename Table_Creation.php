<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 4:53 PM
 */
require_once 'login_info.php';
$con=mysql_connect("$db_hostname","$db_username","$db_password");
if(!$con)
{
    die("Error" .mysql_error());
}

$db_select=mysql_select_db("$db_name");
if(!$db_select){
    die("Error" .mysql_error());
}

$query="Create table Cats(id SMALLINT NOT NULL AUTO_INCREMENT,Family VARCHAR(32) NOT NULL,Name VARCHAR(32) NOT NULL,Age SMALLINT  NOT NULL,PRIMARY KEY(id))";
$result=mysql_query($query,$con);
if(!$result){
    die("Db access error" .mysql_error());
}

?>