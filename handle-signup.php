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
$insert = "INSERT INTO USERS (email, password) VALUES (\"$email\", \"$password\")";
$retval = mysql_query( $insert, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
mysql_close($conn);

header('Location: main.php');
exit();
?>