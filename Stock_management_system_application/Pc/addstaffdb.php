<?php
$staffname = $_GET['sname'];
$username = $_GET['username'];
$password = $_GET['password'];
$department = $_GET['department'];
$doj = $_GET['date'];
$address = $_GET['address'];
$email = $_GET['email'];
$contact = $_GET['contact'];
$gender = $_GET['gender'];


$connection = mysql_connect("localhost", "root", "") or die(mysql_error());
$sql = "insert into stock_management.addstaff(staffname,department, doj, address, email, contact, gender, status) 
values('$staffname','$department','$doj','$address','$email','$contact','$gender','active')";
$result = mysql_query($sql, $connection);
if($result)
{
    //echo "Record Inserted";
    $sql1 = "insert into stock_management.login(username,password,usertype,staffid) 
    values('$username','$password','Staff','$email')";
    $result1 = mysql_query($sql1,$connection);
    echo "Record Inserted";
   
    //header('location:add_staff.php?res=1');
}
else
{
    echo "not inserted";
    //header('location:add_staff.php?res=0');
}
?>