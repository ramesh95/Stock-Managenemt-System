<?php
$item_category = $_POST['item_category'];

$connection=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("osms",$connection) or die("error in database");
if ($item_category!="" && $item_category!="Select one" )
{
$query=mysql_query("delete from add_category where c_name='$item_category'") or die("error in deleting query");
if($query=true)
{
?>
<script>
alert("Your Category has been successfully deleted.");
window.location="admin_delete_category.php";
</script>
<?php
}
else
{
?>
<script>
alert("There is some error in deleting, try again.");
window.location="admin_delete_category.php";
</script>
<?php
}
}
?>