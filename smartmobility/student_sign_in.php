<?php
$servername="localhost";
$user="root";
$pass="";
$database_name="login";

$conn=mysqli_connect($servername,$user,$pass,$database_name);
if(!$conn)
{    
    die("connection failed :".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $result = mysqli_query($conn,"SELECT username,password,id FROM student WHERE username='$username' and password='$password'");

  
    //while($row = mysqli_fetch_array($result))
   // {
        $row = mysqli_fetch_array($result);
        if ($row['password'] == $password && $row['username'] == $username ) {
            header('/alert_and_direction.html');
            echo "Logged in! on ID=".$row['id'];
            
exit();
        }else{
            echo "user does'nt exixst";
        }
    //}
 
mysqli_close($conn);
}
?>