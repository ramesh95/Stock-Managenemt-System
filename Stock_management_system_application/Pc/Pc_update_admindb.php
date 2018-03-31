<?php
$aid = $_POST['aid'];
$password = $_POST['password'];

$connection=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("stock_management",$connection) or die("error in database");
if ($aid!="" && $aid!="Select one"  && $password!="")
{
$qry=mysql_query("update login set password='$password' where 	username='$aid' && usertype='admin'") or die("error in deleting query");
$row=mysql_query($qry,$connection);
if($row=true)
{
?>
<script>
alert("Your Staff has been successfully updated.");
window.location="pc_update_admin.php";
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