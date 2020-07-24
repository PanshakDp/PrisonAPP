<?php

// Database Connection

include "config.php";



	
// Fetch Record from Database

$output			= "";
$table 			= "registration"; // Enter Your Table Name
$sql 			= mysqli_query($conn,"SELECT * FROM $table");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
	$heading	=	mysqli_field_name($sql, $i);
	$output		.= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename =  "prisoner_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>
