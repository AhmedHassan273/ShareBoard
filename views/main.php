<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shareboard</title>
        <link rel="stylesheet" href="<? echo ROOT_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<? echo ROOT_URL; ?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION['is_logged_in'])) : ?>
                        <li><a href="<?php echo ROOT_URL;?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/logout">Log Out</a></li>
                        <?php else : ?>
                        <li><a href="<?php echo ROOT_URL;?>users/login">Sign in</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/register">Sign Up</a></li>
                        <?php endif; ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
           <div class="row">
                <?php message::display(); ?>
               <?php require($view); ?>
           </div>
        </div><!-- /.container -->
    </body>
</html>