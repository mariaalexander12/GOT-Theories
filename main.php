<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
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

<div class="container">
  <div class="row">
    <div class="col-md-3">
    	<div class="row box">
    		<img src="resources/images/tyrion.jpg">
      	<a href="theorypages.php?character=tyrion">Tyrian Lannister Fan Theories </a>
  		</div>
    </div>
    <div class="col-md-3 col-md-offset-1">
    	<div class="row box">
    		<img src="resources/images/dani.jpg">
      	<a href="theorypages.php?character=dany">Daenerys Targaryen Fan Theories </a>
  		</div>
    </div>
    <div class="col-md-3 col-md-offset-1">
    	<div class="row box">
    		<img src="resources/images/jonsnow.jpg">
      		<a href="theorypages.php?character=jonsnow">Jon Snow Fan Theories </a>
  		</div>
    </div>
  </div>
</div>

</body>
</html>