<?php
$username=$_GET['username'];
$password=$_GET['pswd'];

include ('connection.php');

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"stock_management");

$qry="Select username,password,usertype FROM login";
$resultset=mysqli_query($link,$qry);


if(isset($_GET['signin']))
{
    while($res=mysqli_fetch_row($resultset))
    {
        if($username == $res[0] && $password == $res[1] && $res[2]=='staff')
        {
            $r=1;
        
            break;
            //echo "1";
        }
        elseif($username == $res[0] && $password == $res[1] && $res[2]=='admin')
        {
            $r=2;
            
            break;
            //echo "2";
        }
        elseif($username == $res[0] && $password == $res[1] && $res[2]=='pc')
        {
            $r=3;
           
            break;
            //echo "3";
        }
        else
        {
            $r=0;
            //echo "4";
        }
    }
        
        if($r == 1)
            {
                session_start();
               
                $_SESSION['name']=$username;
                $_SESSION['type']=$res[2];
               // header("location:Staff/StaffHome.php");
                //echo "<center>Invalid Id and Password . . . Please try again ! ! !</center>";
            }
  
        elseif($r == 2)
            {
                session_start();
                 $_SESSION['name']=$username;
                 $_SESSION['type']=$res[2];
                header("location:..\Admin/Home.php");
               
                //echo "<center>Invalid Id and Password . . . Please try again ! ! !</center>";
                //echo"Login Successfull";
            }
            
        elseif($r == 3)
            {
                session_start();
                 $_SESSION['name']=$username;
                 $_SESSION['type']=$res[2];
                header("location:..\Pc/Pchome.php"); 
                //echo "<center>Invalid Id and Password . . . Please try again ! ! !</center>";
            }
        else
            {
                header("location:Login.php?res=0");
                //echo "Login Successfull<br>";
            }
}
?>