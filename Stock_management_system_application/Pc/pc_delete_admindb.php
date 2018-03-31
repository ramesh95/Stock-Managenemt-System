<?php
$aid = $_GET['aid'];
$connection=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("stock_management",$connection) or die("error in database");
if ($aid!="" && $aid!="Select one" )
{
$query=mysql_query("delete from login where staffid='$aid' && usertype='admin'") or die("error in deleting query");
$result=mysql_query($query,$connection);
if($result=true)
{
?>
<script>
alert("Your admin has been successfully deleted.");
window.location="pc_delete_staff.php";
</script>
<?php
}
else
{
?>
<script>
alert("There is some error in deleting admin, try again.");
window.location="pc_delete_staff.php";
</script>
<?php
}
}
?>