<?php
                
//escape variable for security here or problem
include '../include/config.php';
 

      if(isset($_POST['signup'])){

        $id =$_POST['id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];    
        $date = $_POST['date'];
       
        $timein =$_POST['timein'];
        $timeout =$_POST['timeout'];
        
        $telephone =$_POST['telephone'];
        
        

//we are using mysql_query function. it returns a resource on true else False on error
        // $sql="INSERT INTO visitor SET
        //             id = '$id',
        //             fullname = '$fullname',
        //             address = '$address',
        //             dateofvisit = '$date',
        //             timein = '$timein',
        //             timeout = '$timeout',
        //             relationship = '$relationship',
        //             telephone = '$telephone',
        //             prisoner = '$prisoner'
        //             ";

 $sql1 = "INSERT INTO visitor (id,fullname,address,dateofvisit,timein,timeout,telephone)
   VALUES ('$id','$fullname','$address','$date','$timein','$timeout',
   '$telephone')";

    

  
$result=mysqli_query($conn,$sql1);

if($result){

  echo "<script>alert('Sent successfully, you can now complete the next step.')
  location.href='visit.php?id=$id'</script>";
}else{
echo "Failed".mysqli_error($conn);
}
  


}
?>
 <?php 
$result=mysqli_query($conn,"SELECT * FROM visitor ");
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
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
	<form id="frmReg" method="POST" action="visitors.php">
       <h2 id="hdr_title">Visitors Registration Form  </h2>
            <div class="control_input">
            <label for="id" class="label">Natioanal Id</label><input type="text" id="id" name="id" required="" size=14  maxlength=8 
                class="reg_fields" required placeholder="12345678"  />
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required placeholder=""/>
            </div>
            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder=""/>
            </div>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="uemail" class="label">Date</label>
                    </td>
                    <td>
                    <input type="date" name="date" style="width: 210px; height: 35px;" >

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
                        <input type="text" name="timein" style="width: 210px; height: 35px;">
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
                        <input type="text" name="timeout" style="width: 210px; height: 35px;">
                      </td>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="uemail" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"     
                class="reg_fields" required placeholder="" class="reg_fields"/>
            </div class="control_input">

        

           
           

            <div class="control_input">

                <input type="submit" name="signup" id="signup" value="Next -->" title="" border="0">
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