<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Login form</title>
</head>
<body bgcolor="#FAFAD2">
<h1><center><font face="algerian" color="red">PROJECT PROGRESS TRACKING SYSYTEM</font></center></h1>
<form action="login1.php" method="post">
<div class="login">
<select name="se">
<option value="0">User Type</option>
<option  value="1" >Admin</option>
<option  value="2" >Faculty</option>
<option  value="3" >Student</option>
</select><br><br>
<input type="text" placeholder="Username" name="name" id="username"> 
<input type="password" placeholder="Password"name="password" id="password"> <br/>

<center><input type="submit" value="Sign In"></center>

</div>
</form>
</body>
</html>