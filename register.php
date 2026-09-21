<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>
body{
font-family:Arial;
background:lightblue;
}
.box{
width:400px;
margin:50px auto;
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
background:green;
color:white;
}
</style>

<script>
function validateRegister(){

var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var pass=document.getElementById("pass").value;
var cpass=document.getElementById("cpass").value;

var letters=/^[A-Za-z ]+$/;
var mail=/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

if(name=="" || !letters.test(name)){
alert("Name should contain letters only");
return false;
}

if(!mail.test(email)){
alert("Enter valid Email ID");
return false;
}

if(pass.length<6){
alert("Password should be minimum 6 characters");
return false;
}

if(pass!=cpass){
alert("Passwords do not match");
return false;
}

return true;
}
</script>

</head>

<body>

<div class="box">

<h2 align="center">NEW USER REGISTER</h2>

<form action="register_process.php"
method="post"
onsubmit="return validateRegister()">

<input type="text" id="name"
name="name" placeholder="Name">

<input type="text" id="email"
name="email" placeholder="Email ID">

<input type="password" id="pass"
name="password" placeholder="Password">

<input type="password" id="cpass"
placeholder="Confirm Password">

<button type="submit">REGISTER</button>

</form>

</div>

</body>
</html>