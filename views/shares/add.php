<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="">Share Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="body" class="form-control"  rows="20" cols="50"></textarea>
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
        <a href="<?php echo ROOT_URL; ?>shares" class="btn btn-danger">Back</a>
    </form>
  </div>
</div>