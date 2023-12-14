<html>
<head>
<title>view all</title>
</head>
<body>
<?php
require('connect.php');
$sql="select * from registration";
$result=Mysqli_query($conn,$sql);
if(Mysqli_num_rows($result)>0)
{
	while($row=Mysqli_fetch_assoc($result))
	{
		echo"Book name".$row["book_name"]."<br>";
		echo"Author".$row["aname"]."<br>";
		echo"Publisher".$row["publisher"]."<br>";
		echo"quantity".$row["quantity"]."<br>";
		echo"price".$row["price"]."<br>";
	}
}
else
{
	echo"no results";
}
mysqli_close($conn);
?>
</body>
</html>




