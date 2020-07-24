<html>
<head>
  <title>COURT  INFORMATION  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
  <table align='center' border='1' bgcolor='green' width='1100' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

include '../include/config.php';

$sel= "SELECT * FROM court,registration WHERE court.id=registration.id";


$result=mysqli_query($conn,$sel);

if(mysqli_num_rows($result) >0 ){

echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>COURT DETAIL(S).</h3></caption>
<tr bgcolor='green'>
<th width='3%'>National Id</th>

<th width='10%'>Judge Name</th>

<th width='10%'>Date of Trial</th>

<th width='15%'>Sentence</th>

<th width='10%'>Court Name</th>
<th width='10%'>File Number</th>
<th width='10%'>Inmate Name</th>

<th width='10%'>Inmate Unique Number</th>

</tr>";
   while($row=mysqli_fetch_assoc($result))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";

echo  "<td width='7%'>".$row ['Judge']."</td>";
echo  "<td width='7%'>".$row ['Dateoftrial']."</td>";
echo  "<td width='7%'>".$row ['Sentence']. "</td>";
echo  "<td width='7%'>".$row ['court_name']."</td>";
echo  "<td width='3%'>".$row ['File_num']."</td>";
echo  "<td width='3%'>".$row ['Full_Name']."</td>";
echo  "<td width='3%'>".$row ['id']."</td>";

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
      <td align="center"><a href="adminpanel.php" target="_parent">Admin Panel <b>|</b></a>
    
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