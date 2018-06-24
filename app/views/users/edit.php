<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <!--// Body Starts Here-->

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">

					<h1><span class="fa fa-cog" aria-hidden="true"></span> Edit Users</span><small> Solomon Eseme</small></h1>
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
				<li>
					<a href="<?php echo SITEURL; ?>">Dashboard</a> >
				</li>
				<li class="active">Edit users</li>
			</ol>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<div class="row">
				<?php require_once APPROOT.'/views/inc/sidebar.php'; ?>

				<div class="col-md-9">
          <div class="panel panel-default">
						  <div class="panel-heading main-color-bg">
						    <h3 class="panel-title">Edit Users</h3>
						  </div>
              <div class="panel-body">
                <form class="" action="<?php echo SITEURL ?>/users/edit" method="post">
                  <div class="form-group">
          					<label>User Name</label>
          					<input type="text" class="form-control" placeholder="User Name" value="Solomon Eseme">
          	      </div>
          				<div class="form-group">
          					<label for="">About Me</label>
          					<textarea name="addPageEditor" class="form-control" rows="8" cols="80">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </textarea>
          				</div>
          				<div class="checkbox">
          					<label for="">
          						<input type="checkbox" checked> Approved
          					</label>
          				</div>
          				<div class="form-group">
          					<label for="">Meta Tags</label>
          					<input type="text" class="form-control" value="tag1, tag2, tag3" placeholder="Add Some Tags...">
          				</div>
          				<div class="form-group">
          					<label for="">Meta Description</label>
          					<input type="text" class="form-control" placeholder="Add Meta Description..." value="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt">
          				</div>
                  <input type="submit" name="" class="btn btn-default" value="Submit">
                </form>
              </div>
          </div>
				</div>
			</div>
		</div>
	</section>

	<!--//Footer Starts here-->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
