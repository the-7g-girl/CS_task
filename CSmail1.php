<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Vedant throws a party</title>
	<link rel="stylesheet" href="CSmail.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<div id="Title">Emails lets go</div>
			<input type="text" name="name" placeholder="Name" required>
			<input type="email" name="email"  placeholder="Email id" required>
			<input type="number" name="phone"  placeholder="Phone no." required>
			<textarea id="message" name="message"  rows="4" placeholder="Pour your heart out here :)"></textarea>
			<!-- <button type="reset"> Reset</button> -->
			<button type="submit" name='submit'>Submit</button>
		</form>
	</div>

</body>
</html>

<?php

// if(isset($_POST['submit'])){
    $to= "sharvaniuj21@iitk.ac.in, sharvani.jadhav13@gmail.com";
    $subject="Test";
    $message=$_POST['message'];
    $from=$_POST['email'];
    mail($to,$subject,$message);
    
    // if(){
    //     echo "Mail sent";
    // }
    // else{
    //     echo "Email failed";
    // }

?>


