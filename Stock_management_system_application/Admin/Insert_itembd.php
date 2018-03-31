<?php
$category_name = $_GET['catname'];
$item_name = $_GET['Iname'];
$opening_stock = $_GET['ostock'];
$discription = $_GET['discription'];
$quantity = $_GET['quantity'];
$date = $_GET['date'];
$name = $_GET['name'];
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
$sql = "insert into stock_management.item(item_name, opening_stock, discription, quantity, date, category_name) 
values('$item_name','$opening_stock','$discription', '$quantity', '$date', '$category_name')";
$result = mysql_query($sql, $connection);

if($result)
{
    $sql1 = "insert into stock_management.tran (username,itemname,transdate,transtype,quantity) 
values('$name','$item_name','$date','opening-stock','$quantity')";
$result1 = mysql_query($sql1, $connection);

    echo "Record Inserted";
    
    //header('location:insert_item.php?res=1');
}
else
{
    echo "not inserted";
    //header('location:insert_item.php?res=0');
}
?>