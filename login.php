<?php
session_start();

function userLogin($emailAddress, $password)
{ 
	if(!(RegisteredInDB( $emailAddress, $password)
		{
			echo "The email address or password entered is incorrect";
			return false;
		}
}

function RegisteredInDB( $emailAddress, $password)
{
	$connect = new PDO ('mysql:host=localhost;dbname=hireme;', 'root', 'password')
	$checkLoginQuery = "SELECT `ID`, `firstname`, `lastname` FROM `Users` WHERE `username`='$emailAddress'";
	$check = $connect ->query ($checkLoginQuery);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($result)
    {

        $_SESSION["user_id"] = $result['ID'];

        $_SESSION["firstname"] = $result['firstname'];

        $_SESSION["lastname"] = $result['lastname'];

        header("Location: ../dashboard.php");

    }

    else 

    {

        return false;

    }
}

if(isset ($_SESSION["user_id"]))
{
	header("Location: ../database.php");

}

if ( isset( $_POST['submit_form'] ) )

{
    $username = $_POST['username'];
    $password = $_POST['password'];
    userLogin($username,$password);

}

	
?>