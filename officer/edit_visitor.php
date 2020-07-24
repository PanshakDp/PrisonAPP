<?php
                

include '../include/config.php';
 

      if(isset($_POST['signup'])){

        $id=$_GET['id'];

        $id =mysqli_real_escape_string($conn,$_POST['id']);
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);    
        $date =mysqli_real_escape_string($conn, $_POST['date']);
       
        $timein =mysqli_real_escape_string($conn,$_POST['timein']);
        $timeout =mysqli_real_escape_string($conn,$_POST['timeout']);
        
        $telephone =mysqli_real_escape_string($conn,$_POST['telephone']);
        
        


        $sql="UPDATE  visitor SET
                    
                    fullname = '$fullname',
                    address = '$address',
                    dateofvisit = '$date',
                    timein = '$timein',
                    timeout = '$timeout',
                    
                    telephone = '$telephone'
                   

                    WHERE id='$id'
                    ";    

  
$result=mysqli_query($conn,$sql);

if($result){

  echo "<script>alert('Updated Successfully.')
 location.href='viewvis.php'</script>

 ";
}else{
echo "Failed".mysqli_error($conn);
}
  


}
?>



 <?php 

  $id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM visitor WHERE id ='$id'");

if(mysqli_num_rows($result)>0){

  while($row=mysqli_fetch_assoc($result)){

    $id=$row['id'];
    $fullname=$row['fullname'];
    $address=$row['address'];
    $date=$row['dateofvisit'];
    $timein=$row['timein'];
    $timeout=$row['timeout'];
    $phone=$row['telephone'];
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
           <a href="officerpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST">
       <h2 id="hdr_title">Update Visitors' information.  </h2>
            <div class="control_input">
            <label for="id" class="label">Natioanal Id</label><input type="text" id="id" name="id" required="" size=14  maxlength=8 
                class="reg_fields" value="<?php  echo $id; ?>"  />
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required value="<?php echo $fullname; ?>"  />
            </div>
            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" value="<?php echo $address; ?>"  />
            </div>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="uemail" class="label">Date</label>
                    </td>
                    <td>
                    <input type="date" name="date" style="width: 210px; height: 35px;" value="<?php echo $date; ?>" >

                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <div style="">
                <table>
                     <td>
                        <label for="timein" class="label">Time In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="text" name="timein" style="width: 210px; height: 35px;" value="<?php echo $timein; ?>">
                      </td>

              <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="timeout" class="label">Time Out</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                       </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="text" name="timeout" style="width: 210px; height: 35px;" value="<?php echo $timeout; ?>">
                      </td>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="uemail" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"     
                class="reg_fields" required " class="reg_fields" value="<?php echo $phone; ?>" />
            </div class="control_input">

        

          
                    
                     </select></td>
                 </table>
                  

                <input type="submit" name="signup" id="" value="Update" title="" border="0">
             </div class="control_input">
            
            
            </div> 
    </form>
</td>
</tr>
<tr>
  
</tr>
</table>
</body>
</html>