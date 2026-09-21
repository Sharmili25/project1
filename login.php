<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body{
font-family:Arial;
background:lightblue;
}
.box{
width:380px;
margin:60px auto;
background:white;
padding:25px;
border-radius:10px;
}
input{
width:100%;
padding:10px;
margin:10px 0;
}
button{
width:100%;
padding:10px;
background:blue;
color:white;
}
</style>

<script>
function validateLogin(){

var email=document.getElementById("email").value;
var pass=document.getElementById("pass").value;

var pattern=/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

if(email==""){
alert("Enter Email ID");
return false;
}

if(!pattern.test(email)){
alert("Invalid Email ID");
return false;
}

if(pass.length<6){
alert("Password must contain minimum 6 characters");
return false;
}

return true;
}
</script>

</head>

<body>

<div class="box">

<h2 align="center">LOGIN</h2>

<form action="login_process.php" method="post"
onsubmit="return validateLogin()">

<input type="text" id="email" name="email"
placeholder="Email ID">

<input type="password" id="pass" name="password"
placeholder="Password">

<button type="submit">LOGIN</button>

</form>

<p align="center">
<a href="#">Forgot Password?</a>
</p>

<p align="center">
New User?
<a href="register.php">Register</a>
</p>

</div>

</body>
</html>