<?php
$con=new mysqli('localhost','root','','extreme_users');
$name=$_GET['username'];
$password=$_GET['password'];
$query="SELECT * FROM extreme_users WHERE username='$name' AND password='$password'";
$result=$con->query($query);
if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['username']=$name;
    echo 'success';
}
if(mysqli_num_rows($result)==0){
    echo 'erlog';
}
?>