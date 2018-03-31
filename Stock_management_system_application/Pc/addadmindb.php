<?PHP
$staff_id = $_GET['sid'];
$username = $_GET['username'];
$password = $_GET['password'];
$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());

$sql="select username from stock_management.login";
$result1=mysql_query($sql,$connection);
while($res1=mysql_fetch_row($result1))
{
    if ($res1[0]==$user_id)
    {
        $x=1;
        break;
    }
    else
    {
    $x=0;
    }
}
if( $x==0)
{
    $sql = "insert into stock_management.login(username,password,usertype,staffid) values('$username','$password','admin','$staff_id') ";
    $result = mysql_query($sql,$connection);
    if($result)
        {
            //echo "Record Inserted";
            header('location:pc_add_admin.php?res=1');
        }
    else
        {
            //echo "not inserted";
            header('location:pc_add_admin.php?res=0');
        }
}
else
{
    header('location:pc_add_admin.php?check=0');
}
?>