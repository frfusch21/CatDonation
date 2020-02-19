<?php
if(isset($_POST['submit']))
{
    $username = $_POST["uname"];
    $pass = $_POST["psw"];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","userdata");
    
    // mysql search query
    $query = "SELECT * FROM akun WHERE Username='$username' AND Password='$pass'";
    
    
    
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
       header('Location: CFS.html');
       exit();
    }
    else{
        header('Location: CFS_1_1.html');
        exit();
    }
    /*// if id exist 
    // show data in inputs
    if($result == TRUE)
    {
       //echo "<script>window.location.href = 'left-sidebar.html' </script>";
        echo "benar";
        echo $username;
        echo $pass;
    }
      
    else {
        echo "Undifined ID <br>";
        echo $username."<br>";
        echo $pass;
            
    }*/
    
    
    
    mysqli_close($connect);
    
}

/*if(isset($_POST['submit']))
		{
			$username = $_POST["uname"];
                        $pass = $_POST["psw"];
                        
			$servername = "localhost";
			$database = "login";
			$username = "root";
			$password = "";

			$connection = mysqli_connect($servername, $username, $password, $database);

			if (!$connection)
			{
	    		die("Connection failed: ".mysqli_connect_error());
			}
			else
			echo "Connected successfully <br>";
     
			$sql = "SELECT * FROM akun WHERE Username='".$username."' and Password ='" .$pass. "'";
                        
			if(mysqli_query($connection,$sql))
			{
	   		 echo "New record Created Successfully <br>";    
	   		 
	    		}
			}
			 else 
			 {
 			   echo "Error: ".$sql."<br>".mysqli_error($connection); 
			 }
	 
			 mysqli_close($connection);
			
  */                    
?>