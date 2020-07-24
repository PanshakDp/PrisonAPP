<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>

<link rel="stylesheet" media="screen" href="login.css" >
<body>
	<table align='center' border='0' bgcolor='green' width='1000' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>
<?php
//database connection info
include "../include/config.php";
//capture search term and remove spaces at its both ends if there is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.<a href='search-form.php'>click</a>";
	exit();
}



//MYSQL search statement
$query ="SELECT * FROM transfer WHERE Full_Name LIKE '%$searchTerm%'";

$results = mysqli_query($conn, $query);

/* check whether there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >0)
{
	echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>INMATE TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>Id No</th>
<th width='3%'>From Prison</th>
<th width='3%'>To prison</th>
<th width='3%'>Date of Transfer</th>

	</tr>";
	while($row = mysqli_fetch_array($results))
	{
		echo "<tr bgcolor='grey'>";
		echo "<td width='3'>".$row['National_id']."</td>";
		echo "<td width='3'>".$row['From_prison']."</td>";
		echo "<td width='3'>".$row['To_prison']."</td>";
		echo "<td width='10'>".$row['Dateoftransfer']."</td>";
	    echo '<td width="3%"><b><a href="deletetransfer.php?id='.$row['National_id']. '" style="color:red">Delete</a></font></b></td>';

		echo "</tr>";

	}
	echo "</table>";
}
else{

	echo'<body bgcolor="Green">';
	
	echo "<br/>";
	echo'</center>';
	echo'</body>';
	 echo "<font size='5'style= 'color:green'>"."No such name, "."Click" . "<a href='search-form.php'>"."  ". "here"  . "</a>"  . "  " . "to search again the Name "."<b style='color:red'>".$searchTerm."<b></font>";
	}
	
?>
<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Panel Admin <b>|</b></a>
			
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