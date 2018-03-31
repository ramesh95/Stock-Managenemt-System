<?php
$staff_id = $_GET['sid'];
$category_name = $_GET['catname'];
$item_name = $_GET['Iname'];
$available_quantity = $_GET['rquantity'];
$issue_quantity = $_GET['iquantity'];
$date = $_GET['date'];
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());


if($issue_quantity <= $available_quantity)
{
    if(isset($_GET['submit']))
    { 
        $qry1="select item_name from stock_management.item where item_name='$item_name'";
        $resultSet1=mysql_query($qry1,$connection);
        while($res1=mysql_fetch_row($resultSet1))
        {
            $item_name=$res1[0];
        }
        
            $qry="insert into stock_management.tran(username,itemname,transdate,transtype,quantity) 
                values('$staff_id','$item_name','$date','issue','-$issue_quantity')";
                $res=mysql_query($qry,$connection);    
            if($res)
            {
                header("location:Issue_item.php?res=1&staff_id=$staff_id");
            }
            else
            {
                header("location:Issue_item.php?res=0&staff_id=$staff_id");   
            }
    }
    else
    {
        header("location:Issue_item.php?res=3&staff_id=$staff_id");
    }
}
else
{
    header("location:Issue_item.php?res=2&staff_id=$staff_id");
}



?>



