<?php 
include 'config.php';

if(isset($_POST['btnAdd'])){
	$sname=mysqli_real_escape_string($conn,$_POST['name']);
	$uname=mysqli_real_escape_string($conn,$_POST['username']);
	$pass=mysqli_real_escape_string($conn,$_POST['Password']);
	$cpass=mysqli_real_escape_string($conn,$_POST['cPassword']);

	if($pass==$cpass AND strlen($pass)>3){

	$sql="INSERT INTO user (Station_Name,UserName,Password) VALUES('$sname','$uname','$pass')";
	$result=mysqli_query($conn,$sql);

	if($result){
	echo "<script> alert('User added successfully')</script>";	
	}else{
		echo "<script> alert('Could not add user!')</script>". mysqli_error($conn);
	}
}
else{
	echo "<script> alert('Passwords do not match!')</script>".mysqli_error($conn);
}
}




 ?>

<html>
<head>
<title>Add User</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="green">
<td align="center">
<font size="5">
<a href="officerpanel.php">HOME</a> 

</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">ADD REGISTRANT</h2>
<form action="add_user.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
	<tr>
<td width="34%" bgcolor="#FFFFFF"><b>Station Name:</b></td>
<td width="80%" bgcolor="#FFFFFF">
	<input type="text" name="name" placeholder="Station Name" style="width: 220px;">
</td>
</tr>
	<tr>
<td width="34%" bgcolor="#FFFFFF"><b>User Name:</b></td>
<td width="80%" bgcolor="#FFFFFF">
	<input type="text" name="username" placeholder="User" style="width: 220px;" required="">
</td>
</tr>

	
<tr><td bgcolor="#FFFFFF"><b>Password:</b></td>
        <td> <input type="text" name="Password" placeholder="Password" style="width: 220px;" required=""></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Confirm Password:</b></td>
        <td> <input type="text" name="cPassword" placeholder="Confirm Password" style="width: 220px;" required=""></td></tr>


	<td></td>
      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" name="btnAdd"   /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
	

</tr>
</table>
</body>
</html>
