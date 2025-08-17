<?php
session_start();

$_SESSION['name'] = 'John Doe';
$_SESSION['email'] = 'john@mail.com';
$_SESSION['age'] = 30;

echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION["age"];

//session works like a global variable, so you can access it from any page in the same session
//session variables are stored on the server, so they are not visible to the user


session_unset(); // remove all session variables when next page is loaded like testSession.php
