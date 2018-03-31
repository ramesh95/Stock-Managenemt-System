<?php
$userid = $_GET['staff_id'];
$issued_item = $_GET['iitems'];
$issued_quantity = $_GET['iquantity'];
$return_quantity = $_GET['rquantity'];
$return_date = $_GET['date'];

$date = date("d-m-Y", strtotime($return_date));


$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("stock_management",$connection);

if(isset($_GET['submit']))
{      
    $qry1="SELECT itemname FROM stock_management.item where itemname='$issued_item'";
    $resultSet1=mysql_query($qry1,$connection);
       
    while($res1=mysql_fetch_row($resultSet1))
    {
        if($res1[0])
        {
            $item_name=$res1[0];
            break;
        }
    }

    if($return_quantity <= $issued_quantity) 
    {   
        $qry2="select transdate from stock_management.tran where itemname='$item_name' and transtype='opening-stock'";
        $resultSet2=mysql_query($qry2,$connection);
        while($res2=mysql_fetch_row($resultSet2))
        {
            $openingdate = date("d-m-Y", strtotime($res2[0]));
            
            break;
        }
        $datediff = $date - $openingdate;
       
        if($datediff >= 0)
        {   
        $qry = "insert into stock_management.tran (username,itemname,transdate,transtype,quantity) 
            values('$userid','$issued_item','$return_date','return','$return_quantity')";
            $res = mysql_query($qry, $connection);
        
        
             
            if($res)
            {
               header("location:Return_item.php?res=1");
            }
            else
            {
               header("location:Return_item.php?res=0");
            }
        }
        else
        {
           header("location:Return_item.php?res=4"); 
        }
    }
    else
    {
        header("location:Return_item.php?res=3");
    }
}
else
{
   header("location:Return_item.php?res=2");
}
?>