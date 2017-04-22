<!DOCTYPE html>
<html lang="en" data-ng-app="clipApp">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="app.description">
  <meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <title data-ng-bind="pageTitle()">Clip-Two - Angular Bootstrap Admin Template</title>
  <!-- Google fonts -->
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Themify Icons -->
  <link rel="stylesheet" href="../bower_components/themify-icons/css/themify-icons.css">
  <!-- Loading Bar -->
  <link rel="stylesheet" href="../bower_components/angular-loading-bar/build/loading-bar.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="../bower_components/animate.css/animate.min.css">
  <!-- Clip-Two CSS -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <!-- Clip-Two Theme -->
  {{--<link rel="stylesheet" data-ng-href="../assets/css/themes/app.layout.theme.css" />--}}
</head>
<!-- start: LOGIN -->
<div class="row">
  <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    {{--<div class="logo">--}}
      {{--<img ng-src="{{app.layout.logo}}" alt="{{app.name}}"/>--}}
    {{--</div>--}}
    <!-- start: LOGIN BOX -->
    <div class="box-login">
      <form class="subscribe" accept-charset="UTF-8" action="api/post-login" method="post">
        <h4>
          <?php if (session()->has('auth_messagee')) { ?>
          <h7 style="color: red"><?php echo session()->get('auth_messagee') ?></h7>
          <?php } ?>

          <?php if (session()->has('auth_message')) { ?>
          <h7 style="color: red"><?php echo session()->get('auth_message') ?></h7>
          <?php } ?></h4>

        <fieldset>
          <legend>
            Sign in to your account
          </legend>
          <p>
            Please enter your name and password to log in.
          </p>
          <div class="form-group">
						<span class="input-icon">
							<input type="text" class="form-control" name="email" placeholder="Email">
							<i class="fa fa-user"></i> </span>
          </div>
          <div class="form-group form-actions">
						<span class="input-icon">
							<input type="password" class="form-control password" name="password" placeholder="Password">
							<i class="fa fa-lock"></i>
							<a class="forgot" ui-sref="login.forgot">
								I forgot my password
							</a> </span>
          </div>
          <div class="form-actions">
            <div class="checkbox clip-check check-primary">
              <input type="checkbox" id="remember" value="1">
              <label for="remember">
                Keep me signed in
              </label>
            </div>
            <button type="submit" class="btn btn-primary pull-right">
              Login <i class="fa fa-arrow-circle-right"></i>
            </button>
          </div>
          <div class="new-account">
            Don't have an account yet?
            <a ui-sref="login.registration">
              Create an account
            </a>
          </div>
        </fieldset>
      </form>
      <!-- start: COPYRIGHT -->
      {{--<div class="copyright">--}}
        {{--{{app.year}} &copy; {{ app.name }} by {{ app.author }}.--}}
      {{--</div>--}}
      <!-- end: COPYRIGHT -->
    </div>
    <!-- end: LOGIN BOX -->
  </div>
</div>
<!-- end: LOGIN -->




<script src="../assets/js/app.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/config.constant.js"></script>
<script src="../assets/js/config.router.js"></script>
<!-- Clip-Two Directives -->
<script src="../assets/js/directives/toggle.js"></script>
<script src="../assets/js/directives/perfect-scrollbar.js"></script>
<script src="../assets/js/directives/empty-links.js"></script>
<script src="../assets/js/directives/sidebars.js"></script>
<script src="../assets/js/directives/off-click.js"></script>
<script src="../assets/js/directives/full-height.js"></script>
<script src="../assets/js/directives/panel-tools.js"></script>
<script src="../assets/js/directives/char-limit.js"></script>
<script src="../assets/js/directives/dismiss.js"></script>
<script src="../assets/js/directives/compare-to.js"></script>
<script src="../assets/js/directives/select.js"></script>
<script src="../assets/js/directives/messages.js"></script>
<script src="../assets/js/directives/chat.js"></script>
<script src="../assets/js/directives/sparkline.js"></script>
<script src="../assets/js/directives/touchspin.js"></script>
<script src="../assets/js/directives/file-upload.js"></script>
<!-- Clip-Two Controllers -->
<script src="../assets/js/controllers/mainCtrl.js"></script>
<script src="../assets/js/controllers/inboxCtrl.js"></script>
<script src="../assets/js/controllers/bootstrapCtrl.js"></script>
</html>