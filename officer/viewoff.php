
<html>
<head>
  <title>View officers </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php
 include '../include/config.php';

$tbl_name="officerdetails";



$sel= "SELECT * FROM $tbl_name ORDER BY fullname ";

   $result=mysqli_query($conn,$sel);

   if(mysqli_num_rows($result)>0){

    echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>OFFICERS INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>State</th>
<th width='15%'>Local Government</th>
<th width='15%'>Address</th>
<th width='10%'>Date of birth</th>
<th width='10%'>Gender</th>

<th width='10%'>Telephone</th>

<th width='10%'>Education</th>
<th width='10%'>Experience</th>


</tr>";
   while($row=mysqli_fetch_assoc ($result))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='7%'>".$row ['state']."</td>";
echo  "<td width='7%'>".$row ['lga']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofbirth']. "</td>";
echo  "<td width='10%'>".$row ['gender']. "</td>";

echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['education']."</td>";
echo  "<td width='10%'>".$row ['experience']."</td>";
// echo '<td width="3%"><b><a href="deleteofficer.php?id='.$row['id']. '" style="color:red">Delete</a></font></b></td>';
// echo '<td width="3%"><b><a href="editofficer.php?id='.$row['id']. '" style="color:blue">Edit</a></font></b></td>';



echo "</tr>";

}
echo"</table>";
}
else{

  echo'<body bgcolor="Green">';
  
  echo "<br/>";
  echo'</center>';
  echo'</body>';
   echo "<font size='5'style= 'color:red'>"."No information ";
  }


?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Admin Panel <b>|</b></a>
      <a href="../admin/officereport.php" target="_parent">Report <b>|</b></a>
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