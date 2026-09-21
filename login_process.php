<?php

include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0){

header("Location: home.php");

}

else{

echo "<script>
alert('Invalid Email or Password');
window.location='login.php';
</script>";

}

?>