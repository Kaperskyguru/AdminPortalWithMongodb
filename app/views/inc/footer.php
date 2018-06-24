
<footer>
  <p>Copyright | AdminPortal (c) 2018 Copyright Holder All Rights Reserved.</p>
</footer>

<!-- modal -->
<!-- Add Pages Modal -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <form method="post" action="<?php echo htmlspecialchars(SITEURL.'/pages/add')?>" role="form" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Add New Pages</h4>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="page_title">Page Title</label>
        <input type="text" name="page_title" id="page_title" class="form-control" placeholder="Page Title">
      </div>
      <div class="form-group">
        <label for="addPageEditor">Page Body</label>
        <textarea name="addPageEditor" id="addPageEditor" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <div class="checkbox">
        <label for="status">
          <input type="checkbox" name="status" id="status"> Published
        </label>
      </div>
      <div class="form-group">
        <label for="page_tags">Meta Tags</label>
        <input type="text" name="page_tags" id="page_tags" class="form-control" placeholder="Add Some Tags...">
      </div>
      <div class="form-group">
        <label for="page_meta_desc">Meta Description</label>
        <input type="text" class="form-control" name="page_meta_desc" id="page_meta_desc" placeholder="Add Meta Description...">
      </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
  </form>
  </div>
</div>
</div>
</div>

<!-- Add Post Modal -->
<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <form method="post" action="<?php echo htmlspecialchars(SITEURL.'/posts/add')?>" role="form" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Add New Post</h4>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label for="post_title">Post Title</label>
      <input type="text" id="post_title" name="post_title" class="form-control" placeholder="Post Title">
    </div>
    <div class="form-group">
      <label for="post_desc">Post Body</label>
      <textarea name="post_desc" id="post_desc" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="checkbox">
      <label for="status">
        <input type="checkbox" id="status" name="status" value=""> Published
      </label>
    </div>
    <div class="form-group">
      <label for="post_tags">Meta Tags</label>
      <input type="text" class="form-control" id="post_tags" name="post_tags" placeholder="Add Some Tags...">
    </div>
    <div class="form-group">
      <label for="">Post Category</label>
      <input type="text" class="form-control" id="post_category" name="post_category" placeholder="Add Post Category...">
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
</div>
</div>
</div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <form>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Add New User</h4>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label for="full_name">Full Name</label>
      <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name">
    </div>
    <div class="form-group">
      <label for="addUserEditor">User Description</label>
      <textarea name="addUserEditor" id="addUserEditor" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="checkbox">
      <label for="status">
        <input type="checkbox" name="status" id="status" value=""> Approved
      </label>
    </div>
    <div class="form-group">
      <label for="user_role">User Role</label>
      <input type="text" name="user_role" id="user_role" class="form-control" placeholder="Enter Use Role...">
    </div>
    <div class="form-group">
      <label for="about_me">About Me</label>
      <input type="text" id="about_me" name="about_me" class="form-control" placeholder="Describe yourself...">
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
</div>
</div>
</div>
</div>

<script>
CKEDITOR.replace( 'post_desc' );
</script>
<script>
CKEDITOR.replace( 'addPageEditor' );
</script>
<script>
CKEDITOR.replace( 'addUserEditor' );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/js/bootstrap.min.js"></script>
</body>
</html>
