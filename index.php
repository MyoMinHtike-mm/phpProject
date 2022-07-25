
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>testing</title>
  </head>

<body>

<div class="container text-center" style="width: 600px">
    <?php if(isset($_GET['error'])) : ?>
      <div class="alert alert-warning">
        
          <h6>Login Warning</h6>
        
      </div>
    <?php endif ?>

    <?php if(isset($_GET['register'])) : ?>
      <div class="alert alert-success mt-3">
        
          <h6 class="text-secondary">Your Personal Account is created!</h6>
        
      </div>
    <?php endif ?>

    <?php if(isset($_GET['incorrect'])) : ?>
      <div class="alert alert-success mt-3">
        
          <h6 class="text-secondary">Account not found!</h6>
        
      </div>
    <?php endif ?>

    </div>
  


  <div class="center">



      <h2>Login</h2>
      <form action="_actions/login.php" method="post" class="form" style="width: 100%">

        <div class="input-tags">
          <input type="email" class="form-control w-100 mt-4" name="email" id="email" style="background: transparent;border: none;outline: none;color: #008;border-bottom: 2px solid #fff;">
          <label for="email" class="m-2" >Email</label>
          
          <input type="password" class="form-control w-100" name="password" id="password" style="background: transparent;border: none;outline: none;color: #008;border-bottom: 2px solid #fff;">
          <label for="password" class="m-2">Password</label>

        </div>

        <div class="forgot">Forgot Password?</div>
          <input class="submitbtn w-100" type="submit" name="" value="login">
          <div class="no-member">Not a member?</div>
            <span class="signup-link"><a href="register.php">signup</a></span>
      </form>
  </div>


</body>
</html>