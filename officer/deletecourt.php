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
include '../include/config.php';




?>

<?php 






if(isset($_POST['cancel'])){
	print "<script language='javascript'>
	alert('Verdict not deleted.')
	location.href='viewcourt.php'
	</script>";

}




 ?>


<?php
//To delete:
if(isset($_POST['delete'])){
$id=$_GET['id'];

$delete="DELETE FROM court WHERE National_id='$id'";

$result=mysqli_query($conn,$delete);

if($result){
print "<script language='javascript'>
	alert('Successfully deleted!...')
	location.href='viewcourt.php'
	</script>";
}
else{
print "<script language='javascript'>
	alert('Not deleted!...')
	location.href='deletecourt.php'
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><b>DELETE COURT DETAILS</b></caption>
<tr bgcolor='green'>

<th width='3%'>National id</th>
<th width='10%'>Judge Name</th>
<th width='10%'>Date of Trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Court Name</th>



</tr>";
$id=$_GET['id'];

$sql="SELECT * FROM court WHERE National_id='$id'  ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) >0 ){

 while($row=mysqli_fetch_assoc($result))
{
print "<form method='post' action='deletecourt.php?id=$id'>";
print "<tr bgcolor='grey'>


<td width='3%'>".$row['National_id']."</td>
<td width='7%'>".$row['Judge']."</td>
<td width='7%'> ".$row['Dateoftrial']."</td>
<td width='7%'> ".$row['Sentence']."</td>
<td width='7%'> ".$row['court_name']."</td>






";
print "</form>";
$i++;
}
}
print "</table>";
echo "<p style='color:red'>Are you sure you want to delete the verdict??</p>
<form method='post'><input type=  'submit' name='delete' style='color:red' value='Yes'><input type='submit' name='cancel' value='No' style='color:green'></td></form>
";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Back to Admin <b>|</b></a>
			<a href="viewcourt.php" target="_parent">View court<b>|</b></a>
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


