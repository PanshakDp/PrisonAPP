
<html>
<head>
  <title>View visitors </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';

$sel= "SELECT * FROM visitor,visit WHERE visitor.id=visit.id ORDER BY fullname";

   $result=mysqli_query($conn,$sel);
   if(mysqli_num_rows($result)>0){
    echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>VISITORS INFORMATION.</h3></caption>
<tr bgcolor='green'>
<th width='3%'>National id</th>
<th width='10%'>Visitor's Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of visit</th>
<th width='10%'>Time in</th>
<th width='10%'>Time out</th>
<th width='10%'>Relationship</th>
<th width='10%'>Telephone</th>
<th width='3%'>Inmate Name</th>

</tr>";
   while($row=mysqli_fetch_assoc ($result))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofvisit']. "</td>";
echo  "<td width='10%'>".$row ['timein']. "</td>";
echo  "<td width='10%'>".$row ['timeout']. "</td>";
echo  "<td width='10%'>".$row ['relationship']."</td>";
echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['prisoner']."</td>";
echo '<td width="3%"><b><a href="edit_visitor.php?id='.$row['id']. '" style="color:green">Edit</a></font></b></td>';
echo '<td width="3%"><b><a href="deletevisitor.php?id='.$row['id']. '" style="color:red">Delete</a></font></b></td>';


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
			<td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Officer Pannel <b>|</b></a>
     <!--  <a href="visitorep.php" target="_parent">Report <b>|</b></a> -->
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