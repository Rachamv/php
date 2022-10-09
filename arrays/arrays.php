<?php
$array = [1, 2, 3, 4, 5, 6, true, "tnsquad\n"];
$name = array_pop($array);
echo $name;

echo implode(" ",$array);
//echo $array["tnsquad" ];
print_r ($array); //printing array index

echo "\n";

$array2 =[1, 2, 3, 4, 5, 6];
$array2[] = "TNSQUAD"; // adding more content
array_push($array2, "TNSQUAD");
echo implode(" ", $array2);
 print_r ($array2);
//asssociative array
$tns = [
$team1 = ["first_name" => "adewunmi",
"last_name" => "oladele",
"age"=> "200",
"hobbies" => "programming"],

$team2 = ["first_name" => "zik",
"last_name" => "teck",
"age"=> "200",
"hobbies" => "programming"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hi my name is <?php echo $team1["first_name"]; ?>,
        I am <?php echo $team1["age"]; ?>years old,
        and I like <?php echo $team1["hobbies"]; ?>.
</body>
</html>