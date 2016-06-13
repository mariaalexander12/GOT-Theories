
<html>
<head>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>theories</title>
  <link href="resources/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/css/main.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script> 
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
        <li><a href="#"> Contact </a></li>
        <li><a href="signin.php"> Sign Out </a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<form action="handle-comment.php" id="commentbox" method="POST">
  <textarea name="comment" id="comment" cols="25" rows="3" form="commentbox"></textarea>
  <input name="type" value="<?php echo $_GET['character']; ?> "type="hidden" />  
  <input type="submit" value="submit" />
</form>


<?php 
  $character = $_GET['character'];
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
$character = $_GET['character'];


//QUERY TABLE FROM DB//
$query = "SELECT * FROM COMMENTS WHERE type=\"$character\";";
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not retrieve data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "date :{$row['date_posted']}  <br> ".
          "{$row['content']}  <br>" .
         "--------------------------------<br>";
} 
 ?>
</body>
</html>
