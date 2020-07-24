<?php
include '../include/config.php';
// escape variables for security
$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM registration WHERE id='$id' ");
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $file=$row['File_num'];
    $name=$row['Full_Name'];
    $prison=$row['prison'];
  }

}

if(isset($_POST['submit'])){
$Nid= mysqli_real_escape_string($conn,$_POST['Nid']);
$Filenum=mysqli_real_escape_string($conn,$_POST['Filenum']);
$Fullname=mysqli_real_escape_string($conn,$_POST['Fullname']);

$From= mysqli_real_escape_string($conn,$_POST['From']);
$To=mysqli_real_escape_string($conn,$_POST['To']);
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($conn,$_POST['month']);
 $day= mysqli_real_escape_string($conn,$_POST['day']);
 $year= mysqli_real_escape_string($conn,$_POST['year']);
$dateoftransfer=$year.'/'.$month.'/'.$day;
 
$result1=mysqli_query($conn,"SELECT * FROM Transfer_inmate WHERE National_id='$Nid'");
if(mysqli_num_rows($result1)>0){
  echo "<script >alert(' Transferred Already.') </script>";
}else{


 $sql = "INSERT INTO Transfer_inmate (National_id, File_num,   Full_Name, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid','$Filenum','$Fullname',  '$From', '$To', '$dateoftransfer')";

$result=mysqli_query($conn,$sql);

if(!$result){
	echo "Error".mysqli_error($conn);  
}
else{ 
	echo "<script >alert(' Transferred successfully') </script>";
}

}


}
?>
 


	
<html>
<head>
<title> Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="60%" height="91" border="1" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="green">
<font size="5">
<a href="officerpanel.php">HOME</a> 
 
</font>
</td>
</tr>
<td height="5" bgcolor="#FFFFFF"><tr>
<td>
	<h2 class="bg-primary" align="center">TRANSFER FORM FOR INMATES</h2>
<form action="transfer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">


<tr>
<td><b> Unique Number. </b> </td>
<td><input type="text" name="Nid" value="<?php echo $id ?>" style="width: 175px;" readonly ></td>
</tr>

<tr>

<td><b> File Number. </b> </td>
<td><input type="text" name="Filenum" value="<?php echo $file ?>" style="width: 175px;" readonly ></td>
</tr><tr>
<td><b> Inmate Name. </b> </td>
<td><input type="text" name="Fullname" value="<?php echo $name ?>" style="width: 175px;" readonly ></td>
</tr></td>
</tr>





<tr><td><b>From Prison </b> </td>

<td><input type="text" name="From" value="<?php echo $prison ?>" style="width: 175px;" readonly ></td>
</tr></td></tr>
	<tr><td><b>To prison </b> </td>
<td><select name="To"  style="width: 175px;">
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

			<tr><td><label for="on"><b>Date of Transfer:</b></label>
		      	<td><select name="month" required  style="width: 60px;">
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select>
        <input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/ style="width: 50px;">
        <select name="year" required  style="width: 60px;">
        <option selected="selected" value="01">2014</option>
        <option value="02">2015</option>
        <option value="02">2016</option>
        <option value="02">2017</option>
        <option value="02">2018</option>
        </td>
				
				
		      	
				<!-- di -->
				</select>
			</td>
</tr>
        
<!-- <tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" /></td>
</tr>
 -->
  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" name="submit" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>
<tr>
	 <?php
           include("Footer.php");
                ?>

</tr>
</table>
</body>
</html>