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
    <style>
        body{
            overflow:hidden;
        }

        .support-tabs .nav-tabs {
  border: none;
}
.support-tabs .nav-tabs > li {
  margin-bottom: 0;
  width: 16.666666%;
  padding: 0 15px;
}
.support-tabs .nav-tabs > li > a {
  border: 1px solid #c0392b;
  border-radius: 0;
  margin: 0;
  text-align: center;
  color: #000000;
  display: block;
  line-height: 1.75;
  padding: 37px 10px 28px;
  position: relative;
}
.support-tabs .nav-tabs > li > a span {
  font-size: 4rem;
  line-height: 1;
  display: block;
  margin-bottom: 7px;
}
.support-tabs .nav-tabs > li > a:hover {
  background-color: transparent;
  color: #c0392b;
}
.support-tabs .nav-tabs > li > a:after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 13px solid #c0392b;
  border-left: 13px solid transparent;
  border-right: 13px solid transparent;
  top: 100%;
  left: 50%;
  margin-left: -13px;
  -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
  opacity: 0;
  visibility: hidden;
}
.support-tabs .nav-tabs > li.active a {
  background-color: #c0392b;
  color: #ffffff;
}
.support-tabs .nav-tabs > li.active a:after {
  opacity: 1;
  visibility: visible;
}
.support-tabs .pane-content {
  padding: 65px 15px 0;
  width: 100%;
  float: left;
}
.support-tabs .installation-steps {
  float: left;
  width: 100%;
  margin-bottom: -45px;
}
.support-tabs .installation-step {
  width: 50%;
  display: inline-block;
  float: left;
  padding-right: 15px;
  margin-bottom: 45px;
}
.support-tabs .installation-step:nth-child(2n) {
  padding-right: 0;
  padding-left: 15px;
}
.support-tabs .installation-step .step-title {
  font-size: 1.6rem;
  font-weight: 700;
  margin-bottom: 5px;
}

    </style>
    <title>Support</title>
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

<!-- Support -->

        <!-- Supports -->
        <div id="support" class="section section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h3 class="section-title">Supports</h3>
                            <p class="section-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ut aliquip</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="support-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" id="tab1" class ="active"><a href="#installation" aria-controls="installation" role="tab" data-toggle="tab"><span class="icon-clipboard"></span>Installation<br/>Guide</a></li>
                            <li role="presentation" id="tab2" ><a href="#video-docs" aria-controls="video-docs" role="tab" data-toggle="tab"><span class="icon-video"></span>Video<br/>Documentation</a></li>
                            <li role="presentation" id="tab3" ><a href="#general-faq" aria-controls="general-faq" role="tab" data-toggle="tab"><span class="icon-quote"></span>General<br/>FAQ</a></li>
                            <li role="presentation" id="tab4" ><a href="#some-secret-01" aria-controls="some-secret-01" role="tab" data-toggle="tab"><span class="icon-hourglass"></span>Some<br/>Secrets 01</a></li>
                            <li role="presentation" id="tab5" ><a href="#some-secret-02" aria-controls="some-secret-02" role="tab" data-toggle="tab"><span class="icon-target"></span>Some<br/>Secrets 02</a></li>
                            <li role="presentation" id="tab6" ><a href="#some-secret-03" aria-controls="some-secret-03" role="tab" data-toggle="tab"><span class="icon-target"></span>Some<br/>Secrets 03</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="installation">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="video-docs">
                                <div class="pane-content">
                                    <div class="row">
                                        <div class="col-sm-6 xs-bottom-30">
                                            <div class="plyr-video">
                                            <iframe width="500" height="308" src="https://www.youtube.com/embed/61xbuz0_Y6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="plyr-video">
                                            <iframe width="500" height="308" src="https://www.youtube.com/embed/61xbuz0_Y6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="general-faq">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="some-secret-01">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="some-secret-02">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="some-secret-03">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">1. How can I download from app store?</p>
                                            <p class="step-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Supports End -->

<!-- End Support -->


<!-- jquery -->
<script src="assets/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <script src ="assets/js/support.js"></script>
</body>
</html>