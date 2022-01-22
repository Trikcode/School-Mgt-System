<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel='stylesheet' href="log-reg.css">

    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>

  </head>
  <body>
    <div class="header">
      <h3>Create Account</h3>
    </div>
    <div class="row">
<div class="col">
    <form  method="post" action="reg.php">
          <?php echo display_error(); ?>  

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $username; ?>" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $email; ?>" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password_1" placeholder="password" />
      </div>
      <div class="form-group">
        <label>Confirm password</label>
        <input type="text" class="form-control" name="password_2" placeholder="password" />
      </div>

      <button type="submit" class="form-control" name="register_btn">
        <span>Register</span>
      </button>
      <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
    </div>
    <div class="col">
      <img src="makerere.jpg" alt="makk" class="logo"/>

    </div>
    </div>    

  </body>
</html>
