<?php

$connection=mysql_connect("localhost","root","");
mysql_select_db("stock_management", $connection);

$staffid=$_REQUEST['staff_id'];

echo "<select name='iitems' id='iitems' class='mail' required>
    <option>------Issued Items------</option>";

$qry="SELECT item_name FROM stock_management.item";


$resultSet=mysql_query($qry,$connection);
while($res=mysql_fetch_row($resultSet))
{
    if($res[0])
    {
        $qry1="Select SUM(quantity) from stock_management.tran where username='$staffid' AND itemname='$res[0]'";
        $resultSet1=mysql_query($qry1,$connection);
        while($res1=mysql_fetch_row($resultSet1))
        {
            if($res1[0])
            {
                if($res1[0] < 0)
                {
                    echo "<option value=$res[0]>$res[0]</option>";
                }
            }
            else
            {
                break;
            }
        }
    }
    else
    {
        break;
    }
}
echo "</select>";
?>
