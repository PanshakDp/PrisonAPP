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
include 'config.php';
//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if($searchTerm =="")
{
	echo "Enter name  you are searching for.";
	exit();
}

//database connection info



//MYSQL search statement
$query ="SELECT * FROM visitor WHERE fullname LIKE '%$searchTerm%'";

$results = mysqli_query($conn, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >0)
{
	echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>VISITORS INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Visitor's Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of visit</th>
<th width='10%'>Time of Visit</th>
<th width='10%'>Relationship</th>
<th width='10%'>Telephone</th>
<th width='3%'>Inmate Name</th>

</tr>";
	while($row = mysqli_fetch_assoc($results))
	{
	

		echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofvisit']. "</td>";
echo  "<td width='10%'>".$row ['timein']. "</td>";
echo  "<td width='10%'>".$row ['relationship']."</td>";
echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['prisoner']."</td>";
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
	 echo "<font size='5'style= 'color:green'>"."No such name, "."Click" . "<a href='search-form.php'>"."  ". "here"  . "</a>"  . "  " . "to search again the Name "."<b style='color:red'>".$searchTerm."<b></font>";
	}
?>
<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			
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