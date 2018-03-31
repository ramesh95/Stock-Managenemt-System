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
    margin: -6px  250px;
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
    padding: 6px 10px;
    margin: 8px 1px;
    box-sizing: border-box;
}
input[type=submit] {
    color:white;
    border-radius: 5px;
    width: 10%;
    padding: 6px 10px;
    background-color:#001a33;
    box-sizing: border-box;
    font-weight: bold;
}
input[type=password] {
    border-radius:5px;
    width:20%;
    padding: 6px 10px;
    margin: 8px 1px;
    box-sizing: border-box;
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
 </style>*/
</head>
<body background="..\Image\secure.jpg">
<h2> <P>
STOCK MANAGEMENT SYSTEM</P></h2>
<ul>
  <li><a href="Pchome.php">Home</a></li>
  <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</a> 
   <ul class="ONE">
      <li><a href="pc_add_admin.php">Add</a></li>
      <li><a href="Pc_update_admin.php">Update</a></li>
      <li><a href="pc_delete_admin.php">Delete</a></li>
    </ul>
  </li>
  </li>
  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staff</a>
  <ul class="ONE">
      <li><a href="pc_add_staff.php">Add</a></li>
      <li><a href="Pc_update_staff.php">Update</a></li>
      <li><a href="pc_delete_staff.php">Delete</a></li>
    </ul>
  </li>
  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View</a>
  <ul class="ONE">
      <li><a href="pc_view_issue.php">Issue</a></li>
      <li><a href="pc_return_view.php">Return</a></li>
      <li><a href="pc_staff_view.php">Staff</a></li>
    </ul>
  </li>
  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
</ul><br/><br/><br/><br/>
<h3><font color="white"><center>
Update Admin</center></font></h3><hr width="50%"><br />
<center>
<form action="Pc_update_admindb.php" method="POST">
Admin id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="aid">
  <option> Select one</option>
  <?php
                                    
                                            $connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
                                            $qry="select username from stock_management.login where usertype='admin' order by username";
                                            $resultSet=mysql_query($qry,$connection);
                                            
                                            while($res=mysql_fetch_row($resultSet))
                                            { 
                                                echo "<option value=$res[0]>$res[0]</option>";
                                            } 
?>
</select><br/><br/>
Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password"/>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Update"/>
</form>
</center>
</body>
</html>