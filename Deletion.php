<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 4:10 PM
 */
    require_once 'login_info.php';
    $con=mysql_connect("$db_hostname","$db_username","$db_password");
    if(!$con)
    {
        echo 'Error' .mysql_error();
    }

    $db_select=mysql_select_db("$db_name");
    if(!$db_select)
    {
        echo 'Error' .mysql_error();
    }

    $query="Delete from customers where first_name='feroze' ";

    if(!mysql_query($query,$con)){
        die ("Error" .mysql_error());
    }
    else
    {
        echo "Deletion Successful";
    }

?>