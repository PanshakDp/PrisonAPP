

<?php

// Database Connection

include 'config.php';





	


	
// Fetch Record from Database

$output			= "";
$table 			= "court"; // Enter Your Table Name
$sql 			= mysqli_query("select * from $table",$conn);


// Get The Field Name




while ($row = mysqli_fetch_assoc($sql)) {

fputcsv($output,$row) ;

}
fclose($output);
}

// Download the file

$filename =  "court report.csv";
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
$output=fopen("php://output","w");

echo $output;
exit;
	
?>


       
       