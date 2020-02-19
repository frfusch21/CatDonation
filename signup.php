<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$database = "userdata";
$username = "root";
$password = "";

//create connection
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection)
{
    die("Connection failed: ".mysqli_connect_error());
}
else{
echo "Connected successfully";}

$uname=$_POST['uname'];
$psw=$_POST['psw'];
$email=$_POST['email'];
$sql = "INSERT INTO akun VALUES('$uname','$psw','$email')";
if(mysqli_query($connection,$sql))
{
    echo "<br>New record Created Successfully";
}
 else 
 {
    echo "Error: ".$sql.mysqli_error($connection); 
 }
 
 mysqli_close($connection);
 header("location: CFS_1.html");
}
?>