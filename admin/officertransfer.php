<?php


include 'config.php';

if (isset($_POST['signup'])) {
	

$Nid=$_POST['Nid'];
$name=$_POST['name'];
$Phone=$_POST['Phone'];
$From=$_POST['From'];
$To=$_POST['To'];
$dot=$_POST['dot'];

$sql="INSERT INTO officer(National_id,Fullname,Telephone,From_prison,To_prison,Dateoftransfer)VALUES('$Nid','$name','$Phone','$From','$To','$dot')";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo "could not enter data".mysqli_error($conn);
}else{
	echo "<script>alert('Officer successfully transferred')</script>";
}



}

?>
				

<html>
<head>
<title> Officer Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="45%" height="81" border="1" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="green">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<td border="0" style="margin-top:0px;" align="center" id="container" height="5" bgcolor="#FFFFFF"><tr>
<td>
<form action="officertransfer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>identification Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" required placeholder="" /></td>
<td><span class="required_notification"> Required</span></td>
<tr>
	<td width="34%" bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="name" required placeholder="" /></td>
<td><span class="required_notification"> Required</span></td>
</tr>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Telephone Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Phone" size=12  required placeholder="" style="width: 188px;" /></td>
	<td><span class="required_notification"> Required</span></td>
	
</tr>

<tr><td><b>From Prison </b> </td>
<td><select name="From"  style="width: 188px;">
    <option value="">--Select prison--</option>
    >
                  <?php $msql =" SELECT * FROM newprison ";

                   $result=mysqli_query($conn,$msql);

                   if(mysqli_num_rows($result) >0 ){

                    while($m_row = mysqli_fetch_assoc($result)) {       
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                      
                  }
                } ?>
                   
</select></td></tr>
	<tr><td><b>To prison </b> </td>
<td><select name="To"  style="width: 188px;">
    <option value="">--Select prison--</option>
    >
                  <?php $msql =" SELECT * FROM newprison ";

                   $result=mysqli_query($conn,$msql);

                   if(mysqli_num_rows($result) >0 ){

                    while($m_row = mysqli_fetch_assoc($result)) {       
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                      
                  }
                } ?>
                   
</select></td></tr>
        
<tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot"    placeholder="YYYY-MM-DD"  style="width: 188px;"/></td>
<td><span class="required_notification"> Required</span></td>
</tr>

  <td height="26" bgcolor="#FFFFFF" align="center">
  <input type="submit" value="Add" name="signup" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>
<tr>   <?php
           include("Footer.php");
                ?>
          </tr>
</tr>
</table>
</body>
</html>