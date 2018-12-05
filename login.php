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
	$connect = new PDO ('mysql:host=localhost;dbname=HireMe;', 'root', 'password')
	$checkLoginQuery = "SELECT `ID`, `firstname`, `lastname` FROM `Users` WHERE `email`='$emailAddress'";
	$check = $connect ->query ($checkLoginQuery);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($result)
    {

        $_SESSION["userID"] = $result['ID'];

        $_SESSION["firstname"] = $result['firstname'];

        $_SESSION["lastname"] = $result['lastname'];

        header("Location: ../dashboard.html");

    }

    else 

    {

        return false;

    }
}

if(isset ($_SESSION["userID"]))
{
	header("Location: ../database.html");

}

if ( isset( $_POST['submit_form'] ) )

{
    $username = $_POST['emailAddress'];
    $password = $_POST['password'];
    userLogin($username,$password);

}

	
?>