/*<?php
session_start();
if($_SESSION['name']!="" && $_SESSION['type']=="admin")
{
    
?>*/
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
 </style>
</head>
<body background="..\Image\secure.jpg">
<h2> <P>
STOCK MANAGEMENT SYSTEM</P></h2>
<ul>
  <li><a href="staff.php">Home</a></li>
  <li><a href="">&nbsp;View</a>
   <ul class="ONE">
      <li><a href="issue_reutn.php">Issue/ Return Item History Of Staff</a></li>
    </ul>
  </li>
  <li><a href="..\Login\Logout.php?Logout">&nbsp;Logout</a> </li>
</ul>
<center><h1> <font color="white">WELCOME TO STAFF PANEL</font> </h1></center>
<footer><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
/*<?php
}
else
{
    header("Location:..\Login\Login.php");
    
}
?>*/  