<html>
<body>
<?php
require('connect.php');
if(isset($_POST['Submit']))
{
$name=$_POST['nme'];
$username=$_POST['usrnme'];
$phonenumber=$_POST['phoneno'];
$address=$_POST['addr'];
$password=$_POST['pswrd'];
$sql="insert into userregistration(Name,Username,Phonenumber,Address,Password)values('$name','$username','$phonenumber','$address','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
 echo"New record create successfully";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" action="">
<table align="center">
<tr>
<td><label for="Name">Name:</label></td>
<td><input type="text" id="Name" name="nme"></td>
</tr>
<tr>
<td><label for="Username">Username:</label></td>
<td><input type="text" id="Username" name="usrnme"></td>
</tr>
<tr>
<td><label for="Phonenumber">Phonenumber:</label></td>
<td><input type="text" id="Phonenumber" name="phoneno"></td>
</tr>
<tr>
<td><label for="Address">Address:</label></td>
<td><textarea rows="3" cols="20" id="Address" name="addr"></textarea></td>
</tr>
<tr>
<td><label for="Password">Password:</label></td>
<td><input type="password" id="Password" name="pswrd"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" name="Submit" value="Submit"></td>
</tr>
<?php
}
?>
</table>
</form>
</body>
</html>

