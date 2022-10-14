<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta name="description" content=" Registration template in php.">
  <meta name="keywords" content="register page">
  <meta name="author" content="Adewunmi Oladele">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | Form </title>

</head>
<body>
	    <h1>REGISTRATION FORM</h1>
    <form method="POST" action="user_data.php">
        <label for="name">
        Full Name: <input type="text" name="name">
        </label> <br>
        <label for="email">
        Email: <input type="email" name="email">
        </label> <br>
        <label for="dob">
        Date Of Birth: <input type="date" name="dob">
        </label> <br>
        <label for="gender">
        Gender: <input type="radio" name="gender" value="female">Female 
        <input type="radio" name="gender" value="male">Male 
        </label> <br>
        <label for="country">
        Country: <input type="text" name="country">
        </label> <br>
      
        <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
    </form>



   

</body>
</html>