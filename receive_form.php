<?php

print_r($_POST);





$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

echo "First Name: " . $firstname . "<br>" ;
echo "Last Name: " . $lastname . "<br>" ;
echo "Email: " . $email . "<br>";
?>