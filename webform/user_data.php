<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $data = [$name, $email, $dob, $gender, $country];
    //write to file
    $file = fopen('userdata.csv', 'a+');
    fputcsv($file, $data);
    fclose($file);
}
else{
    echo "No data kindly input some data";
}
?>
<!DOCTYPE html>
<html>

<body>
	<center>
		<h1>DISPLAY USER DATA </h1>
	
		<?php
		echo "<html><body><center><table>\n\n";

		// Open a file
		$file = fopen("userdata.csv", "r");
    print_r($file);
		
		// Closing the file
		fclose($file);
	</center>
</body>

</html>
