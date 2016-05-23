<?php 
$connect=mysql_connect("localhost", "root", "");
mysql_select_db("extreme_users");

if (isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$repeat_password=$_POST["re_password"];
	$email=$_POST["email"];
	if ($password==$repeat_password){
		$query=mysql_query("INSERT INTO extreme_users (username, password, repeat_password, Email) VALUES('$username', '$password', '$repeat_password', '$email')")or die(mysql_error());
	}
	header("Location: 777.php");
	
	else{
		die("Passwords are not the same");
	}
}
 ?>

