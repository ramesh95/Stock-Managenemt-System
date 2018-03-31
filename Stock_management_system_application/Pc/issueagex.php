<?php
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
$item=$_GET['Iname'];

$qry1="SELECT item_name FROM stock_management.item where item_name='$item'";
$resultSet1=mysql_query($qry1,$connection);
   
while($res1=mysql_fetch_row($resultSet1))
{
    if($res1[0])
    {
        $item_name=$res1[0];
        break;
    }
}


$qry="SELECT SUM(quantity) FROM stock_management.tran where item_name='$item_name'";
$resultSet=mysql_query($qry,$connection);
   
while($res=mysql_fetch_row($resultSet))   
{
echo "<input type='text' name='rquantity'  value='$res[0]' readonly>";
}

?>