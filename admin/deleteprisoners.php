<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php

include 'config.php';


//To delete:
if(isset($_POST["delete"])){

$ID=$_GET["id"];
$sql="DELETE FROM registration WHERE id='$ID'";

$delete=mysqli_query($conn,$sql);

if($delete){

print "<script language='javascript'>
	alert('Successfully deleted!...')
	location.href='viewprisoners.php'
	</script>";
}

else{

print "<script language='javascript'>
	alert('Not deleted!...')
	location.href='deleteprisoners.php'
	</script>";
}
}
if(isset($_POST['cancel'])){
	print "<script language='javascript'>
	alert('inmate not deleted.')
	location.href='viewprisoners.php'
	</script>";

}

?>



<?php

print "<table width='100%' border='0' cellpadding='10' cellspacing='2' bgcolor='green'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='green'>
<th>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='15%'>Date In</th>
<th width='15%'>Date Out</th>
<th width='15%'>Address</th>
<th width='10%'>State</th>
<th width='10%'>Local Government</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='15%'>Sentence</th>


<th width='10%'>Prison</th>
<th width='10%'>Picture</th>


</tr>";
$ID=$_GET['id'];

$sql="SELECT * FROM registration WHERE id='$ID'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

print "<form method='POST' action='deleteprisoners.php?ID=$ID'>";
print"<tr bgcolor='grey'>

<td>".$row['Full_Name']."</td>
<td>".$row['DOB']."</td>
<td>".$row['datein']."</td>
<td>".$row['dateout']."</td>
<td>".$row['Address']."</td>
<td>".$row['state']."</td>
<td>".$row['lga']."</td>
<td>".$row['Gender']."</td>
<td>".$row['Education']."</td>
<td>".$row['Marital']."</td>
<td>".$row['Offence']."</td>
<td>".$row['Sentence']."</td>


<td>".$row['prison']."</td>


</tr>";
print "</form>";
$i++;
}
}
print"</table>";
echo "<p style='color:red'>Are you sure you want to delete inmate??</p>
<form method='post'><input type=  'submit' name='delete' style='color:red' value='Yes'><input type='submit' name='cancel' value='No' style='color:green'></td></form>
";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="viewprisoners.php" target="_parent">View Prisoners<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>

            	<?php
           include("Footer.php");
                ?>
					
            </td>
          </tr>
	</table>
</body>
</head>
</html>

