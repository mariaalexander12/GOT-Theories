<?php 
$dbhost = '127.0.0.1';
$dbuser =  'root';
$dbpass = 'helengrace';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

// always copy & paste this shiznip//
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
//copy &paste above shiznip//

//now select DB//
mysql_select_db('BLOG');

//QUERY TABLE FROM DB//
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT email, password FROM USERS WHERE email=\"$email\";";
$retval = mysql_query( $query, $conn );
if(! $retval )
{
	die('Could not retrieve data: ' . mysql_error());
}


if (mysql_num_rows($retval) == 0) {
	mysql_close($conn);
	header('Location: signup.php');
}
else {
	$row = mysql_fetch_array($retval, MYSQL_ASSOC);
	if ($password == $row['password']){
		mysql_close($conn);
		header('Location: main.php');
	} 
	else { 
		mysql_close($conn);
		header('Location: signin.php');
		exit();
	}
}
?>