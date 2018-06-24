  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title><?php echo SITENAME; ?></title>

  	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/style.css">
  	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  </head>
  <body>
  	<nav class="navbar navbar-default">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
  					<span class="sr-only">Toggle N</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a href="#" class="navbar-brand">Admin Portal</a>
  			</div>
  			<div id="navbar" class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="<?php echo SITEURL?>">Dashboard</a></li>
  					<li><a href="<?php echo SITEURL?>/pages/">Pages</a></li>
  					<li><a href="<?php echo SITEURL?>/posts/">Posts</a></li>
  					<li>
  					<li><a href="<?php echo SITEURL?>/users/">Users</a></li>
  				</ul>

  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="#">Welcome, Kapersky</a></li>
  					<li><a href="<?php echo SITEURL?>/users/login">Log out</a></li>
  				</ul>
  			</div>
  		</div>
  	</nav>
