<?php
$servername="localhost";
$username="root";
$password="";
$dbname="meenakshy";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die("Couldn't connect mysql".mysqli_connect_error());
}
else
{
 echo"Database connected successfully";
}
?>
