<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>

<link rel="stylesheet" media="screen" href="login.css" >
<body>
	<table align='center' border='0' bgcolor='green' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>



<?php
include '../include/config.php';
//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.<a href='search-form.php'>click</a>";
	exit();
}



//connecting to server and creating link to database


//MYSQL search statement
//$query ="SELECT * FROM visitor WHERE id LIKE '%$searchTerm%'";
$query ="SELECT * FROM registration WHERE Full_Name LIKE '%$searchTerm%' OR id LIKE '%$searchTerm%'";

$results = mysqli_query($conn, $query);


/* check whethere there were matching records in the table
by counting the number of results returned */


if(mysqli_num_rows($results) >0)

{
	
	echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>INMATE INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>Unique Number</th>
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
	while($row = mysqli_fetch_array($results))
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
echo  "<td width='3%'>".$row ['Gender']."</td>";
echo  "<td width='7%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";
echo  "<td width='10%'>".$row ['Sentence']. "</td>";


echo  "<td width='10%'>".$row ['prison']."</td>";
echo "<td><img width='60px' height='80px'src='../images/".$row['picture']."'></td> ";
echo '<td width="3%"><b><a href="updateprisoner.php?id=' . $row['id'] . ' " style="color:green">Edit</a></font></b></td>';
echo '<td width="3%"><b><a href="dischargeprisoners.php?id=' . $row['id'] . ' " style="color:blue">Discharge</a></font></b></td>';
echo '<td width="3%"><b><a href="deleteprisoners.php?id=' . $row['id'] . ' " style="color:red">Delete</a></font></b></td>';



echo "</tr>";

}
echo"</table>";
}



else{

	echo'<body bgcolor="Green">';
	
	echo "<br/>";
	echo'</center>';
	echo'</body>';
	 echo "<font size='5'style= 'color:green'>"."No such name, "."Click" . "<a href='search-form.php'>"."  ". "here."  . "</a>"  . "  " . "Make sure there is an inmate Named "."<b style='color:red'>".$searchTerm."<b></font>";
	}
?>
<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Officer Pannel  <b>|</b></a>
			
			<a href="index.php" target="_parent">Log out</a></td>
		
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