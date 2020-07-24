


<?php
include 'config.php'; 
//use this one from form
$Fid = mysqli_real_escape_string($conn,$_POST['Nid']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$state = mysqli_real_escape_string($conn,$_POST['state']);
$lga = mysqli_real_escape_string($conn,$_POST['lga']);

$address = mysqli_real_escape_string($conn,$_POST['address']);

$telephone = mysqli_real_escape_string($conn,$_POST['telephone']);
$education = mysqli_real_escape_string($conn,$_POST['education']);
$experience = mysqli_real_escape_string($conn,$_POST['experience']);


//use this from database 
if (isset($_POST['update']))
{
$id=$_GET["id"];
// use code update db
$sql="UPDATE officerdetails SET fullname='$name',
                                state='$state',
                                lga='$lga',
                                address='$address',
                                telephone='$telephone',
                                education='$education',
                                experience='$experience'
                                WHERE id='$Fid'";
$result=mysqli_query($conn,$sql);

if($result){

echo "<script language='javascript'>
	alert('Successfully Updated!...')
	location.href='viewoff.php'
	</script>";
}
else{
	$error= "Error updating".mysqli_error($conn);
}
}


// isset ends





 ?>

<?php 

include('config.php');

$id=$_GET["id"];

$sql="SELECT * FROM officerdetails WHERE id= '$id'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) >0 ){
  while($row=mysqli_fetch_assoc($result)){

    $id=$row['id'];
    $name=$row['fullname'];
    $state=$row['state'];
    $lga=$row['lga'];
    $address=$row['address'];
    $telephone=$row['telephone'];
    $education=$row['education'];
    $experience=$row['experience'];
    
  }
}
?>

<!DOCTYPE HTML >
<html>
<head>
<title>Edit Records</title>
</head>
<body bgcolor="#006600">

<form action="editofficer.php" method="post">



<table border="1" align="center" bgcolor="#CCCCCC" style="margin-top: 100px">
<tr>
<td colspan="2" align="center"><b><font color='green'>EDIT OFFICERS'  RECORD </font></b><br><b style="color: red">
<?php echo $error; ?>
</b>
</td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>ID NO<em>*</em></font></b></td>
<td><label>
<input type="text" name="Nid" value="<?php echo $id; ?>" readonly />
</label></td>
</tr>
<tr>
	<td width="179"><b><font color='#663300'>Full Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="name" value="<?php echo $name; ?>" required />
</label></td>
</tr>

<tr>
	<td width="179"><b><font color='#663300'>State<em>*</em></font></b></td>
<td><label>
<select name="state" style="width: 190px;">
  <?php

 include 'config.php';

                       
         $sql="SELECT * FROM states";

           $result=mysqli_query($conn,$sql);

             if(mysqli_num_rows($result)>0){

              while($row=mysqli_fetch_assoc($result)){
               echo "<option>".$row['name']."</option>";
                        }
                       }

                      ?>
 


</select>
</tr>

<tr>
	<td width="179"><b><font color='#663300'>Local Government<em>*</em></font></b></td>
<td><label>
<input type="text" name="lga" value="<?php echo $lga; ?>"  />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Station/Prison<em>*</em></font></b></td>
<td><label>
<select name="address" style="width: 190px;">
	<?php

 include 'config.php';

                       
         $sql="SELECT * FROM newprison";

           $result=mysqli_query($conn,$sql);

             if(mysqli_num_rows($result)>0){

              while($row=mysqli_fetch_assoc($result)){
               echo "<option>".$row['pname']. ", ".$row['state']. ", ".$row['lga']."</option>";
                        }
                       }

                      ?>
 


</select>
</label></td>
</tr>



<tr>
<td width="179"><b><font color='#663300'>Telephone<em>*</em></font></b></td>
<td><label>
<input type="text" name="telephone" value="<?php echo $telephone ?>" required />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Qualification<em>*</em></font></b></td>
<td><label>
<select name="education" style="width: 190px;" required="">
	<?php

 include 'config.php';

                       
         $sql="SELECT * FROM education";

           $result=mysqli_query($conn,$sql);

             if(mysqli_num_rows($result)>0){

              while($row=mysqli_fetch_assoc($result)){
               echo "<option>".$row['qualification']."</option>";
                        }
                       }

                      ?>
 


	 
 


</select>
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Experience<em>*</em></font></b></td>
<td><label>
<select name="experience" style="width: 190px;" required="">
	<?php

 include 'config.php';

                       
         $sql="SELECT * FROM experience";

           $result=mysqli_query($conn,$sql);

             if(mysqli_num_rows($result)>0){

              while($row=mysqli_fetch_assoc($result)){
               echo "<option>".$row['year']."</option>";
                        }
                       }

                      ?>

</select>
</label></td>
</tr>

<tr align="center">
<td><label>
<input type="submit" name="update" value="Update">
</label></td>
<td align="center"><a href='viewoff.php'><input type="button" name="" value="Back"></a></td>
</tr>
</table>
</form>
</body>
</html>



