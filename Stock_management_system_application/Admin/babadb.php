
Conversation opened. 1 read message.

Skip to content
Using APIIT SD INDIA Mail with screen readers
Ramesh
Search



The attachment has been saved to Google Drive.  Learn more
Mail
COMPOSE
Labels
Inbox (11)
Starred
Important
Sent Mail
Drafts (12)
More 
Hangouts

 
 
  More 
  
 
Print all In new window
DAM
Inbox
x 

Amitesh Surwar <amitesh.surwar@gmail.com>
Attachments2:49 AM (3 minutes ago)

to me 
4 Attachments 
 
	
Click here to Reply or Forward
Using 0.93 GB
Manage
Program Policies
Powered by Google
Last account activity: 2 days ago
Details

Saving to Drive - Move to:
<?php
$link=mysqli_connect("localhost:3307","root","");
mysqli_select_db($link,"stocks");
$category=$_GET['cat'];
$total_stock=0;
$damage_quantity=0;
$count=0;
$count1=0;

    $qry="select Item_name from items where Cateogory='$category'";
    $resultSet=mysqli_query($link,$qry);
    $num=mysqli_num_rows($resultSet);
    while($res=mysqli_fetch_row($resultSet))
    {
        if($res[0])
        {
           $qry1="SELECT SUM(quantity) FROM transaction where item_name='$res[0]' AND(transction_type='opening-stock' OR transction_type='Purchase-Stock')";
           $resultSet1=mysqli_query($link,$qry1);
          
               while($res1=mysqli_fetch_row($resultSet1))
                {
                    if($res1[0])
                    {
                        $total_stock = $total_stock+$res1[0];
                    }
                }
            $qry3="SELECT SUM(quantity) FROM transaction where item_name='$res[0]' AND transction_type='DAMAGE'";
            $resultSet3=mysqli_query($link,$qry3);

                while($res3=mysqli_fetch_row($resultSet3))
                {
                    if($res3[0])
                    {
                                $damage_quantity+=$res3[0];
                                $damage=str_replace("-","",$damage_quantity);                         
                    }
                    else
                    {
                        $damage=0;
                        break;
                    }
                }
        }
        else
        {
            $qry2="Delete FROM item_category where Category_name='$category'";
            $resultSet2=mysqli_query($link,$qry2);
            header('location:deletecatgry.php?res=3');
        }
        $count=$count+1;
    
    
    if($num == $count)
    {
         $qry7="select Item_name from items where Cateogory='$category'";
         $resultSet7=mysqli_query($link,$qry7);
         $num1=mysqli_num_rows($resultSet7);
            while($res7=mysqli_fetch_row($resultSet7))
            {
                if($total_stock == $damage)
                {
                    $qry4="Delete FROM transaction where item_name='$res7[0]'";
                    $resultSet4=mysqli_query($link,$qry4);
                    
                    $qry5="Delete FROM items where item_name='$res7[0]'";
                    $resultSet5=mysqli_query($link,$qry5);
                    $count1=$count1+1;
                }
                else
                {
                    header('location:deletecatgry.php?res=0');
                    break; 
                }
             }
             
            if($count1 == $num1)
            {
                $qry6="Delete FROM item_category where Cateogory_name='$category'";
                $resultSet6=mysqli_query($link,$qry6);
                header('location:deletecatgry.php?res=1');
            }
            else
            {
                header('location:deletecatgry.php?res=2');              
            }
            
      }
    }
?>
deletecatgrydb.php
Open with
2 of 4 items
deletecatgry.phpdeletecatgrydb.phpdeleteitems.phpdeleteitemsdb.phpDisplaying deletecatgrydb.php.