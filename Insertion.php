<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 3:41 PM
 */
    require_once 'login_info.php';
    $db_server=mysql_connect($db_hostname,$db_username,$db_password);
    if(!$db_server)
    {
        die("Error in establishing connection" .mysql_error());
    }

    $db_select=mysql_selectdb($db_name);
    if (!$db_select)
    {
        die("Error " .mysql_error());
    }

    //insertion
    $query="insert into customers(company,last_name,first_name,email_address,job_title) values('z','siddiqi','feroze','feroze104@gmail.com','senior deveoper')";
    if(!mysql_query($query,$db_server))
    {
        echo 'Error' .mysql_error();
    }
    else
    {
        echo 'Insertion successful';
    }

    mysql_close($db_server);



?>
