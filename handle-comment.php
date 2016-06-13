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
$comment = $_POST['comment'];
$type = $_POST['type'];
$insert = "INSERT INTO COMMENTS (content, type) VALUES (\"$comment\", \"$type\")";
$retval = mysql_query( $insert, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
mysql_close($conn);

header("Location: theorypages.php?character=$type");
exit();
?>