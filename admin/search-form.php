<html>
<head>
  
  <title>PRISONERS SEARCH RECORD</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align="center" border="1" bgcolor="green" width="600" cellpadding="8" cellspacing="0" height="415">
          <tr>
            <td colspan="0" height="246"><img src="banner.gif" width="1045" height="230""></td>
          </tr>
          <tr>
            <td colspan="8" bgcolor="green" height="3" align="center">
			
			
		<font size="5">  
		 <a href="../index.php">Logout</a> |
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search inmate</h1>
        <form action="search.php" method="get">
           <label>Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>

    <tr>
     <td align="center" bgcolor="#FFFFFF"><h1> Search Officer </h1>
        <form action="search1.php" method="get">
           <label>Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></td></tr>
<tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Search Visitor </h1>
        <form action="search3.php" method="get">
           <label>Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

    
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>


<tr>
<td bgcolor="green" colspan="3" align="center">
<?php
           include("Footer.php");
                ?>
</tr>
</table>
</body>
</html>