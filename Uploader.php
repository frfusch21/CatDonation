<?php
if(isset($_POST['send']))
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

$name=$_POST['name'];
$category=$_POST['category'];
$donate=$_POST['donate'];
$email=$_POST['email'];
$message=$_POST['message'];
$fileName =$_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size']; 
$fileError = $_FILES['myfile']['error']; 
move_uploaded_file($_FILES['myfile']['tmp_name'], "upload/".$_FILES['myfile']['name']);
$sql = "INSERT INTO userdata VALUES(NULL,'$name','$category','$donate','$email','$fileName','$message')";
if(mysqli_query($connection,$sql))
{
    echo "<br>New record Created Successfully";
	echo "<img src='upload/".$fileName."' width='100px' height='100px'/>";
}
 else 
 {
    echo "Error: ".$sql.mysqli_error($connection); 
 }
 
 mysqli_close($connection);
 echo "<form action='index.php'><input type='submit' name='submit' value='DONE'></form>";
}
?>