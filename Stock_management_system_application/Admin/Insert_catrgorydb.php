<?PHP
$category_name = $_GET['catname'];
$discription = $_GET['disc'];
$adddate = $_GET['date'];
$date = date("d-m-y", strtotime($date));
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
$sql = "insert into stock_management.insert_category(category_name, description, date) values('$category_name','$discription','$adddate') ";
$result = mysql_query($sql, $connection);
if($result)
{
    //secho "Record Inserted";
    header('location:insert_category.php?res=1');
}
else
{
    //echo "not inserted";
    header('location:insert_category.php?res=0');
}
?>