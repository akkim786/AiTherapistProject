<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- login css -->
    <link rel="stylesheet" href="assets\css\login.css">
    <title>Sign in</title>
</head>
<body>
  <!-- login start --> 

  <div class="signup-page-container signup-form-open">
  <div class="signup__container signup-form">
    <div class="container__child signup__thumbnail" style="background: url(https://p.w3layouts.com/demos_new/template_demo/19-06-2017/assets-demo_Free/554297363/web/images/7.jpg);">
      <div class="thumbnail__logo"><img src="http://192.168.1.6:8080/house-rent-management/owner_front_end/assets/img/logo.png" alt=""/></div>
      <div class="thumbnail__content text-center">
        <h1 class="heading--primary">Welcome to signup</h1>
        <h2 class="heading--secondary">Are you ready to join?</h2>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="#">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" id="username" type="text" name="username" placeholder="" required=""/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="" required=""/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" id="password" type="password" name="password" placeholder="" required=""/>
        </div>
        <div class="form-group">
          <label for="passwordRepeat">Repeat Password</label>
          <input class="form-control" id="passwordRepeat" type="password" name="passwordRepeat" placeholder="" required=""/>
        </div>
        <div class="m-t-lg">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" value="Register"/>
            </li>
            <li><a class="signup__link" id="signup__link" href="#">I am already a member</a></li>
          </ul>
        </div>
      </form>
    </div>
  </div>
  <div class="login-container">
    <div class="signup__container">
      <div class="container__child signup__form">
        <form action="#">
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="" required=""/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="" required=""/>
          </div>
          <div class="m-t-lg">
            <ul class="list-inline">
              <li>
                <input class="btn btn--form" type="submit" value="Login"/>
              </li>
              <li><a class="signup__link" id="login__link" href="#">Create a new member</a></li>
            </ul>
          </div>
        </form>
      </div>
      <div class="container__child signup__thumbnail" style="background: url(https://p.w3layouts.com/demos_new/template_demo/19-06-2017/assets-demo_Free/554297363/web/images/7.jpg);">
        <div class="thumbnail__logo"><img src="http://192.168.1.6:8080/house-rent-management/owner_front_end/assets/img/logo.png" alt=""/></div>
        <div class="thumbnail__content text-center">
          <h1 class="heading--primary">Welcome to login</h1>
          <h2 class="heading--secondary">Are you ready to login?</h2>
        </div>
        <div class="signup__overlay"></div>
      </div>
    </div>
  </div>
</div>

<!-- login end -->

<!-- login jquery -->
<script src="assets\js\login.js"></script>
</body>
</html>