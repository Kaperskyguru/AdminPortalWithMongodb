<?php require_once APPROOT . '/views/inc/header.php'; ?>

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">

					<h1><span class="fa fa-cog" aria-hidden="true"></span> Dashboard</span><small> Manage your site</small></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown create">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Create Contents<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a type="button" data-toggle="modal" data-target="#addPost">Add Post</a></li>
							     <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
							    <li><a type="button" data-toggle="modal" data-target="#addUser">Add User</a></li>
						  </ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<div class="row">
				<?php require_once APPROOT.'/views/inc/sidebar.php'; ?>
				<div class="col-md-9">
					<!-- Website Overview -->
					<div class="panel panel-default">
						  <div class="panel-heading main-color-bg">
						    <h3 class="panel-title">Website Overview</h3>
						  </div>
						  <div class="panel-body">
						  	<div class="col-md-3">
						  		<div class="well dash-box">
						  			<h2><span class="fa fa-user" aria-hidden="true"></span> 500</h2>
						  			<h4>Users</h4>
						  		</div>
						  	</div>

						  	<div class="col-md-3">
						  		<div class="well dash-box">
						  			<h2><span class="fa fa-list-alt" aria-hidden="true"></span> 12</h2>
						  			<h4>Pages</h4>
						  		</div>
						  	</div>
								<div class="col-md-3">
						  		<div class="well dash-box">
						  			<h2><span class="fa fa-pencil" aria-hidden="true"></span> 1,678</h2>
						  			<h4>Posts</h4>
						  		</div>
						  </div>
							<div class="col-md-3">
								<div class="well dash-box">
									<h2><span class="fa fa-bar-charts" aria-hidden="true"></span> 12,678</h2>
									<h4>Visitors</h4>
								</div>
							</div>
					</div>
				</div>
				<!-- Latest Users -->
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Latest Users</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-hover">
						    <thead>
						      <tr>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Joined</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>John Doe</td>
						        <td>john@example.com</td>
						        <td>Dec 12, 2018</td>
						      </tr>
						      <tr>
						        <td>Mary Moe</td>
						        <td>mary@example.com</td>
						        <td>Jan 3, 2015</td>
						      </tr>
						      <tr>
						        <td>July Dooley</td>
						        <td>july@example.com</td>
						        <td>Jul 17, 2013</td>
						      </tr>
									<tr>
						        <td>Mary Moe</td>
						        <td>mary@example.com</td>
						        <td>Jan 3, 2015</td>
						      </tr>
						      <tr>
						        <td>July Dooley</td>
						        <td>july@example.com</td>
						        <td>Jul 17, 2013</td>
						      </tr>
						    </tbody>
						  </table>
						</div>
				</div>
			</div>
		</div>
	</section>

	<!--//Footer Starts here-->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
