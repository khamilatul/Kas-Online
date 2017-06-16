<!DOCTYPE HTML>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="app.description">
  <meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- X-ICON -->
  <link rel="shortcut icon" href="logo.png" type="x-icon" />
  <!-- Reset CSS -->
  <link rel="stylesheet" href="../assets/css/style1.css" type="text/css" />
</head>
<body>
  <!-- Content Login -->
  <?php if (session()->has('auth_messagee')) { ?>
  <h7 style="color: red"><?php echo session()->get('auth_messagee') ?></h7>
  <?php } ?>
  <?php if (session()->has('auth_message')) { ?>
  <h7 style="color: red"><?php echo session()->get('auth_message') ?></h7>
  <?php } ?>

  <form accept-charset="UTF-8" method="post" name="login" action="api/post-login">
    <div class="login-form">
      <h1>Login Your Acount</h1>
      <img src="../assets/images/avatar.png" alt=""/>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email " id="email" name="email" required/>
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required/>
        <i class="fa fa-lock"></i>
      </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Forgot your password?</a>
      <input type="submit" class="log-btn" value="Login" />
    </div>
  </form>
  <!-- Reset Animasi -->
  <article>
    <p id="text">1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 </p>
    <a id="reset">1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1</a>
  </article>
  <!-- Google JS -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- Reset JS -->
  <script src="../assets/js/index.js"></script>
  <script src="../assets/js/index1.js"></script>
</body>
</html>
