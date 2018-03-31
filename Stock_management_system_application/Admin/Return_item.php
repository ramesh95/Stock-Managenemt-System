<?php
session_start();
if($_SESSION['name']!="" && $_SESSION['type']=="admin")
{
    
?> 
<html>
<head>
<title> WP ASSIGNMENT </title>
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
                            document.getElementById('iitems').innerHTML=req.responseText;
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
                            
                            document.getElementById('iquantity').innerHTML=req1.responseText;
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
input[type=reset] {
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
      <li><a href="Issue_history.php">Issue Item History</a></li>
      <li><a href="Return_history.php">Return Item History</a></li>
      <li><a href="Issue_history_staff.php">Issue Item History Of Staff</a></li>
      <li><a href="Return_history_staff.php">Return Item History Of Staff</a></li>
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
  </li>
</ul>
<center> <font color="white">Welcome&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']."(".$_SESSION['type'].")"; ?></font></center>
<h3><font color="white"><center>
Return Item</center></font></h3><hr width="50%"><br />
<center>
<form action="Return_itemdb.php" method="get">
<font color="white">Staff id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="staff_id" id="staff_id" onChange="fun('Return_itemajex.php?staff_id='+this.value)" >
  <option> Select one</option>
   <?php
                    $connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
                    $sql = "Select DISTINCT staffid from stock_management.login"; 
                    $result = mysql_query($sql, $connection);
                    while($res=mysql_fetch_row($result))
                    {
                        echo"<option value='$res[0]'>$res[0]</option>";
                    }
              
          ?>
</select><br/><br/>
<font color="white">Issued Item: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="iitems" id="iitems" onChange="fun1('Return_itemquantity.php?&staff_name='+form.staff_id.value+'&iitems='+this.value)">
  <option> Select one</option>
</select><br/><br/>
<font color="white">Issued Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="iquantity" id="iquantity"/><br/>
<font color="white">Return Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="rquantity"/><br/>
<font color="white">Return Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<input type="date" name="date"/><br/><br/>
<input type="submit" name="submit"value="Return"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset"value="Clear"/>
</form>
</center>
<footer><br/>
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
<?php
}
else
{
    header("Location:..\Login\Login.php");
    
}
?>  