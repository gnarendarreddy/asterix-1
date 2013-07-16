<?php
include("../config.php");

$msg='';
if(isset($_POST['name'])){
$name = $_POST['name'];
$password = md5($_POST['password']);
$address = $_POST['addr'];
$age = $_POST['age'];
$mobileno = $_POST['mbno'];
$hobbies=$_POST['option'];
$hob = implode(',',$hobbies);
$courses = $_POST['courses'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$filepath='../uploads/'.$_FILES['file']['name'];
$path = "../uploads/";
$target_path = $path . basename( $_FILES['file']['name']); 
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded<br><br>";
} 
else{
    echo "There was an error uploading the file, please try again!";
}
$rs=mysql_query("select email from registertable where email='$email'");
$num = mysql_num_rows($rs);
if($num > 0)
{
 $msg = "Email already exist";
 }
 else
{
$qry = mysql_query("insert into registertable(name,password,address,age,mobileno,hobbies,courses,gender,email,file) values('$name','$password','$address',$age,$mobileno,'$hob','$courses','$gender','$email','$filepath')");
if($qry)
 
 echo "successfully inserted";
 else
 echo "insertion failed";
}
}
?>
<html>
<head><h3 align='center'>REGISTRATION FORM</h3>
</head>
<script>
function checkname()
{
var name = document.frm.name.value;
var pas = document.frm.password.value;
var adr = document.frm.addr.value;
var age = document.frm.age.value;
var phno = document.frm.mbno.value;

if(name.length =='' || name.length < 6 )
{
alert("Please enter name and  should be 6 chrs");
document.frm.name.focus();
return false;
}
if(pas.length =='')
{
alert("enter pw");
document.frm.password.focus();
return false;
}
if(adr.length =='')
{
alert("enter adr");
document.frm.addr.focus();
return false;
}
if(age.length =='')
{
alert("enter age");
document.frm.age.focus();
return false;
}
if(isNaN(age))
{
alert("enter valid age");
document.frm.age.value='';
document.frm.age.focus();
return false;
}


if(phno.length == '')
{
alert("enter no");
document.frm.mbno.focus();
return false;
}
var chk = document.getElementsByName("option[]");
var cheklen = document.getElementsByName("option[]").length;
var chkopt = false;
 for(var c=0;c<cheklen;c++)
     {
         if(chk[c].checked)
             {chkopt=true;}
     }
if(chkopt == false)
{
alert("select chkbox");
return false;
}

if(document.frm.courses.value == '')
{
alert("select course");
return false;
}

var  chosen = '';
var genlen=document.frm.gender.length;


for(var i=0;i<genlen;i++)
{
if(document.frm.gender[i].checked)
{
   chosen=document.frm.gender[i].value;
}

}
if(chosen == '')
{
alert("select gender");

return false;
}


var email=document.frm.email.value;
if(email.length == '')
{
alert("enter email");
document.frm.email.focus();
return false;
}
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(!email.match(reg))
{
alert("enter valid email");
document.frm.email.focus();
return false;
}
var file=document.frm.file.value;
if(file.length=='')
{
alert("must choose the file");
document.frm.file.focus();
return false;
}
document.frm.submit();
return true;
}
</script>
<body><form name="frm" id="frm" action="" method="post" enctype="multipart/form-data">  
<table>
<?php
if($msg!='')
{?>
<tr>
<td><font  size:30 color: red></font><?php 
echo $msg;
?>
</td>
</tr>
<?php }
?>
<tr>
<td>NAME:</td> 
<td><input type="text" name="name" value=""></td>
</tr>
<tr>
<td>PASSWORD :</td>
<td> <input type="password" name="password" value=""></td>
</tr>
<tr>
<td>ADDRESS  :</td>
<td> <textarea rows=5 cols=10 name="addr" value=""></textarea>
</td>
</tr>
<tr>
<td>AGE :</td>
<td><input type="text" name="age" id="age" value=""></td>
</tr>
<tr>
<td>MOBILE NO : </td>
<td><input type="text" name="mbno" value=""></td>
</tr>

<tr><td>HOBBIES  :</td>
 <td><input type="checkbox" name="option[]" value="playing cricket"> playing cricket
<input type="checkbox" name="option[]" value="reading books">reading books
<input type="checkbox" name="option[]" value="listening music">listening music
</td></tr>

<tr>
<td>COURSES  :</td>
<td> <select name="courses" >DEGREE AND GRADUATES
<option value="">Select</option>
<option value="b.sc">B.sc</option>
<option value="b.tech">B.tech</option>
<option value="mca">MCA</option>
<option value="mba">MBA</option>
</select>
</td></tr>
<tr>
<td>GENDER:</td> 
<td><input type="radio" name="gender" id="gender" value="male" >male
<input type="radio" name="gender" id="gender" value="female" >female</td>
</tr>
<tr>
<td>EMAIL:</td>
<td><input type="email" name="email" id="email" value=""></td>
</tr>
<tr>
<td>FILE:</td>
<td><input type="file" name="file" id="file" value="file"></td>
</tr>
<tr>
<td><input type="button" value="submit" name="subbtn" id="subbtn" onClick="checkname();"></td></tr>
</table>
</form>
</body>
</html>