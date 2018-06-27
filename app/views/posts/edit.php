<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <!--// Body Starts Here-->

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">

					<h1><span class="fa fa-cog" aria-hidden="true"></span> Edit Posts</span><small> Blog Post 1</small></h1>
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
				<li class="active">Edit posts</li>
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
						    <h3 class="panel-title">Edit Posts</h3>
						  </div>
              <div class="panel-body">
                <form class="" action="<?php echo SITEURL ?>/posts/edit" method="post">
                  <div class="form-group">
          					<label>Post Title</label>
          					<input type="text" class="form-control" placeholder="Post Title" value="<?php echo $data['post_title']; ?>">
          	      </div>
          				<div class="form-group">
          					<label for="">Post Body</label>
          					<textarea name="post_desc" id="post_desc" value="" class="form-control" rows="8" cols="80">
								<?php echo htmlspecialchars($data['post_desc']); ?>
                    		</textarea>
          				</div>
          				<div class="checkbox">
          					<label for="">
          						<input type="checkbox" <?php echo $retVal = (isset($data['status'])) ? 'checked' : ''; ?>> Published
          					</label>
          				</div>
          				<div class="form-group">
          					<label for="">Meta Tags</label>
          					<input type="text" class="form-control" value="<?php echo $data['post_tag']; ?>" placeholder="Add Some Tags...">
          				</div>
          				<div class="form-group">
          					<label for="">Post Category</label>
          					<input type="text" class="form-control" value="<?php echo $data['post_category']; ?>">
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
