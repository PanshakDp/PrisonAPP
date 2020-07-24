<?php 

include '../include/config.php';
// escape variables for security

if(isset($_POST['signup'])){
$target="../images/".basename($_FILES['upload']['name']);
 // echo $target;
 $Nid=mt_rand(9999,999999);
// $Nid= mysqli_real_escape_string($conn,$_POST['Nid']);
$Filenum=mysqli_real_escape_string($conn,$_POST['Filenum']);
$Fname= mysqli_real_escape_string($conn,$_POST['Fname']);

 $dateofbirth = mysqli_real_escape_string($conn,$_POST['dateofbirth']);
 
 $datein = mysqli_real_escape_string($conn,$_POST['datein']);
 
$address= mysqli_real_escape_string($conn,$_POST['address']);

$state=mysqli_real_escape_string($conn,$_POST['state']);

$lga=mysqli_real_escape_string($conn,$_POST['lga']);
$Gender=mysqli_real_escape_string($conn,$_POST['Gender']);

$education=mysqli_real_escape_string($conn,$_POST['education']);

$status=mysqli_real_escape_string($conn,$_POST['status']);

$offence=mysqli_real_escape_string($conn,$_POST['offence']);


$sentence=mysqli_real_escape_string($conn,$_POST['sentence']);

$prison=mysqli_real_escape_string($conn,$_POST['prison']);

$mypic=mysqli_real_escape_string($conn,$_FILES['upload']['name']);


 $sql = "INSERT INTO registration (id, File_num, Full_Name, DOB, datein, Address, state,lga, Gender, Education, Marital, Offence, Sentence,prison, picture) 
VALUES ('$Nid', '$Filenum', '$Fname', '$dateofbirth', '$datein', '$address', '$state','$lga', '$Gender', '$education', '$status', '$offence', '$sentence','$prison','$mypic')";
move_uploaded_file($_FILES['upload']['tmp_name'], $target);

$result=mysqli_query($conn,$sql);


 

if(!$result){
  die('Error inserting: ' . mysqli_error($conn));
}

else
{
    echo '<script type="text/javascript">
                        alert("You have successfully added the record! Thank you.")
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
    <script type="text/javascript" src="webcamjs/webcam.min.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
 <style>
    #my_camera{
        width: 200px;
        height: 150px;
        border: 2px solid black;
       
    }


    </style>
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
	<form id="frmReg" method="POST" action="prisoner.php" enctype="multipart/form-data">
       <h2 id="hdr_title">Register Inmate </h2>
      <!-- <b> <?php echo $id; ?></b> -->
           <!--  <div class="control_input">
            <label for="Nid" class="label">Unique Number</label><input type="text" id="Nid" name="Nid" size=8  maxlength=8 class="reg_fields" required placeholder="PR123"  />
            </div><br> -->
           
           <div class="control_input">
            <label for="Nid" class="label">File Number</label><input type="text" id="Nid" name="Filenum" size=8  maxlength=8 class="reg_fields" required placeholder="00001111"  />
            </div><br>
                
            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" required placeholder=""/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>

                    <td>
                        <label for="date" class="label">Birth Date</label>
                    </td><br>
                    <td>
                   <input type="date" id="txtDay" name="dateofbirth" style="width: 211px;"  class="reg_fields"/>
                        </td>
                    
                    </tr></table>
                </div>
            </div><br>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="datein" class="label">Date In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="date" id="txtDay" name="datein" style="width: 211px;"  class="reg_fields"/>
                        </td>
                    </td>
                    
                    </tr></table>
                </div>
            </div><br>

            

            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder=""/>
            </div>
            
             <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="county" class="label">State</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="county" name="state" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01" required>-- select state --</option>
                            <?php include 'config.php';
                           $sql="SELECT * FROM  states ORDER BY name";
                           $result=mysqli_query($conn,$sql);
                           if(mysqli_num_rows($result)>0){
                            while($name=mysqli_fetch_assoc($result)){
                                echo "<option>".$name['name']."</option>";
                            }
                           }
                             
                             ?>
                           </td></tr>
                        </select>
                    </td>
                    </tr>
                </div><br>
                <tr>
                    <td>
                  <label for="opendate" class="label">Local Government</label>
              </td>
              <td>
                 <input type="text" id="lga" name="lga"  size=8   class="reg_fields" required placeholder="Mangu"/> 
              </td>

                </tr>
                

            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                          <option selected="selected" ></option>
                            <option >Male</option>
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
                        <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" ></option>
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
                        <label for="status" class="label">Marital Status</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="status" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" >Engaged</option>
                            <option >Divorced</option>
                            <option >Married</option>
                            <option >Single</option>
                            </td></tr>

                    </td>
                    </tr>
                </div></br>
             <tr>
           
                <td><div class="control_input"><br>
                <label for="Pname" class="label">Offence</label>
            </td>
                <td><input type="text" name="offence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;" placeholder="e.g Kidnapping"></td>
                </div>
                </tr>

                 <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" required class="label">Sentence</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <input type="text" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;" placeholder="e.g One Month">
                    </td>
                    </tr></table>
                </div></br>


            
             
             <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Campus" class="label">Prison</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prison" name="prison" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;" required="">
                     <option value="">--Select prison--</option>
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

                     <tr>
                     <!--  <td>
                          Picture: 

                      </td> -->
                     

                      <td>
           <!-- camera border starts here -->
                      <!-- <b>Focus well on the camera.</b>
                        <div id="my_camera"></div>

    <input type=button value="Set camera" onClick="configure()">
    <input type=button value="Take Snapshot" name="image" onClick="take_snapshot()">
    <input type=button value="Save Snapshot" onClick="saveSnap()"> 
       

    </td> -->
    <tr>
      <td>
        Image
      </td>
      <td> <input type="file" name="upload"></td>
    </tr>
    <td><div id="results"  ></div></td>


    <!-- Code to handle taking the snapshot and displaying it locally -->
    <script language="JavaScript">
    
    // Configure a few settings and attach camera
    function configure(){
      Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
      });
      Webcam.attach( '#my_camera' );
    }
    // A button for taking snaps
    

    // preload shutter audio clip
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

    function take_snapshot() {
      // play sound effect
      shutter.play();

      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML = 
          '<img id="imageprev" src="'+data_uri+'"/>';
      } );

      Webcam.reset();
    }

    function saveSnap(){
      // Get base64 value from <img id='imageprev'> source
      var base64image =  document.getElementById("imageprev").src;

       Webcam.upload( base64image, 'upload.php', function(code, text) {
         console.log('Save successfully');
         //console.log(text);
            });

    }

      

  </script>
                  </tr>
                 </table>
                  </div class="control_input">

                  
            


            <div class="control_input">
                <input type="submit" name="signup" id="Add" value="Add "title="" style="margin-left: 120px;" border="0">
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

