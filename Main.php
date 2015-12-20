<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 20-Dec-15
 * Time: 11:12 PM
 */

//connecting to mysql db
require_once 'login_info.php';
$db_server=mysql_connect("$db_hostname","$db_username",$db_password);

if(!$db_server)
{
    die("Unable to establish connection with database " .mysql_error());
}

//selecting the db
mysql_select_db("$db_name")
or die ("Unable to connect " .mysql_error());

//querying the db
$query="Select * from customers";
$result=mysql_query($query);

if(!$result){
    die("Unable to perform the operation" .mysql_error());
}

//display query result (not in proper way )
$rows=mysql_num_rows($result);

for($j=0;$j<$rows;$j++)
{
    /*echo mysql_result($result,$j,'id') .' ';
    echo mysql_result($result,$j,'company') .' ';
    echo mysql_result($result,$j,'first_name') .' ';
    echo mysql_result($result,$j,'last_name') .' ';
    echo mysql_result($result,$j,'email_address') .' ';
    echo mysql_result($result,$j,'job_title') .' ';
    echo mysql_result($result,$j,'business_phone') .'<br><br>';*/

    //more efficient way than above
    $row=mysql_fetch_row($result);
    echo $row[0] .' ';
    echo $row[1] .' ';
    echo $row[2] .' ';
    echo $row[3] .' ';
    echo $row[4] .' ';
    echo $row[5] .'<br><br>';
}

//closing the connection
mysql_close($db_server);

?>