<html>
<head>
  <title>View transfer record  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';

$tbl_name="Transfer_inmate";


$sel= mysqli_query($conn,"SELECT * FROM $tbl_name");
if(mysqli_num_rows($sel)>0){

echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>INMATE TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>Unique No:</th>
<th width='15%'>Full Name</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

   while($row=mysqli_fetch_assoc ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='3%'>".$row ['Full_Name']."</td>";
echo  "<td width='7%'>".$row ['From_prison']."</td>";
echo  "<td width='10%'>".$row ['To_prison']."</td>";
echo  "<td width='10%'>".$row ['Dateoftransfer']. "</td>";
echo '<td width="3%"><b><a href="edit.php?id=' . $row['National_id'] . '" style="color:green">Edit</a></font></b></td>';
echo '<td width="3%"><b><a href="deletetransfer.php?id=' . $row['National_id'] . '" style="color:red">Delete</a></font></b></td>';


echo "</tr>";
}
echo"</table>";
}


?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Officer Panel <b>|</b></a>
			
			<a href="../index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'><?php
           include("Footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>