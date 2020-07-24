<html>
<head>
  <title>Update prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>


<?php

include '../include/config.php';
$Nid= mysqli_real_escape_string($conn,$_POST['Nid']);
$Filenum=mysqli_real_escape_string($conn,$_POST['Filenum']);
$Fname= mysqli_real_escape_string($conn,$_POST['Fname']);

 $dateofbirth = mysqli_real_escape_string($conn,$_POST['dateofbirth']);
 
 $datein =mysqli_real_escape_string($conn,$_POST['datein']);
 

 


$address=mysqli_real_escape_string($conn,$_POST['address']);
$state=mysqli_real_escape_string($conn,$_POST['state']);
$lga=mysqli_real_escape_string($conn,$_POST['lga']);
$Gender=mysqli_real_escape_string($conn,$_POST['Gender']);
$education=mysqli_real_escape_string($conn,$_POST['education']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$offence=mysqli_real_escape_string($conn,$_POST['offence']);


$sentence=mysqli_real_escape_string($conn,$_POST['sentence']);

$prison=mysqli_real_escape_string($conn,$_POST['prison']);

//To update:
if(isset($_POST["Update"])){

$ID=$_GET["id"];
$sql="UPDATE registration SET      File_num='$Filenum',
                                   Full_Name='$Fname',

                                   DOB='$dateofbirth',

                                   datein='$datein',

                                   

                                   Address='$address',

                                   State='$state',

                                   lga='$lga',

                                   Gender='$Gender',

                                   Education='education',

                                   Marital='$status',

                                   Offence='$offence',

                                   Sentence='$sentence',

                                   prison='$prison'

                                   WHERE id='$Nid'
                                   ";

$Update=mysqli_query($conn,$sql);

if($Update){

print "<script language='javascript'>
	alert('Successfully Updated.')
	location.href='inmatelocation.php'
	</script>";
}

else{

print "<script language='javascript'>
	alert('Not Updated!...')
	location.href='inmatelocation.php'
	</script>".mysqli_error($conn);
}
}


?>



<?php


$ID=$_GET['id'];

$sql="SELECT * FROM registration WHERE id='$ID'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){
	$id=$row['id'];
  $Filenum=$row['File_num'];
	$name=$row['Full_Name'];
	$dateofbirth=$row['DOB'];
	$datein=$row['datein'];
	
	$address=$row['Address'];
	$state=$row['state'];
	$lga=$row['lga'];
	$Gender=$row['Gender'];
	$education=$row['Education'];
	$status=$row['Marital'];
	$offence=$row['Offence'];
	$sentence=$row['Sentence'];
	$prison=$row['prison'];



	



$i++;
}
}

?>

<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
    
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
 
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
          
          <tr>
            <td colspan="3" bgcolor="green" height="1" align="center">
	     	   <font size="4">   
           <a href="officerpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="updateprisoner.php" enctype="multipart/form-data">
       <h2 id="hdr_title">Update Inmate </h2>
            <div class="control_input">
            <label for="Nid" class="label">Unique Number</label><input type="text" id="Nid" name="Nid" size=8  maxlength=8 class="reg_fields" value="<?php echo $id; ?>"  readonly />
            </div>
            <div class="control_input">
            <label for="Nid" class="label">File Number</label><input type="text" id="Nid" name="Filenum" size=8  maxlength=8 class="reg_fields"  value="<?php echo $Filenum; ?>" />
            </div>
  
                
            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname"  value="<?php echo $name; ?>" style="margin: 0 0 0 -5px; height: 30px; width: 222px;"/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>

                    <td>
                        <label for="date" class="label">Birth Date</label>
                    </td>
                    <td>
                   <input type="date" id="txtDay" name="dateofbirth" style="margin: 0 0 0 -5px; height: 30px; width: 222px;" value="<?php echo $dateofbirth; ?>"  class=""/>
                        </td>
                    
                    </tr></table>
                </div>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="datein" class="label">Date In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="date" id="txtDay" name="datein" style="margin: 0 0 0 -5px; height: 30px; width: 222px;" value="<?php echo $datein; ?>"  class=""/>
                        </td>
                    </td>
                    
                    </tr></table>
                </div>
            </div>

             
                   

            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address"  value="<?php echo $address; ?>" required  style="margin: 0 0 0 -5px; height: 30px; width: 222px;"/>
            </div>
            
             <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="county" class="label">State</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                       <input type="text" name="state" value="<?php echo $state; ?>" style="margin: 0 0 0 -5px; height: 30px; width: 222px;">
                    </td>
                    </tr>
                </div></br>
                <tr>
                    <td>
                  <label for="opendate" class="label">Local Government</label>
              </td>
              <td>
                 <input type="text" id="lga" name="lga"  size=8    value="<?php echo $lga; ?>" style="margin: 0 0 0 -5px; height: 30px; width: 222px;"/> 
              </td>

                </tr>
                

            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" value="<?php echo $Gender; ?>" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 30px; width: 222px;">
                            <option selected="selected" >Male</option>
                            <option >Female</option>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Education Level</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" value="<?php echo $education; ?>" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 30px; width: 222px;">
                            <option selected="selected" >--select--</option>
                            <option >Never</option>
                            <option >Primary Certificate</option>
                            <option >O level</option>
                            
                            <option >Diploma</option>
                            <option >B.Sc</option>

                            <option >Ph.D</option>
                            <option >Above</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="status" class="label">Maritial Status</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="status" value="<?php echo $status; ?>" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 30px; width: 222px;" required>
                           
                            <option >Divorced</option>
                            <option >Married</option>
                            <option >Single</option>
                            <option >Engaged</option></td></tr>

                    </td>
                    </tr>
                </div></br>
             <tr>
           
                <td><div class="control_input">
                <label for="Pname" class="label">Offence</label>
            </td>
                <td><input type="text" name="offence" style="margin: 0 0 0 -5px; height: 30px; width: 222px;" value="<?php echo $offence; ?>"></td>
                </div>
                </tr>

                 <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Sentence</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                       <input type="text" name="sentence" style="margin: 0 0 0 -5px; height: 30px; width: 222px;" placeholder="e.g One Month" value="<?php echo $sentence ?>">
                    </td>
                    </tr></table>
                </div></br>


            <!-- <div class="control_input">
                <label for="Filenum" class="label">File Number</label><input type="text" id="Filenum" name="Filenum"  size=8  maxlength=8 class="reg_fields" required placeholder="xxx"/>
            </div> -->
             
             <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Campus" class="label">Prison</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prison" value="<?php echo $sentence; ?>" name="prison" class="reg_fields" style="margin: 0 0 0 -5px; height: 30px; width: 222px;">
                     <option value="selected">--Select prison--</option>
                    <?php include 'config.php';

                       
                       $sql="SELECT * FROM newprison ORDER BY pname";

                       $result=mysqli_query($conn,$sql);
                       if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<option>".$row['pname'].", ".$state['state']." ".$row['lga']."</option>";
                        }
                       }

                      ?>
                  
                     </select></td>

                                  </table>
                  </div class="control_input">

                  
            


            <div class="control_input">
                <input type="submit" name="Update" id="Add" value="Update"  title="" border="0" style="margin-left: 120px;">
            </div>
            
            <div id="validation_msg">
                <!-- validation message here -->
            </div>

    </form>
</td>
</tr>
<tr>
  <?php
           include("Footer.php");
                ?>
</tr>
</table>
</body>
</html>

