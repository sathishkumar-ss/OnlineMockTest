 <?php
$mysqli = new mysqli("localhost","root","","project");
if(!$_POST['username'] || !$_POST['email'] || !$_POST['phone'] || !$_POST['password'])

	 {
		echo "You left one or more of the required fields." ;
	    die();
	 }

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    echo "sucess";
}

// Escape special characters, if any
$username = $mysqli -> real_escape_string($_POST['username']);
$email = $mysqli -> real_escape_string($_POST['email']);

$phone = $mysqli -> real_escape_string($_POST['phone']);

$password = $mysqli -> real_escape_string($_POST['password']);

$vishnu = "INSERT INTO users (username,email,phone,password) VALUES ('$username','$email','$phone','$password')";

if (!$mysqli -> query($vishnu)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
}


$mysqli -> close();

?> 