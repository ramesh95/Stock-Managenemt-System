<?php
$sid = $_GET['sid'];
$staffname = $_GET['staffname'];
$password = $_GET['password'];
$department = $_GET['department'];
$doj = $_GET['date'];
$address = $_GET['address'];
$email = $_GET['email'];
$contact = $_GET['mobilenumber'];
$gender = $_GET['gender'];

$connection=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("stock_management",$connection) or die("error in database");
if ($sid!="" && $sid!="Select one" && $staffname!="" && $password!="" && $department!="" && $doj!="" && $address!="" && $email!="" && $contact!="" && $gender!="")
{
$qry=mysql_query("update login set password='$password' where staffid='$sid' && usertype='Staff'") or die("error in deleting query");
$row=mysql_query($qry,$connection);
if($row=true)
{
    $qry1=mysql_query("update addstaff set staffname='$staffname', department='$department', doj='$doj', address='$address',  
    contact='$contact ', gender='$gender', where email='$sid'") or die("error in updating query staff");
    $result1=mysql_query($query1,$connection);
?>
<script>
alert("Your Staff has been successfully updated.");
window.location="coordinator_update_staff.php";
</script>
<?php
}
else
{
?>
<script>
alert("There is some error in deleting, try again.");
window.location="coordinator_update_staff.php";
</script>
<?php
}
}
?>