<?php 

include '../include/config.php';

$ID=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM visitor WHERE id='$ID'");
 
 if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['fullname'];
  }
 }

?>

 <?php 
include '../include/config.php';

$checkbox=implode(',', $_POST['relationship']);
$dropdown=implode(',', $_POST['prisoner']);

if(isset($_POST['signup'])){
  $id=mysqli_real_escape_string($conn,$_POST['id']);
  
  $result=mysqli_query($conn,"INSERT INTO visit (id,prisoner,relationship)
    VALUES('$id','".$dropdown."','".$checkbox."')");

  
    if($result){
          echo "<script>alert('Successfully added.')</script>";
    
    }else{
      echo "Failed".mysqli_error($conn);
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

	<table align="center" border="0" bgcolor="green" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr>
            <td colspan="2" height="2"><img src="banner.gif" width="860"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="green" height="1" align="center">
	     	   <font size="4">   
           <a href="userpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="visit.php">
       <h2 id="hdr_title">Complete registration. </h2>
            <div class="control_input">
            <label for="id" class="label">Natioanal Id</label><input type="text" id="id" name="id"  size=14  
                class="reg_fields" value="<?php echo $id ?>" readonly />
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" value="<?php echo $name ?>" readonly />
            </div>
            
          
             
            
        

           <div class="control_input">
                <div style="display: inline-block;">
                <table>
                    <td>
                        <label for="campus" class="label">Relationship</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        Parent<input type="checkbox" name="relationship[]" value="Parent">
                        Husband<input type="checkbox" name="relationship[]" value="Husband">
                        Wife<input type="checkbox" name="relationship[]" value="Wife">
                        Son<input type="checkbox" name="relationship[]" value="Son">
                        Daughter<input type="checkbox" name="relationship[]" value="Daughter">
                        Brother<input type="checkbox" name="relationship[]" value="Brother">
                        Sister<input type="checkbox" name="relationship[]" value="Sister ">
                        Friend<input type="checkbox" name="relationship[]" value="Friend">
                        Relative<input type="checkbox" name="relationship[]" value="Relative">
                </table>
                </div class="control_input"> 

                <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Inmate(s) Name</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prisoner" name="prisoner[]" multiple="multiple"   class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display">

                  <option value="">--Select Inmate name--</option>
                  <?php $msql =" SELECT * FROM registration ORDER BY Full_Name";

                   $result=mysqli_query($conn,$msql);

                   if(mysqli_num_rows($result) >0 ){

                    while($m_row = mysqli_fetch_assoc($result)) {       
                    echo("<option value = '" . $m_row['Full_Name'] . "'>" . $m_row['Full_Name'] . "</option>");
                      
                  }
                } ?>
                   
                    
                     </select></td>
                 </table><br>
                  </div class="control_input">
                 
           

            <div class="control_input">

                <input type="submit" name="signup" id="signup" value="Add" title="" border="0">
             </div class="control_input">
            
            <div id="validation_msg">
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