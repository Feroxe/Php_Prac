<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 4:43 PM
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

$query="update customers set first_name='Feroze' where id='1'";
if(!mysql_query($query,$con)){
    die("Error" .mysql_error());
}
else{
    echo 'Updation successful';
}

mysql_close($con);



?>