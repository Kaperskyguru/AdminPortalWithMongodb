<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo SITENAME; ?> | Login</title>

	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL;?>/css/style.css">
	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><span class="fa fa-cog" aria-hidden="true"></span> Admin Portal</span><small> Account Login</small></h1>
				</div>
			</div>
		</div>
	</header>

	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
          <form class="well" id="login" action="<?php echo SITEURL ?>" method="post">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="" placeholder="Enter Email Address">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="" placeholder="Enter your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-default btn-block">
              </div>
          </form>
				</div>
			</div>
		</div>
	</section>

	<!--//Footer Starts here-->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
