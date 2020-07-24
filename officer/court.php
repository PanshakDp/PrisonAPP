<?php 
if(isset($_POST['signup'])){
include '../include/config.php';
$id= mysqli_real_escape_string($conn,$_POST['id']);
$name=mysqli_real_escape_string($conn,$_POST['name']);

//deal with date and concatenate variables month, day, year
 $Dateoftrial= mysqli_real_escape_string($conn,$_POST['date']);
 
$sentence= mysqli_real_escape_string($conn,$_POST['sentence']);
$courtname=mysqli_real_escape_string($conn,$_POST['courtname']);
$uniqueid=mysqli_real_escape_string($conn,$_POST['uniqueid']);
 

 $sql = "INSERT INTO court (National_id, Judge, Dateoftrial, Sentence, court_name, id )VALUES ('$id','$name', '$Dateoftrial', '$sentence', '$courtname', '$uniqueid');";




if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}
else{
echo '<script type="text/javascript">
						alert("You have successfully added the court verdict. Thank you.")
						
					</script>';
}

}
 ?>

<html>
<head>
<title>Court form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="green">
<td align="center">
<font size="5">
<a href="officerpanel.php">HOME</a> 

</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">COURT VERDICT FORM</h2>
<form action="court.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
	<tr>
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="80%" bgcolor="#FFFFFF">
	<input type="text" name="id" placeholder="National Id" style="width: 220px;">
</td>
</tr>
	<tr>
<td width="34%" bgcolor="#FFFFFF"><b>Judge Name:</b></td>
<td width="80%" bgcolor="#FFFFFF">
	<input type="text" name="name" placeholder="e.g Justice John" style="width: 220px;" required="">
</td>
</tr>

	<tr>
		<td><label for="on"><b>Date Of Trial:</b></label></td>
		      	<td>

		      <input type="date" name="date" style="width: 220px;">
				
			</td>
				
				
			
</tr>
<tr><td bgcolor="#FFFFFF"><b>Sentence:</b></td>
        <td> <input type="text" name="sentence" placeholder="e.g One Month" style="width: 220px;" required=""></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Court Name:</b></td>
        <td> <select name="courtname" style="width: 220px;" >
		 <option>High court</option>
        <option>Sharia court</option>
		<option>Appeal court</option>
		<option>Magistrate court</option>
        <option>Supreme court</option>
		<option>Area Court</option></td></tr>
		<tr>

</tr>

<tr>
	<td bgcolor="#FFFFFF"><b>Inmate Unique No:</b></td>
	<td>
		<select name="uniqueid" style="width: 220px;" required="">
			<?php
             include '../include/config.php';

			 $result=mysqli_query($conn,"SELECT * FROM registration");

		      if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					echo("<option value = '" . $row['id'] . "'>" . $row['id'] . "</option>");
				}
			}

			 ?>
		</select>
	</td>
</tr>
<tr>
	<td></td>
	 
      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" name="signup"   /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
	 <?php
           include("Footer.php");
                ?>

</tr>
</table>
</body>
</html>