



<?php
  

//To discharge
include "../include/config.php";


$ID=$_GET['id'];

$sql="INSERT INTO discharge (id,File_num,Full_Name,DOB,datein,Address,state,lga,Gender,Education,Marital,Offence,Sentence,prison,picture)
SELECT * FROM registration WHERE id='$ID'";

$result=mysqli_query($conn,$sql);
 
$delete="DELETE FROM registration WHERE id='$ID'";

mysqli_query($delete,$conn);


if($result){
	
		print "<script language='javascript'>
			alert('Inmate  discharged successfully.')
			location.href='inmatelocation.php'
			</script>";
	} 


else{
	print "<script language='javascript'>
	alert('Discharged already!...')
	location.href='inmatelocation.php'
	</script>".mysqli_error($conn);	
}

