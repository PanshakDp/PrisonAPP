<html>
<head>
  <title>Delete Court </title>
  	
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='1100' cellpadding='8' cellspacing='0' height='200'>
         
         
          <tr>
            <td colspan="3" bgcolor='grey' valign='center'>
            	<?php

include 'config.php';




?>

<?php 

	 




//To delete:
if(isset($_POST['delete'])){

$id=$_GET['id'];

$delete="DELETE FROM officerdetails WHERE id='$id'";

$result=mysqli_query($conn,$delete);

if($result){
print "<script language='javascript'>
	alert('Officer Successfully deleted!...')
	location.href='viewoff.php'
	</script>";
}
else{
print "<script language='javascript'>
	alert('Not deleted!...')
	location.href='viewoff.php'
	</script>";
}
}


if(isset($_POST['cancel'])){
	print "<script language='javascript'>
	alert('officer not deleted.')
	location.href='viewoff.php'
	</script>";

}


 ?>





<?php

print "<table width='100%' border='0' cellpadding='' cellspacing='' bgcolor='green'>
<caption><b>DELETE OFFICER DETAILS</b></caption>
<tr bgcolor='green'>

<th >National id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Address/station</th>
<th width='10%'>Date of birth</th>
<th width='10%'>Gender</th>
<th width='15%'>Telephone Number</th>
<th width='10%'>Qualification</th>
<th width='10%'>Experience</th>

</tr>";

$id=$_GET['id'];

$sql="SELECT * FROM officerdetails WHERE id='$id'  ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) >0 ){

 while($row=mysqli_fetch_assoc($result))
{
print "<form method='post' action='deleteofficer.php?id=$id'>";

print "<tr bgcolor='grey'>


<td width='3%'>".$row['id']."</td>
<td width='7%'>".$row['fullname']."</td>
<td width='7%'>". $row['address']."</td>
<td width='7%'>". $row['dateofbirth']."</td>

<td width='7%'> ".$row['gender']."</td>
<td width='7%'> ".$row['telephone']."</td>
<td width='7%'> ".$row['education']."</td>
<td width='7%'> ".$row['experience']."</td>

</tr>";
print "</form>";
$i++;
}
}
print "</table>";
echo "<p style='color:red'>Are you sure you want to delete officer??</p>
<form method='post'><input type=  'submit' name='delete' style='color:red' value='Yes'><input type='submit' name='cancel' value='No' style='color:green'></td></form>
";
?>


<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Back to Admin <b>|</b></a>
			<a href="viewoff.php" target="_parent">View officer<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='green' height='1'>
					&copy; 2018 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					NIGERIA PRISONS SERVICE
            </td>
          </tr>
	</table>
</body>
</head>
</html>


