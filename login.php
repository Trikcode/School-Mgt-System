
<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel='stylesheet' href="log-reg.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
  </head>
  <body>
      <div class="row" style="padding-top: 3rem;">
        <div class="col">
          <H2>Login</H2>
   <form class="ui form" method="post" action="login.php">
      <?php echo display_error(); ?>
      <div class="form-group">
        <label>username</label>
        <input type="text" class="form-control" name="username" placeholder="username" />
      </div>
      <div class="form-group">
        <label>password</label>
        <input type="text" class="form-control" name="password" placeholder="password" />
      </div>

      <button class="form-group" type="submit" name="login_btn">
        <span>Login</span>
      </button>
      <p>
			Not yet a member? <a href="reg.php">Sign up</a>
		</p>
    </form>
        </div>

    <div class="col">
      <img src="makerere.jpg" alt="makk" class="logo"/>
    </div>

   
      </div>
  </body>
</html>
