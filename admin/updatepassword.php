<?php 

include('config.php');

if (isset($_POST['update']))
{
//use this one from form
$password = mysqli_real_escape_string($conn,$_POST['password']);
$newpass=mysqli_real_escape_string($conn,$_POST['newpassword']);
$comfirmpass = mysqli_real_escape_string($conn,$_POST['cpassword']);


if(empty($password) || empty($newpass) || empty($comfirmpass)){
    echo "<script language='javascript'>
	alert('All fields required')
	
	</script>";

}elseif($newpass==$comfirmpass && strlen($newpass)>=4){
   

    $sql="SELECT Admin_Password FROM admin_tbl WHERE Admin_Password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $update="UPDATE admin_tbl SET Admin_Password='$newpass' WHERE Admin_Password='$password'";
        $result2=mysqli_query($conn,$update);
        if($result2){
            echo "<script language='javascript'>
	alert('Password Updated successfully')

	</script>";
        }else{
            echo "<script language='javascript'>
	alert('password Not updated')
	
	</script>".mysqli_error($conn);
        }
    }
    else{
        echo "<script language='javascript'>
	alert('Wrong Old password!')

	</script>";
    }
}else{
    echo "<script language='javascript'>
	alert('Make sure they match! And can not be less than 4')

	</script>";
}

}







 ?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>UPDATE ADMIN PASSWORD</title>
</head>
<body bgcolor="#006600">

<form action="updatepassword.php" method="post">



<table border="3" align="center" bgcolor="#CCCCCC" style="margin-top: 150px">
<tr>
<td colspan="2" align="center"><b><font color='green'>UPDATE ADMIN PASSWORD </font></b><br><b style="color: red">

</b>
</td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>Old Password<em>*</em></font></b></td>
    
<td><label>
<input type="password" name="password" value=""  />
</label></td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>New Password<em>*</em></font></b></td>
<td><label>
<input type="password" name="newpassword" value="" />
</label></td>
</tr>

<tr>
	<td width="179"><b><font color='#663300'>Comfirm New Password<em>*</em></font></b></td>
<td><label>
<input type="password" name="cpassword" value="" />
</label></td>
</tr>


<tr align="center">
<td><label>
<input type="submit" name="update" value="Update">
</label></td>
<td align="center"><a href='adminpanel.php'><input type="button" name="" value="Back"></a></td>
</tr>
</table>
</form>
</body>
</html>



