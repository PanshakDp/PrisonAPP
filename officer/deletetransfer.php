<html>
<head>
  <title>Delete prisoners transfer</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='grey' valign='center'>

<?php
include '../include/config.php';
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM transfer WHERE National_id='$id'");
?>


<?php
//To delete:
if(isset($_POST["delete"])){

$id=$_GET["id"];

$delete=mysqli_query($conn,"DELETE FROM transfer WHERE National_id='$id'");
if($delete){
print "<script language='javascript'>
	alert('Successfully deleted!...')
	location.href='viewtransfer.php'
	</script>";
}
else{
print "<script language='javascript'>
	alert('Not deleted!...')
	location.href='viewtransfer.php'
	</script>";
}
}

if(isset($_POST['cancel'])){
  print "<script language='javascript'>
  alert('Not deleted.')
  location.href='viewtransfer.php'
  </script>";

}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><b>DELETE TRANSFER </b></caption>
<tr bgcolor='grey'>

<th width='3%'>id No</th>
<th width='10%'>Full Name</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>


</tr>";
$i=1;
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
print "<form method='POST' action='deletetransfer.php?=$id'>";
print"<tr bgcolor='grey'>
<td>".$row['National_id']."</td>
<td>".$row['Full_Name']."</td>
<td>".$row['From_prison']."</td>
<td>".$row['To_prison']."</td>
<td>".$row['Dateoftransfer']."</td>


</tr>";
print "</form>";
$i++;
}
}
print"</table>";
echo "<p style='color:red'>Are you sure you want to delete transfer??</p>
<form method='post'><input type=  'submit' name='delete' style='color:red' value='Yes'><input type='submit' name='cancel' value='No' style='color:green'></td></form>
";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="viewtransfer.php" target="_parent">View Transfer<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>
            	<?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>

