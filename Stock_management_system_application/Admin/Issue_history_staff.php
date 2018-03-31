<html>
<head>
<title> WP ASSIGNMENT </title>
<link rel="stylesheet" type="text/css" href="..\Css\test.css"/>
<style type="text/css">
h2{
    border-radius: 50px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 800px;
    height: 70px;
    text-align: center;
    margin: 20px  250px;
}
P{
color: white;
font-family: "verdana"
}
ul.ONE
{
    font-size: small;
}
input[type=submit] {
    color:white;
    border-radius: 5px;
    width: 10%;
    padding: 8px 20px;
    background-color:#001a33;
    box-sizing: border-box;
    font-weight: bold;
}
select {
    color:black;
    border-radius: 5px;
    width: 20%;
    padding: 6px 10px;
    background-color:white;
    box-sizing: border-box;
    font-weight: bold;
}
 </style>
</head>
<body background="..\Image\secure.jpg">
<h2> <P>
STOCK MANAGEMENT SYSTEM</P></h2>
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="">&nbsp;&nbsp;Insert</a>
  <ul class="ONE">
      <li><a href="Insert_category.php">Category</a></li>
      <li><a href="Insert_item.php">Item</a></li>
    </ul>
  </li> 
  <li><a href="">&nbsp;Delete</a>
   <ul class="ONE">
      <li><a href="Delete_category.php">Category</a></li>
      <li><a href="Delete_item.php">Item</a></li>
    </ul>
  </li>
  <li><a href="">&nbsp;Stock</a>
  <ul class="ONE">
      <li><a href="Add_quantity.php">Add Purchased Quantity</a></li>
      <li><a href="Subtract_quantity.php">Subtract damaged Quantity</a></li>
    </ul>
  </li>
  <li><a href="">&nbsp;View</a>
  <ul class="ONE">
      <li><a href="Current_stock.php">Current Stock</a></li>
      <li><a href="Issue_history.php">Issue/ Return Item History</a></li>
      <li><a href="Issue_history_staff.php">Issue/ Return Item History Of Staff</a></li>
    </ul>
  </li>
  <li><a href="">&nbsp;Issue</a>
  <ul class="ONE">
      <li><a href="Issue_item.php">Item</a></li>
    </ul>
  </li>
  <li><a href="">&nbsp;Return</a>
  <ul class="ONE">
      <li><a href="Return_item.php">Item</a></li>
  </ul>
  </li> 
  <li><a href="Home.php">&nbsp;Logout</a>
</ul>
<h3><font color="white"><center>
Issue Item History Of Staff</center></font></h3><hr width="50%"><br />
<center>
<form>
<font color="white">Staff Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="sid">
  <option> Select one</option>
                <?php
                                $connection=mysqli_connect("localhost","root","") or die(mysql_error());
                                mysqli_select_db($connection,"stock_management") or die("error in database");
                                $qry="select distinct username from tran where transtype='issue' OR transtype='stock-return'";
                                $resultSet=mysqli_query($connection,$qry);
                                while($res=mysqli_fetch_row($resultSet))
                    {
                        echo "<option value=$res[0]>$res[0]</option>";
                    }
            ?>    
  
</select><br/><br/><br/>
<input type="submit" name="submit"value="View"/>
</form>
</center>

 <?php
if(isset($_GET['submit']))
{
                                $connection=mysqli_connect("localhost","root","") or die(mysql_error());
                                mysqli_select_db($connection,"stock_management") or die("error in database");
$staffid=$_GET['sid'];
$qry="select * from tran where username='$staffid' AND(transtype='issue' OR transtype='return') order by transtype";

$resultSet=mysqli_query($connection,$qry);
echo "<br/><br/>"."<table width='100%' cellpadding='10px' align=center border=3 bordercolor=black>"; 
echo" <tr>


<th> Username</th> 
<th> Transaction Type </th>
<th>Transaction Date </th>
<th> Item Name</th>
<th>Quantity </th> 
</tr>";
$count=0;
while($res=mysqli_fetch_row($resultSet))
{
    
    //echo "Name=$res[0]"."<br/>";
    $Date = date("d-m-Y", strtotime($res[2]));
    $quantity=str_replace("-","",$res[4]);
    echo "<tr style='background-color:green'> 
            <td>$res[0]</td>
            <td>$res[3]</td>
            <td>$Date</td>
            <td>$res[1]</td>
            <td>$quantity</td>
            
           
    </tr>"; 
}
}   
?>
<footer><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><font size="medium">
Copyright © 2016 Stock Management System</font></font>
</footer>
</body>
</html>