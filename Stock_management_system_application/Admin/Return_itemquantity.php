<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("stock_management", $connection);

$itemname=$_REQUEST['iitems'];
$staffname=$_REQUEST['staff_id'];

$qry="SELECT item_name FROM stock_management.item where item_name='$itemname'";
$resultSet=mysql_query($qry,$connection);
   
while($res=mysql_fetch_row($resultSet))
{
    if($res[0])
    {
        $item_name=$res[0];
        break;
    }
}

$qry1="Select SUM(quantity) FROM stock_management.tran where itemname='$item_name' AND transtype='stock-return' AND username='$staffname'";
$resultSet1=mysql_query($qry1,$connection);
while($res1=mysql_fetch_row($resultSet1))
{
   if($res1[0])
   {
        $qry2="Select (SELECT SUM(quantity) FROM stock_management.tran where itemname='$item_name' AND transtype='ISSUE' AND username='$staffname') + 
        (SELECT SUM(quantity) FROM stock_management.tran where itemname='$item_name' AND transtype='stock-return' AND username='$staffname')";
        $resultSet2=mysql_query($qry2,$connection);
           
        while($res2=mysql_fetch_row($resultSet2))
        {
            $item_quantity=$res2[0];
            $quantity=str_replace("-","",$item_quantity);
        echo"<input type='text' class='mail' name='quantity' maxlength='100' value='$quantity' readonly>";
        }
   }
   
    else
    {
        $qry3="Select SUM(quantity) FROM stock_management.tran where itemname='$item_name' AND transtype='ISSUE' AND username='$staffname'";
        $resultSet3=mysql_query($qry3,$connection);
           
        while($res3=mysql_fetch_row($resultSet3))
        {
            $item_quantity=$res3[0];
            $quantity=explode("-",$item_quantity);
        echo"<input type='text' class='mail' name='quantity' maxlength='100' value='$quantity[1]' readonly>";
        }
     }
   
}
?>