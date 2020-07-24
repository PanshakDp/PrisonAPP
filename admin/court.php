<?php 
if(isset($_POST['signup'])){
include 'config.php';
$Nationalid= mysqli_real_escape_string($conn,$_POST['Nationalid']);
$Filenum=mysqli_real_escape_string($conn,$_POST['Filenum']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($conn,$_POST['month']);
 $day= mysqli_real_escape_string($conn,$_POST['day']);
 $year= mysqli_real_escape_string($conn,$_POST['year']);
$dateoftrial=$year.'/'.$month.'/'.$day;
$sentence= mysqli_real_escape_string($conn,$_POST['sentence']);
$location=mysqli_real_escape_string($conn,$_POST['location']);
$judge=mysqli_real_escape_string($conn,$_POST['judge']);
 

 $sql = "INSERT INTO court (National_id,name,  Dateoftrial, Sentence, Location, Judge) 
VALUES ('$Nationalid','$name',  '$dateoftrial', '$sentence', '$location', '$judge');";




if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}
else{
echo '<script type="text/javascript">
						alert("you have succefully added the court verdict, !thank you")
						
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
<a href="adminpanel.php">HOME</a> | 
<a href="transfer.php">TRANSFER</a> 
</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">COURT VERDICT FORM</h2>
<form action="court.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nationalid" size=8  required placeholder="99999"/></td>
</tr>

<tr> 
<td bgcolor="#FFFFFF"><b>Inmate Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="name" required="" /></td>
</tr>
	<tr><td><label for="on"><b>Date Of Trial:</b></label>
		      	<td><select name="month" required>
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
				</select></td>
				<td>
				<input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/></td>
				
		      	<td><select name="year" required>
				<option selected="selected" value="01">2014</option>
				<option value="02">2015</option>
                <option value="02">2016</option>
                <option value="02">2017</option>
                <option value="02">2018</option>
                <option value="02">2019</option>
                <option value="02">2020</option>
			</td>
				
				</select>
			</td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Sentence:</b></td>
        <td> <select name="sentence">
		 <option>2 Weeks</option>
        <option>1 to 3 Months</option>
		<option>1year</option>
		<option>5 to 1o Years</option>
        <option>15 Above</option>
		<option>Life Sentence</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Court Location:</b></td>
        <td> <select name="location">
		 <option>High court</option>
        <option>Sharia court</option>
		<option>Appeal court</option>
		<option>Magistrate court</option>
        <option>Supreme court</option>
		<option>Area Court</option></td></tr>
		<tr>
<td bgcolor="#FFFFFF"><b>Judge Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="judge" required placeholder="Jury President" size=25 maxlength=25 ></td>
</tr>

      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" name="signup" /></td>
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