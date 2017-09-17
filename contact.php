<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compiler";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$names = $_POST['names'];
$emails = $_POST['emails'];
$phone_numbers = $_POST['phone_numbers'];
$messages = $_POST['messages'];

$sql = "insert into feedback(names,emails,phone_numbers,messages) values ('$names','$emails','$phone_numbers','$messages')";

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}



if (mysqli_query($conn, $sql)) 
{
	echo " <br><br><br><center>Hello ,<b>$names</b> --  	Welcome to E-learn Portal Account successfully Created</center>";
	echo "<br><br><br><br><center> <h2><a style='color:red;' href='index.html' > Click For Homepage </a></h2></center> " ;
} 

else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>