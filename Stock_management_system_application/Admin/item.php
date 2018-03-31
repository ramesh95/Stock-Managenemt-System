<?php
$category=$_GET['catname'];
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
echo "<select name='Iname' id='Iname' required>
    <option value=''>Select one</option>";
$qry="select * from stock_management.item where category_name='$category' order by item_name";
$resultSet=mysql_query($qry,$connection);
while($res=mysql_fetch_row($resultSet))
{
                echo "<option value='$res[0]'>$res[0]</option>";
            }
echo "</select>";

?>
