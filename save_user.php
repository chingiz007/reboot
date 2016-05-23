<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['surname'])) { $surname=$_POST['surname']; if ($surname =='') { unset($surname);} }
    
    
 if (empty($login) or empty($password) or empty($name) or empty($surname))
    {
    exit ("You didn't write all information");
    }
    include ("bd.php");
    $result = mysql_query("SELECT id FROM users WHERE login='$login'");
    $myrow = mysql_fetch_row($result);
    if (!empty($myrow[0])) {
    exit ("Sorry but this login is already registered");
    }
 
    $result2 = mysql_query ("INSERT INTO users (login, password, name, surname, phone_number) VALUES('$login','$password','$name','$surname','$phone')");
    
    if ($result2=='TRUE')
    {
    header("Location:../mynewsite.html");
    }
 else {
    echo "error";
    }
    ?>