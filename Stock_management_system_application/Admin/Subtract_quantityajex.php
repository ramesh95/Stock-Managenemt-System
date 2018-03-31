<?php
$connection = @mysql_connect('localhost', 'root', '') or die(mysql_error());
$catname=$_GET['catname'];

echo "<select name='iname' id='iname'>";
$qry="SELECT item_name from stock_management.item where category_name='$catname'";
$resultSet=mysql_query($qry,$connection);
   
while($res=mysql_fetch_row($resultSet))
{
echo"<option value='$res[0]'>$res[0]</option>";
}

?>