<?php   
     

     include 'config.php';
  
         if(isset($_POST['signup'])){
  
          $pno =mysqli_real_escape_string($conn,$_POST['pno']);
  
          $pname =mysqli_real_escape_string($conn, $_POST['pname']);
  
          $state =mysqli_real_escape_string($conn, $_POST['state']);
          $lga =mysqli_real_escape_string($conn, $_POST['location']);
          
          $contact =mysqli_real_escape_string($conn,$_POST['contact']);
  
          $capacity =mysqli_real_escape_string($conn,$_POST['capacity']);
          
  
  //we are using mysql_query function. it returns a resource on true else False on error
         $query="INSERT INTO newprison(pno,pname,state,lga,contact,capacity) VALUES('$pno','$pname','$state','$lga','$contact','$capacity')";
  
         $result=mysqli_query($conn,$query);
         if(!$result){
          echo "failed".mysqli_error($conn);
         }else{
          echo '<script type="text/javascript">
                          alert("You have successfully added Prison.")
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
  
      <table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
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
      <form id="frmReg" method="POST" action="newprison.php">
         <h2 id="hdr_title">Add New Prison  </h2>
              <div class="control_input">
              <label for="Pno" class="label">Prison No</label><input type="text" id="pno" name="pno" size=5  
                  class="reg_fields" required placeholder="P1237"  />
              </div>
              <div class="control_input">
                  <label for="Pname" class="label">Prison Name</label><input type="text" id="pname" name="pname" class="reg_fields" required placeholder="Jos"/>
              </div>
               
              <div class="control_input">
                  <label for="location" class="label">State</label>
                  <select name="state" style= "width:212px; height: 35px">
                    <option>--select state--</option>
                     <?php 
                        include 'config.php';
                        $msql = "SELECT * FROM states ORDER BY name";
  
                        $result2=mysqli_query($conn,$msql);
  
                        if(mysqli_num_rows($result2)>0){
  
                    while($m_row = mysqli_fetch_assoc($result2)){
  
                      
  
                     echo "<option>".$m_row['name']."</option>";
                    
                      } 
                      }
  
        
                      ?>  
                      
                  </select>
              </div>
               <div class="control_input">
                  <label for="location" class="label">Local Government</label><input type="text" id="location" name="location" class="reg_fields" required placeholder=""/>
              </div>
  
              
              <div class="control_input">
                  <label for="contact" class="label">Contact No.</label><input type="text" id="contact" name="contact"  size=11  
                  class="reg_fields" required placeholder="" />
              </div class="control_input">
  
              
  
                  <div class="control_input">
                  <div style="display: inline-block;">
                  <table>
                       <td>
                          <label for="Campus" class="label">Capacity</label>
                      </td>
                      <td style="margin: 0; padding: 0;">
                      <input type="text" name="capacity" class="reg_fields" placeholder="e.g 100 Inmates"></td>
                   </table>
                    </div class="control_input">
  
              <div class="control_input">
                  <input type="submit" name="signup" id="Add" value="Add " title="" border="0" style="margin-left: 120px;">
              </div>
              
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