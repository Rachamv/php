<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo "Full Name: " . $name . "<br>" ;
echo "Email: " . $email . "<br>";
echo "Date Of Birth: " . $dob. "<br>" ;
echo "Gender: " . $gender. "<br>" ;
echo "Country: " . $country. "<br>" ;

$data = "./userdata.csv";
$handle = fopen("$data","a");
$handle = fwrite($data, $varname . ", " . $varemail. ",$vardob . ", $vargender . ", $varcountry . ", \n");
fclose($handle);

?>