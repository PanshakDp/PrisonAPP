
<?php
include 'config.php';
if(isset($_POST['signup'])){
//escape variable for security here or problem
        $id =mysqli_real_escape_string($conn,$_POST['id']);
        $fullname =mysqli_real_escape_string($conn,$_POST['fullname']);
        $state =mysqli_real_escape_string($conn, $_POST['state']);
        $lga = mysqli_real_escape_string($conn,$_POST['lga']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);    
        $month =mysqli_real_escape_string($conn, $_POST['lMonth']);
        $dDay = mysqli_real_escape_string($conn, $_POST['txtDay']);
        $dYear =mysqli_real_escape_string($conn, $_POST['txtYear']);
        $gender =mysqli_real_escape_string($conn,$_POST['gender']);
        $telephone =mysqli_real_escape_string($conn,$_POST['telephone']);
        $education =mysqli_real_escape_string($conn,$_POST['education']);
        $exp =mysqli_real_escape_string($conn,$_POST['exp']);
        $dateofbirth = $month . '/' .$dDay . '/' . $dYear;
        $dateofbirth = date('Y-m-d',strtotime($dateofbirth));
        

//we are using mysql_query function. it returns a resource on true else False on error
        $sql="INSERT INTO officerdetails SET
                    id = '$id',
                    fullname = '$fullname',

                    state='$state',

                    lga='$lga',

                    address = '$address',
                    dateofbirth = '$dateofbirth',
                    gender = '$gender',
                    telephone = '$telephone',
                    education= '$education',  
                    experience = '$exp'
                    ";

 




if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}else{
  echo '<script type="text/javascript">
            alert("You have succefully registered officer. !Thank you");
            window.location = "adminpanel.php";
          </script>';
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
           <a href="adminpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="addofficer.php">
       <h2 id="hdr_title">Officer Registration Form  </h2>
            <div class="control_input">
            <label for="id" class="label">Id No</label><input type="text" id="id" name="id" size=14  maxlength=8 
                class="reg_fields" required placeholder="12345678"  />
            </div><br>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required placeholder=""/>
            </div><br>

             <div class="control_input">
             <label for="fullname" class="label">State</label>
                        <select id="county" name="state" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">-- select state --</option>
                            <?php include 'config.php';
                           $sql="SELECT * FROM  states ORDER BY name";
                           $result=mysqli_query($conn,$sql);
                           if(mysqli_num_rows($result)>0){
                            while($name=mysqli_fetch_assoc($result)){
                                echo "<option>".$name['name']."</option>";
                            }
                           }
                             
                             ?>
                          
                        </select>
                  </div>
       <div class="control_input">
                <label for="fullname" class="label">Local Goverment</label><input type="text" id="fullname" name="lga" class="reg_fields" required placeholder=""/>
            </div><br>

            <div class="control_input">
                <label for="address" class="label">Station/Prison</label>
                <select name="address" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                  <option>--select prison--</option>
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
            </div><br>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="dateofbirth" class="label">Date of birth</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="lMonth" class="" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="txtDay" name="txtDay" style="width: 55px;" placeholder ="DD" class="reg_fields"/>
                        <input type="text" id="txtYear" name="txtYear" style="width: 65px;" placeholder ="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="gender" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="gender" name="gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                           <option>Male</option>
                           <option>Female</option>       
                        </select>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="uemail" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"  size=11  maxlength=11 
                class="reg_fields" required placeholder="" class="reg_fields"/>
            </div class="control_input">

        

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Education Background</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option>O level</option>
                           <option>Certificate</option>
                           <option>Diploma</option>
                           <option>Bsc/B.A</option>
                           <option>PDG</option>
                           <option>Master</option>
                          <option>Ph.D</option>
                        </select>
                    </td>
                </table>
                </div class="control_input">

                 <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Years of experience</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="text" name="exp" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;" placeholder="e.g One year">
                </table>
                </div class="control_input">
                 
           

            <div class="control_input">
                <input type="submit" name="signup" id="signup" value="Submit" title="" border="0" style="margin-left: 120px;">
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