<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center">
<font size="5">
<a href="userpanel.php">HOME</a> 
</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">PRISONNER REGISTRATION FORM</h2>
<div id="content">
<form action="validatereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="65%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" size=8 maxlength=8 required placeholder="XX111100"  />


</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname" required placeholder="Alexandia James" /></td>
</tr>
	<tr><td><label for="on"><b>Date of Birth:</b></label>
		      	<td><select name="month" required>
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
				</select></td>
				<td>
				<input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/></td>
			
		      	<td><select name="year" required>
				
				<option selected="selected" value="01"value="01">1995</option>
			    <option value="02">1994</option>
			    <option value="03">1993</option>
			    <option value="04">1992</option>
                <option value="05">1991</option>
                <option value="06">1990</option>
			    <option value="07">1989</option>
			    <option value="08">1988</option>
			    <option value="09">1987</option>
                <option value="10">1986</option>
                <option value="11">1985</option>
			    <option value="12">1984</option>
			    <option value="13">1983</option>
			    <option value="14">1982</option>
                <option value="15">1981</option>
                <option value="16">1980</option>
			    <option value="17">1979</option>
			    <option value="18">1978</option>
			    <option value="19">1977</option>
                <option value="20">1976</option>
			    <option value="21">1975</option></td>
				<!-- di -->
				</select>
			</td>
</tr>

<tr><td><label for="on"><b>Date of In:</b></label>
		      	<td><select name="dmonth" required>
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
				</select></td>
			    <td>
                        <input type="text" id="dday" name="dday" style="width: 40px;" value="DD" class="reg_fields"/>
                    </td>
                    <td>
                        <input type="text" id="dyear" name="dyear" style="width: 60px;" value="YYYY" class="reg_fields"/>
                    </td>
                </td>
</tr>
   
				
</tr>
<tr>
	<tr><td><label for="on"><b>Date Out:</b></label>
		      	<td><select name="month" required>
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
				</select></td>
				<td>
				<input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/></td>
			
		      	<td><select name="year" required>
				
				<option value="01">1995</option>
			    <option value="02">1996</option>
			    <option value="03">1997</option>
			    <option value="04">1998</option>
                <option value="05">1999</option>
                <option value="06">2000</option>
			    <option value="07">2001</option>
			    <option value="08">2002</option>
			    <option value="09">2003</option>
                <option value="10">2004</option>
                <option value="11">2005</option>
			    <option value="12">2006</option>
			    <option value="13">2007</option>
			    <option value="14">2008</option>
                <option value="15">2009</option>
                <option value="16">2010</option>
			    <option value="17">2011</option>
			    <option value="18">2012</option>
			    <option value="19">2013</option>
                <option value="20">2014</option>
                <option selected="selected" value="21">2015</option>
			    ></td>
				<!-- di -->
				</select>
			</td>
</tr>
<tr>
<!-- <td bgcolor="#FFFFFF"><b>Date of Birth:</b></td> 
<td bgcolor="#FFFFFF"><input type="text" name="dob"/>
<span class="required_notification">YYYY-MM-DD</span</td>
</tr>-->
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  required placeholder="address"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>County:</b></td>
        <td> <select name="county">
		<option>Nairobi</option>
		<option>Nakuru</option>
		<option>Mombassa</option>
        <option>Machakos</option>
		<option>Malindi</option>
		<option>Mandera</option>
		<option>Meru</option></td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>O level</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		<option>Above</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>

<tr><td bgcolor="#FFFFFF"><b>Offence</b></td>
     <td bgcolor="#FFFFFF"><font size="4">
     <textarea cols="17" rows="4" name="offence" required placeholder="fill this box"></textarea>
	 </tr>
		

<tr>
<td bgcolor="#FFFFFF"><b>Sentence:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="sentence"  maxlength=7 required placeholder="2 Years" /></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum"  maxlength=9 required placeholder="NBI-001XX" /></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
	 <?php
           include("footer.php");
                ?>

</tr>
</table>
</body>
</html>