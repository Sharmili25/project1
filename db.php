<?php

$conn=new mysqli("localhost","root","","doctor_db");

if($conn->connect_error){
die("Connection Failed");
}

?>