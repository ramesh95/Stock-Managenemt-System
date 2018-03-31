<?php
$staff_id = $_GET['sid'];
$connection=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("stock_management",$connection) or die("error in database");
if ($staff_id!="" && $staff_id!="Select one" )
{
$query=mysql_query("delete from login where staffid='$staff_id' && usertype='staff'") or die("error in deleting query");
$result=mysql_query($query,$connection);
if($result=true)
{
    $query1=mysql_query("delete from addstaff where email='$staff_id'") or die("error in deleting query staff");
    $result1=mysql_query($query1,$connection);
?>
<script>
alert("Your Staff has been successfully deleted.");
window.location="pc_delete_staff.php";
</script>
<?php
}
else
{
?>
<script>
alert("There is some error in deleting, try again.");
window.location="pc_delete_staff.php";
</script>
<?php
}
}
?>