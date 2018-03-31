<?php
$category=$_GET['catname'];
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
echo "<select name='iname' required>
    <option> Select one item </option>";
$query="select item_name from stock_management.item where category_name='$category'";
$result=mysql_query($query,$connection);
while($row=mysql_fetch_row($result))
{
    echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";

?>