
<html>
<body bgcolor="cyan">
<h1>REGISTRATION PAGE</h1>
<form method="post"  name="RegistrationForm" enctype="multipart/form-data">
 <table width="40%" bgcolor="#efee82" >
<tr>
<td width="30" >First Name*:</td>
<td><input type="text" name="Fname" id="fName" size=25 maxlength=35 />
{{$errors->first('Fname', '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">Last Name*:</td>
<td><input type="text" name="Lname" id="lName" size=25 maxlength=15/>
{{$errors->first('Lname', '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">Father Name*:</td>
<td><input type="text" name="FatherName" id="FaName" size=25 maxlength=30/>
{{$errors->first('FatherName', '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">Address:</td>
<td><input type="text" name="address" size=25 maxlength=30/>
{{$errors->first('address', '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">Mobile No:</td>
<td><input type="text" name="mobile" size=25 />
{{$errors->first('moblie', '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">EmailId:</td>
<td><input type="text" name="email" size=25 maxlength=30/>
{{$errors->first('email, '<span class="error">:message</span>')}}
</td>
</tr>
<tr>
<td width="30" valign="middle">PassWord:</td>
<td><input type="password" name="pass" size=25 maxlength=30 /></td>
</tr>
<tr>
<td width="30" valign="middle">Gender:</td>
<td><input type="radio" id="one " name="gender" value="male">Male
<input type="radio" id="two" name="gender" value="female">Female</td>
</tr>
<tr>
<td width="30" valign="middle">Qualification:</td>
<td><select name="Qualification"  onChange="";>
<option selected="selected" value="">---select---</option>
<option value="B.tech">B.tech</option>
<option value="M.tech">M.tech</option>
<option value="MCA">MCA</option>
</select></td>
 </tr>
 <tr>
 <td width="30" valign="middle">Hobbies:</td>
 <td><input type="checkbox" name="chkbx" value="playing chess">chess
<input type="checkbox" name="chkbx" value="Reading books">Reading books
<input type="checkbox" name="chkbx" value="singing">singing</td>
</tr>
<tr>
<td width="30" valign="middle">Upload file:</td>
<td> <input type="file" name="load" id="import" />            
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="SUBMIT"   />
</td>
<td>
<input type="reset" name="reset" value="RESET"   />
</td>
</tr>
</table>
</form>
</body>
</html>
 </body>
</html>