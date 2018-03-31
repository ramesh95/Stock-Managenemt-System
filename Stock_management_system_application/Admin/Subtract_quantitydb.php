<?php

$category=$_GET['catname'];
$item=$_GET['iname'];
$available_quantity=$_GET['ritem'];
$damage_quantity=$_GET['ditem'];
$staff_id=$_GET['staff_id'];
$date=$_GET['date'];


//echo "0 <br/>";

if($damage_quantity <= $available_quantity)
{       // echo "1 <br/>";
    if(isset($_GET['remove']))
    {   
        
        $connection= mysql_connect("localhost", "root", "") or die(mysql_error());
        $sql = "insert into  stock_management.tran values('$staff_id','$item','$date','damage','$damage_quantity')"; 
        $result = mysql_query($sql,$connection);
                //echo "6 <br/>";
                 
            if($result)
            {
                //echo "6 <br/>";
                header("location:Subtract_quantity.php?res=1");     
                //echo "ho gya";
            }
            else
            {
                //echo "7";
            }
    }
    else
    {
        header("location:Subtract_quantity.php?res=3");
       //echo "button click nhi hua";
    }
}
else
{
   header("location:Subtract_quantity.php?res=2");
   //echo "available quantity km h";
}
?>