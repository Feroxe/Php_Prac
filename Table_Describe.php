<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 21-Dec-15
 * Time: 8:48 PM
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

$query="Describe cats";
$result=mysql_query($query);
if(!$result)
{
    die ("Error" .mysql_error());
}

$rows=mysql_num_rows($result);

echo "<table><tr><th>ID</th><th>Name</th><th>Age</th><th>Family</th></tr></table>";

for($j=0;$j<$rows;++$j)
{
    $row=mysql_fetch_row($result);
    echo "<tr>";
    for($k=0;$k<4;++$k)
        echo "<td>$row[$k]</td>";


    echo "</tr>";
}

echo "</table>";

mysql_close($con);

?>