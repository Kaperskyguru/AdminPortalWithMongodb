<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <!--// Body Starts Here-->

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">

					<h1><span class="fa fa-cog" aria-hidden="true"></span> Users</span><small> Manage site users</small></h1>
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
        <li><a href="<?php echo SITEURL; ?>">Dashboard</a> ></li>
				<li class="active">Users</li>
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
						    <h3 class="panel-title">Users</h3>
						  </div>
						  <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Filter Users...">
                  </div>
              </div>
              <br>
              <table class="table table-striped table-hover">
						    <thead>
						      <tr>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Joined</th>
                    <th></th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>John Doe</td>
						        <td>john@example.com</td>
						        <td>Dec 12, 2018</td>
                    <td><a href="<?php echo SITEURL ?>/users/edit" class="btn btn-default">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
						      </tr>
						      <tr>
						        <td>Mary Moe</td>
						        <td>mary@example.com</td>
						        <td>Jan 3, 2015</td>
                    <td><a href="<?php echo SITEURL ?>/users/edit" class="btn btn-default">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
						      </tr>
						      <tr>
						        <td>July Dooley</td>
						        <td>july@example.com</td>
						        <td>Jul 17, 2013</td>
                    <td><a href="<?php echo SITEURL ?>/users/edit" class="btn btn-default">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
						      </tr>
									<tr>
						        <td>Mary Moe</td>
						        <td>mary@example.com</td>
						        <td>Jan 3, 2015</td>
                    <td><a href="<?php echo SITEURL ?>/users/edit" class="btn btn-default">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
						      </tr>
						      <tr>
						        <td>July Dooley</td>
						        <td>july@example.com</td>
						        <td>Jul 17, 2013</td>
                    <td><a href="<?php echo SITEURL ?>/users/edit" class="btn btn-default">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
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
