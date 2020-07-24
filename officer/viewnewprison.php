<html>
<head>
  <title>View new  prison </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';

$sel= "SELECT * FROM newprison ORDER BY pname ";
echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>NEW PRISON(S) INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>Prison Nunber</th>
<th width='3%'>Prison Name</th>
<th width='10%'>State</th>
<th width='15%'>Local Government</th>
<th width='10%'>Contact</th>
<th width='10%'>Capacity</th>



</tr>";
  $result=mysqli_query($conn,$sel);
  if(mysqli_num_rows($result))
   while($row=mysqli_fetch_assoc ($result))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['pno']."</td>";
echo  "<td width='7%'>".$row ['pname']."</td>";
echo  "<td width='10%'>".$row ['state']."</td>";
echo  "<td width='10%'>".$row ['lga']. "</td>";
echo  "<td width='10%'>".$row ['contact']. "</td>";
echo  "<td width='3%'>" .$row ['capacity']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Officer Pannel <b>|</b></a>
     <!--  <a href="newprisonrep.php" target="_parent">Report <b>|</b></a> -->
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