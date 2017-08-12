<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sign Up</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="text-center">
            <input type="submit" name="submit" class="btn btn-success btn-lg" value="submit"> 
        </div>
    </form>
  </div>
</div>