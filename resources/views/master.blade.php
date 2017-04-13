<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to admin control panel</title>
	<base href="{{asset('')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="user/css/bootstrap.min.css" rel="stylesheet">
	<link href="user/css/mystyle.css" rel="stylesheet">
	<script src="user/js/jquery.js" ></script>
	<script src="user/js/bootstrap.js" ></script>
	<!-- date nhe -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="user/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
				  $( function() {
				    $( "#datepicker" ).datepicker();
				  } );
				  </script>
</head>
<body>
<!-- Spend for top -->
<nav class="navbar navbar-default " role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Food-Drink</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Index</a></li>
				
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search for anything">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register">Register</a></li>
				<li><a href="login">Login</a></li>
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<!-- Slide -->
	@yield('slide')
<!-- End Slide -->

<!-- row 1 -->
<!-- Container -->
	@yield('content')
<!-- End container
<!-- Footer -->
<!-- End Footer -->
</body>
</html>