<?php
session_start();
if($_SESSION['name']!="" && $_SESSION['type']=="admin")
{
    
?> 
<html>
<head>
<title> WP ASSIGNMENT </title>
<link rel="stylesheet" type="text/css" href="..\Css\test.css"/>
<script type="text/javascript">
         
         function fun(xyz)
        {
        //alert(xyz);
        //create an object of XMLHttpRequest
        var req=new XMLHttpRequest();
            if(req)
              {
                //Anonymous Functions
                req.onreadystatechange=function()
                {
                    if(req.readyState==4)
                    {
                        //only if "OK"
                        if(req.status==200)
                        {
                            document.getElementById('iname').innerHTML=req.responseText;
                        }
                        else
                        {
                            alert("There was a problem while using XMLHTTP:\n"+req.statusText);
                        }
                    }
                
            }  
            req.open("GET",xyz,true);
            req.send(null);
            
        
        }
        
        }
        
        function fun1(xyz1)
        {
        //alert(xyz);
        //create an object of XMLHttpRequest
        var req1=new XMLHttpRequest();
            if(req1)
              {
                //Anonymous Functions
                req1.onreadystatechange=function()
                {
                    if(req1.readyState==4)
                    {
                        //only if "OK"
                        if(req1.status==200)
                        {
                            document.getElementById('ritem').innerHTML=req1.responseText;
                        }
                        else
                        {
                            alert("There was a problem while using XMLHTTP:\n"+req1.statusText);
                        }
                    }
                
            }  
            req1.open("GET",xyz1,true);
            req1.send(null);
            
        
        }
        
        }
 </script>
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
input[type=text] {
    border-radius:5px;
    width:20%;
    padding: 8px 20px;
    margin: 8px 1px;
    box-sizing: border-box;
}
input[type=date] {
    border-radius:5px;
    width:20%;
    padding: 8px 20px;
    margin: 8px 1px;
    box-sizing: border-box;
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
      <li><a href="Issue_history.php">Issue/Return Item History</a></li>
      <li><a href="Issue_history_staff.php">Issue/Return Item History Of Staff</a></li>
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
  <li><li><a href="../Login/Logout.php">&nbsp;Logout</a></li>
</ul>
<center> <font color="white">Welcome&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']."(".$_SESSION['type'].")"; ?></font></center>
<h3><font color="white"><center>
Remove Damaged Quantity</center></font></h3><hr width="50%"><br />
<center>
<form action="Subtract_quantitydb.php" method="get">
<font color="white">Category Name:</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="catname" onChange="fun('Subtract_quantityajex.php?catname='+this.value)">
  <option> Select one</option>
  <?php
                                    
                                            $connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
                                            $qry="select distinct category_name from stock_management.item ";
                                            $resultSet=mysql_query($qry,$connection);
                                            
                                            while($res=mysql_fetch_row($resultSet))
                                            {
                                                echo "<option value=$res[0]>$res[0]</option>";
                                            } 
                                     ?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font color="white">Item Name:</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select name="iname" id="iname" onChange="fun1('Subtract_quantityajex.php?iname='+this.value)">
</select><br/><br/>
<input type="hidden" name="staff_id" value="<?php echo $_SESSION['name'];?>"/>

<font color="white">Remaning Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>

<input type="text" id="ritem" name="ritem"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">Damaged Item: &nbsp;&nbsp;&nbsp;</font>

<input type="text" name="ditem"/><br/><br/>
<font color="white">Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="date"/><br/><br/><br/>
<input type="submit" name="remove" value="Remove"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Clear"/>
</form>
</center>
<footer><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><font size="medium">
Copyright � 2016 Stock Management System</font></font>
</footer>
</body>
</html>
<?php
}
else
{
    header("Location:..\Login\Login.php");
    
}
?>  