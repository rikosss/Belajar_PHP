<?php 
function login($nama,$email,$pass)
{

$nama1=["user","admin"];
$email1=["user@gmail.com","admin@gmail.com"];
$pass1=["123","1234"];

if(($nama==$nama1[0] OR $nama==$nama1[1]) OR ($email==$email1[0] OR $email==$email1[1]) AND ($pass==$pass1[0] OR$pass==$pass1[1])){
	return true;
}
	return false;

}

?>

