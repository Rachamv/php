<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- reguest Superglobals
    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV -->
    <form method="POST" action="receive_form.php">
        <label for="firstname">
        First Name: <input type="text" name="firstname">
        </label> 
        <label for="lastname">
        Last Name: <input type="text" name="lastname">
        </label> <br>
        <label for="email">
        Email: <input type="email" name="email">
        </label> <br>
      
        <button type="submit">Submit</button> 
    </form>


</body>
</html>