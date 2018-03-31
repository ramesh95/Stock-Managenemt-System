<?php
$category_name=$_GET['catname'];
$item_name = $_GET['item'];
$purchase_quantity = $_GET['quantity'];
$purchase_date = $_GET['date'];
$name = $_GET['name'];

$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());

$sql1 = "insert into stock_management.tran (username,itemname,transdate,transtype,quantity) 
values('$name','$item_name','$purchase_date','purchase-stock','$purchase_quantity')";
$result1 = mysql_query($sql1, $connection);

if($result1)
{
    echo "record added";
}
else
{
    echo"record not added";
}
    //header('location:insert_item.php?res=1');
?>