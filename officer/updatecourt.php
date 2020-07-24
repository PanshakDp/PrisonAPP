<?php
include '../include/config.php';
//use this from table
$Nid=mysqli_real_escape_string($conn,$_POST['Nid']);

$judge=mysqli_real_escape_string($conn,$_POST['judge']);

$dateoftrial=mysqli_real_escape_string($conn,$_POST['dateoftrial']);
$sentence=mysqli_real_escape_string($conn,$_POST['sentence']);
$court=mysqli_real_escape_string($conn,$_POST['court']);

if(isset($_POST["submit"])){

$id=$_GET["id"];

$update=mysqli_query($conn,"UPDATE court SET Judge='$judge', Dateoftrial='$dateoftrial', Sentence='$sentence', court_name='$court' WHERE National_id='$Nid'");
if($update){
  echo "<script>alert ('Updated successfully.')
  location.href='viewcourt.php'</script>";
  
  
}
else{
echo "Error!".mysqli_error($conn);
}
}

?>

<?php 


$id=$_GET['id'];
// query the db
$result=mysqli_query($conn,"SELECT * FROM court,registration WHERE National_id='$id'");


if(mysqli_num_rows($result)>0){
	
while($row=mysqli_fetch_assoc($result)){


$dbid=$row['National_id'];

$File_num=$row['File_num'];
$judge=$row['Judge'];
$date=$row['Dateoftrial'];
$court=$row['court_name'];
$sentence=$row['Sentence'];
 
}

}else{
	echo "Error".mysqli_error($conn);
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Edit Records</title>
</head>
<body bgcolor="#006600">


<form method="POST">
<input type="hidden" name="Nid" value="<?php echo $id; ?>"/>

<table border="1" align="center" bgcolor="#CCCCCC">
<tr>
<td colspan="2" align="center"><b><font color='green'>EDIT COURT RECORDS </font></b></td>
</tr>


<tr>
<td><b> National ID: </b> </td>	
<td>
    <input type="text"  name="Nid"  style="width: 157px;" value="<?php echo $dbid; ?>"/>
   
             
                   
</td>
</tr>



	<tr><td><b>Judge Name </b> </td>
<td><input type="text" name="judge" value="<?php echo $judge;  ?>" style="width: 158px;"></td></tr><td><b>Date of Trial<b></td>

			<td><input type="date" name="dateoftrial" style="width: 158px;" value= "<?php echo $date; ?>"></td>
</tr>
        
<tr><td><b>Sentence </b> </td>
<td><input type="text" name="sentence" value="<?php echo $sentence; ?>" style="width: 158px;"></td>
<tr><td><b>Court Name</b></td>

<td><input name="text"  value="<?php echo $court; ?>" name="court" style="width: 158px;"></td>

</tr>
  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="update" name="submit" /></td>
  <td height="26" bgcolor="#FFFFFF" align="center"><a href="viewcourt.php"><input type="button" value="Back" /></a></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>
<tr>
	 

</tr>
</table>
</body>
</html>

