<html>
<head><title>
New file
</title>
</head>
<body>
<form action="" method="post">
		Name:<input type="text" name="uname">{{$errors->first('uname', '<span class="error">:message</span>')}}<br/>
		Email: <input type="email" name="email">{{ $errors->first('email','<span class="error">:message</span>')}}<br/>
		Password: <input type="password" name="password">{{ $errors->first('password','<span class="error">:message</span>')}}<br/>
		<input type="submit" name="signup" value="submit" >
<input type="submit" name="signup" value="Cancel" >
		</form>
</body>
</html>
