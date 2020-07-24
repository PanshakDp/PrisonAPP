<?php 
include 'include/config.php';

if(isset($_POST['add'])){
	
	$Users=mysqli_real_escape_string($conn,$_POST['Users']);
	$Station_name=mysqli_real_escape_string($conn,$_POST['stname']);
	$Pass=mysqli_real_escape_string($conn,$_POST['password']);
	$Confirm_pass=mysqli_real_escape_string($conn,$_POST['cpassword']);

	if(empty($Station_name) || empty($Users) || empty($Pass) || empty($Confirm_pass)){

		echo "<script>alert('All fields required.')</script>";

	}
  

	if($Users=='Admin' ){
		if($Pass===$Confirm_pass){
			$result=mysqli_query($conn,"INSERT INTO admin_tbl (Admin_Name, Admin_Password) VALUES ('$Users','$Pass')");
			if($result){
				echo "<script>alert('Registered successfully. You can now log in.');
				window.location='index.php';
				</script>";
				
			}
			else{
				echo "Error inserting Admin ".mysqli_error($conn);
			}
		}
		else{
		echo "<script>alert('Passwords do not match.')</script>";
}
	}
		


		if($Users=='Officer'){
             if($Pass===$Confirm_pass){
			$result=mysqli_query($conn,"INSERT INTO police_tbl (Station_Name, UserName,Password) VALUES ('$Station_name','$Users','$Pass')");
			if($result){
				echo "<script>alert('Registered successfully. You can now log in.');
				window.location='index.php';
				</script>";
				
		}else{
			echo "Error inserting Officer" .mysqli_error($conn);
		}

	}else{
echo "<script>alert('Passwords do not match.')</script>";
	}
 }

	if($Users=='User'){
		if($Pass===$Confirm_pass){
		$result=mysqli_query($conn,"INSERT INTO user (Station_Name,UserName,Password) VALUES ('$Station_name','$Users','$Pass')");
			if($result){
				echo "<script>alert('Registered successfully. You can now log in.');
				window.location='index.php';
				</script>";
				
				
	}else{
		echo "Error inserting user " .mysqli_error($conn);
	}


	
}else{
	echo "<script>alert('Passwords do not match.')</script>";
}				
				
			
}

} 



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>ADD DETAILS</title>
</head>
<body bgcolor="#006600">

<form action="addlogging.php" method="post">



<table border="3" align="center" bgcolor="#CCCCCC" style="margin-top: 150px">
<tr>
<td colspan="2" align="center"><b><font color='green'> ADD LOGGING DETAILS. </font></b><br><b style="color: red">

</b>
</td>
</tr>

<tr>
	<td width="179"><b><font color='#663300'>Station Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="stname" value="" />
</label></td>
</tr>

<tr>
	<td width="179"><b><font color='#663300'>Select User<em>*</em></font></b></td>
<td><label>
<select name="Users" style="width: 190px;">
	<option>Admin</option>
	<option>Officer</option>
	<option>User</option>
</select>
</label></td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>Password<em>*</em></font></b></td>
<td><label>
<input type="password" name="password" value="" />
</label></td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>Confirm Password<em>*</em></font></b></td>
<td><label>
<input type="password" name="cpassword" value="" />
</label></td>
</tr>


<tr align="center">
<td><label>
<input type="submit" name="add" value="Add">
</label></td>

</tr>
</table>
</form>
</body>
</html>
