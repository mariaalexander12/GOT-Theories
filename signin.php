 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>sign in</title>
 	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
 	<link href="resources/css/signin.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>	
</head>
 </head>
 <body>
 	<div class = "container">
 		<div class="wrapper">
 			<form action="handle-signin.php" method="post" name="Login_Form" class="form-signin">       
 				<h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
 				<hr class="colorgraph"><br>

 				<input type="text" class="form-control" name="email" 
 					   placeholder="email" required="" autofocus="" />
 				<input type="password" class="form-control" name="password" 
 					    placeholder="password" required=""/>     		  

 				<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">
 					Login
 				</button>  			
 			</form>			
 		</div>
 	</div>
 </body>
 </html>