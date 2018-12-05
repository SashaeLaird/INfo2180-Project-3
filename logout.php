<?php
session_start();

unset($_SESSION["ID"]);
unset($_SESSION["firstname"]);
unset($_SESSION["lastname"]);

header("Location: ../login.html");
?>