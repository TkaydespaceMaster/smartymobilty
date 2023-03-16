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
{   $username=$_POST['username'];
    $id_number=$_POST['id_number'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    
    $sql_query="INSERT INTO guest (username,id_number,email,password)
    VALUES('$user_name',' $id_number','$email','$password')";

if(mysqli_query($conn,$sql_query))
{
    echo "new record entered !";
    //echo ' <a href="signed_up.php">page1</a>'; 
    
}
else
{
    echo "error:"."not recorded".mysqli_error($conn);
}
mysqli_close($conn);
}
?>