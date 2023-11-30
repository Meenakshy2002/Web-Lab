<html>
<head>
<Title>Registration Form</Title>
</head>
<body align="center">
<?php
require('connect.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$sql="select * from userregistration where Username='$name' AND Password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "Success";
}
else 
{
echo "Login Failed";
}
mysqli_close($conn);
}
else
{
?>

<h1>LOGIN</h1>
<form action="" method="post">
<table align="center">
</tr>
<td><label for="Username">Username:</label></td>
<td><input type="text" id="Username" name="name"></td><br>
</tr>
</tr>
<td><label for="Password">Password:</label></td>
<td><input type="Password" id="Password" name="password"></td><br>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" name="submit"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" value="register" name="submit"></td>
</tr>
</table>

<?php
}
?>
</form>
</body>
</html>