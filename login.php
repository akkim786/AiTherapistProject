<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noarchive">
    <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
    <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
	<meta name="author" content="Pedro Botelho for Codrops" />	
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.5.7.2.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- login css -->
    <link rel="stylesheet" href="assets\css\login.css">
    <style>
        body{
            overflow:hidden;
        }
    </style>
   
    <title>Sign in</title>
</head>
<body>

<nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="index.php" class="logo">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="index.php" style ="color:#000;">Home</a>
                    </li>
                    <li><a href="#about" style ="color:#000;">About</a></li>
                    <li><a href="#features" style ="color:#000;">Features</a></li>
                    <li><a href="#screenshot" style ="color:#000;">Screenshot</a></li>
                    <li><a href="#pricing" style ="color:#000;">Pricing</a></li>
                    <li><a href="#testimonial" style ="color:#000;">Testimonials</a></li>
                    <li class="menu-item-has-children">
                        <a href="#" style ="color:#000;">Extra</a>
                        <ul class="sub-menu">
                            <li><a href="support.php" style ="color:#000;">Support</a></li>
                            <li><a href="speciality.php" style ="color:#000;">Speciality</a></li>
                            <li><a href="team.php" style ="color:#000;">Core Team</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php" style ="color:#000;">Sign in</a></li>
                    <li><a href="#contact" style ="color:#000;">Contact</a></li>
                </ul>
            </div>
</nav><br><br>
<br><br>
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


<!-- jquery -->
<script src="assets/js/jquery.js"></script>
<!-- login jquery -->
<script src="assets\js\login.js"></script>
<!-- popper -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- wow js-->
<script src="assets/js/wow.min.js"></script>
<!-- way points js-->
<script src="assets/js/waypoints.min.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>
</body>
</html>