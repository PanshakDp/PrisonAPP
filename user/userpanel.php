<?php
session_start();
?>

<head>
  <title> PRISON  SYSTEM</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='215'>
          <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
          <tr>
            <td height='1' colspan='3' align='right' bgcolor="#006600">&nbsp;</td>
          </tr>
		       
          <tr>
            <td width='4%' bgcolor='#FFFFFF' valign='top'>
<h3 align='center'  title='You should be online'>&nbsp;</h3></td>

            <td width='71%' valign='top' bgcolor="#FFFFFF">

<br/>

<h3 align='center'>REGISTRANT </h3>
<P align='justify'><font face='Arial, Helvetica, sans-serif'>
  <h2 style='text-align:center; color: green;'>
  
  </h2><br>


 
    </font></p>

			</td>
            <td width='25%' bgcolor='green'  valign='top'>
			
	
<table border='1' align='center'>
<tr>
<td width="255" >
<h4>  REGISTRANT PANNEL : </h4><br/>
<div id="header">
      <div id="menu">
 <ul>

  <li><a href='prisoner.php'><b><button>Inmates Registration</button></b></a></li>
    <br>
  <li><a href='newprison.php'><b><button>Add New Prison</button> </b>
		<br><br>
	<li><a href='visitors.php'><b><button>Visitors Registration</button> </b></a></li>
		<br> 
    <li><a href='updateuserpassword.php'><b><button>Change Password</button></b></a></li><br>
  <li><a href='../index.php''><b><buttun></buttun><button>Log Out</button></b></a></li>
</ul>
</div>
</div>
</td>
</tr>
</table>

			</td>
          </tr>-
          <tr>
            <?php
           include("Footer.php");
                ?>
	</table>
</body>
</head>
</html>