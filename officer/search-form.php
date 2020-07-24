<html>
<head>
   <style>
    div.ex
     {
      width:400px;
      padding:3px;
      border:5px silver;
      margin:0px;
     }
   </style>
  <title>PRISON INMATE INFORMATION SYSTEM</title>
</head>
<body>
    <table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>
          <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
      
  <tr>
   <td colspan="8" bgcolor="green" height="3" align="center">			
	   <font size="5">  
     <a href="../index.php">Log Out</a>|
     <a href="officerpanel.php">Back to  Pannel</a>
          </font> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Prisoner by Name or Id </h1>
        <form action="search.php" method="get">
           <label>Name/Id:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
    </td>
     <td height="191" bgcolor="#FFFFFF"></td>
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>


</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Visitor</h1>
        <form action="search3.php" method="get">
           <label>Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
    </td>
     <td height="191" bgcolor="#FFFFFF"></td>
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>
</tr>

<!-- <tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Transfered prisoner</h1>
        <form action="search2.php" method="get">
           <label>Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
    </td>
     <td height="191" bgcolor="#FFFFFF"></td>
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>
</tr> -->

<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Discharged prisoner by Name or Id</h1>
        <form action="search1.php" method="get">
           <label>Name/Id:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
    </td>
     <td height="191" bgcolor="#FFFFFF"></td>
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>
</tr>
<tr>
           <?php
           include("Footer.php");
                ?>
          
</tr>
</table>
</body>
</html>
