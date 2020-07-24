<?php session_start(); ?>

<head>
  <title> PRISONS  SYSTEM </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>
          <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
       
          <tr>
          	 <tr>
            <td colspan="3" bgcolor="green" height="1" align="center">
            <font size="4">
            
            <a href="court.php">COURT VERDICT</a>  |
            <!-- <a href="transfer.php">TRANSFER INMATE </a>| -->
            <a href="newprison.php">ADD PRISON </a> |
            <a href="search-form.php">SEARCH </a> |
            <a href="statedischarged.php">DISCHARGED INMATES</a> 
          </font>
            </td>

          </tr>

            <td height='1' colspan='3' align='right' bgcolor="#006600">&nbsp;</td>

          </tr>



          <tr>

            <td width='4%' bgcolor='#FFFFFF' valign='top'>
               

            <td width='71%' valign='top' bgcolor="#FFFFFF">

<h3 align='center'> WELCOME OFFICER. </h3>
<P align='justify'><font face='Arial, Helvetica, sans-serif'>
<h2 style="text-align:center; color: green;"> 

 </h2>
   

			</td>
            <td width='25%' bgcolor='GREEN'  valign='top'>
			
	
<table border='1' align='center'>
<tr>
<td width="252">
<h3>  OFFICER PANNEL : </h3><br/>
<ul>
						
					
					<li><a href="inmatelocation.php"><b><button>Inmates Details</button></b></a></li> <br>
					<li><a href="viewcourt.php"><b><button>Court Details</button></a></b></li><br>
          <li><a href="viewvis.php"><b><button>Visitors Information</button></b></a></li><br>
          <li><a href="viewnewprison.php"><b><button>View Prisons</button></a></b></li><br>
          <!-- <li><a href="viewoff.php"><b><button>Officers Details</button></b></a></li><br> -->
          <!-- <li><a href="viewtransfer.php"><b><button>Transferred Inmates Details</button></b></a></li><br> -->
          <li><a href='updateofficerpassword.php'><b><button>Change Password</button></b></a></li><br>

           <li><a href='add_user.php'><b><button>Add User</button></b></a></li>
    <br>
 					<li><a href="../index.php"><b><button>Log Out</button></b></a></li>

				</ul>
			
			</div>
</td>
</tr>
</table>
	
			</td>
          </tr>
           <?php
           include("Footer.php");
                ?>
          <tr>
           
          </tr>
	</table>
</body>
</head>
</html>