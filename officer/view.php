<html>
<head>
  <title>PRIOSONER DETAILS  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1000' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';
$tbl_name="registration";

$id=$_GET['id'];

$sel= mysqli_query($conn,"SELECT  * FROM $tbl_name WHERE id='$id' ");
if(mysqli_num_rows($sel)>0){
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>INMATE(S) INFORMATION</h3></caption>
<tr bgcolor='green  '>
<th width='3%'>Unique No.</th>
<th width='3%'>File Number</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='10%'>Date In</th>

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

   while($row=mysqli_fetch_assoc ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='3%'>".$row ['File_num']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='5%'>".$row ['DOB']."</td>";
echo  "<td width='5%'>".$row ['datein']."</td>";

echo  "<td width='7%'>".$row ['Address']. "</td>";
echo  "<td width='5%'>".$row ['state']."</td>";
echo  "<td width='5%'>".$row ['lga']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='7%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";
echo  "<td width='10%'>".$row ['Sentence']. "</td>";


echo  "<td width='10%'>".$row ['prison']."</td>";
echo "<td><img width='60px' height='80px'src='../images/".$row['picture']."'></td> ";


echo "</tr>";
}
echo"</table>";
}else{
  echo "No inmates for now!";
}
?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Officer Admin <b>|</b></a>
			
			<a href="../index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
              <?php
           include("Footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>