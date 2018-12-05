<?php
session_start()

//add new user information to database

$connect = new PDO ('mysql:host=localhost;dbname=HireMe;', 'root', 'addUser')
$sql = "INSERT INTO users (ID,firstname, lastname, username, password, telephone, email, date)";

if(mysql_query($connect, $sql))
{
    echo "Registration successful";
}else{
    echo "Error: Registration failed!"
    
}

mysql_close($connection)
?>
