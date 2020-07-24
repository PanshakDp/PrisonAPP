<html>
<head>
  <title>STATES </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1000' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';
$tbl_name="discharge";



$sel= mysqli_query($conn,"SELECT DISTINCT  state  FROM $tbl_name ORDER BY state");
if(mysqli_num_rows($sel)>0){
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>STATE(S)</h3></caption>







</tr>";

   while($row=mysqli_fetch_assoc ($sel))
{
echo "<tr bgcolor='grey'>";


echo  "<td width='5%'>".$row ['state']."</td>";


echo '<td width="3%"><b><a href="discharged.php?state=' . $row['state'] . ' " style="color:green">View Inmate(s) discharged</a></font></b></td>';



echo "</tr>";
}
echo"</table>";
}else{
  echo "No discharged inmates for now!";
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