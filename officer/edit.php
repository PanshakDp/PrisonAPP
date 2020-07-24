<?php
include '../include/config.php';
//use this from table
$Nid=mysqli_real_escape_string($conn,$_POST['Nid']);
$From_prison=mysqli_real_escape_string($conn,$_POST['From']);
$To_prison=mysqli_real_escape_string($conn,$_POST['To']);
$dateoftransfer=mysqli_real_escape_string($conn,$_POST['dateoftransfer']);

if(isset($_POST["submit"])){

$id=$_GET["id"];

$update=mysqli_query($conn,"UPDATE Transfer_inmate SET From_prison='$From_prison', To_prison='$To_prison', Dateoftransfer='$dateoftransfer' WHERE National_id='$Nid'");
if($update){

  header("location:viewtransfer.php");
  
}
else{
echo "Error!".mysqli_error($conn);
}
}






$id=$_GET['id'];
// query the db
$result=mysqli_query($conn,"SELECT * FROM Transfer_inmate WHERE National_id='$id'");


if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){


$dbid=$row['National_id'];

$From=$row['From_prison'];
$To=$row['To_prison'];
$date=$row['Dateoftransfer'];

}

}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Edit Records</title>
</head>
<body bgcolor="#006600">


<form action="edit.php" method="post">
<input type="hidden" name="Nid" value="<?php echo $id; ?>"/>

<table border="1" align="center" bgcolor="#CCCCCC">
<tr>
<td colspan="2" align="center"><b><font color='green'>EDIT TRANSFER  RECORDS </font></b></td>
</tr>


<tr>
<td><b> Id No </b> </td>
<td>
    <input type="text"  name="Nid"  style="width: 157px;" value="<?php echo $dbid; ?>"/>
   
             
                   
</td>
</tr>


<tr><td><b>From Prison </b> </td>
<td><select name="From" style="width: 175px;" value='<?php echo $FROM; ?>'>
    <option value="">--Select prison--</option>
    >
                  <?php
                   include '../include/config.php'; 
                   $msql =" SELECT * FROM newprison ";

                   $result=mysqli_query($conn,$msql);

                   if(mysqli_num_rows($result) >0 ){

                    while($m_row = mysqli_fetch_assoc($result)) {       
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                      
                  }
                } ?>
                   
</select></td></tr>
	<tr><td><b>To prison </b> </td>
<td><select name="To"  style="width: 175px;" value='<?php $TO; ?>'>
    <option value="">--Select prison--</option>
    >                
                  <?php
                  include '../include/config.php'; 

                   $msql =" SELECT * FROM newprison ";

                   $result=mysqli_query($conn,$msql);

                   if(mysqli_num_rows($result) >0 ){

                    while($m_row = mysqli_fetch_assoc($result)) {       
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                      
                  }
                } ?>
                   
</select></td></tr><td><b>Date of transfer<b></td>

			<td><input type="date" name="dateoftransfer" style="width: 158px;" value= "<?php echo $date; ?>"></td>
</tr>
        
<!-- <tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" /></td>
</tr>
 -->
  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="update" name="submit" /></td>
  <td height="26" bgcolor="#FFFFFF" align="center"><a href="viewtransfer.php"><input type="button" value="Back" /></a></td>
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

