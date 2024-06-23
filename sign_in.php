<?php
    require './api/constant-links.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta property="og:title" content="Vide" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="img/logo.png" type="image/icon type">
        <meta name="keywords" content="free home delivery, neat and clean delivery" />
        <meta name="keywords" content="fast and safe offers" />
        <meta name="keywords" content="fast and safe Login, fast and safe signup, free home home delivery, fastest home delivery"/>
        <meta name="keywords" content="fast and safe grocery delivery, fast and safe meat and fish delivery, fast and safe chicken delivery, fast and safe mutton delivery, fast and safe stationary delivery, fast and safe medicine delivery, fast and safe water jars delivery"/>
        <meta name="keywords" content="online grocery store,online grocery kolkata,online grocery howrah, online grocery shopping, online grocery store,online supermarket"/>
        <meta name="keywords" content="onilne fruits store, online raw fruits store, online raw fruits store kolkata, online fruits store kolkata,online raw fruits store howrah, online fruits store howrah, online raw fruits shopping, online vegetables shopping,online supermarket"/>
        <meta name="keywords" content="onilne vegetables store, online raw vegetables store, online raw vegetables store kolkata, online vegetables store kolkata,online raw vegetables store howrah, online vegetables store howrah, online raw vegetables shopping, online vegetables shopping,online supermarket"/>
        <meta name="keywords" content="onilne chicken store, online raw chicken store, online raw chicken store kolkata, online chicken store kolkata,online raw chicken store howrah, online chicken store howrah, online raw chicken shopping, online chicken shopping,online supermarket"/>
        <meta name="keywords" content="online water jars supply, online kinley water jars, online bisleri water jar, online quinch water jars, online local water jars"/>
        <meta name="keywords" content="online medicine delivery, huge discount on medicine delivery, discount on medicine delivery" />
        <meta name="keywords" content="online stationary store, online book store, online pen store, online pencil store, online pen and pencil store" />
        <meta name="description" content="Fresh veggies, grocery and more | Delivering all across Kolkata | Fast, Safe and Ever-Fresh. Vegetables, Fruits, Groceries and other household items, at a never-before price, delivered in 2 hours of order placement. Delivery is free. Fast, Fresh and Safe only with Fast & Safe." />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/icons/icofont.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/loader.css" rel="stylesheet">
        <link href="vendor/sidebar/demo.css" rel="stylesheet">
    </head>
    <body style="background-color: #edfbff;">
        <div id="cover-spin"></div>
        <div class="p-3 shadow-sm danger-nav osahan-home-header text-white" style="background-color: #002d47;">
            <div class="font-weight-normal mb-0 d-flex align-items-center">
                <h6 class="fw-normal mb-0 d-flex align-items-center">
                    <a class="me-3 fs-4 text-white" href="<?php echo $routes['started']; ?>"><i class="bi bi-chevron-left"></i></a>
                    Sign In
                </h6>
            </div>
        </div>
        <div class="p-4" id="info_form">
            <form>
                <div class="mb-4 mt-4">
                    <label class="form-label text-muted small mb-1">Mobile Number</label>
                    <div class="input-group input-group-lg bg-white shadow-sm rounded overflow-hiddem">
                        <span class="input-group-text bg-white"><i class="bi bi-phone text-muted"></i></span>
                        <input type="text" class="form-control" id="mobNum" placeholder="Enter Mobile Number" />
                    </div>
                </div>
            </form>
            <div class="row">
                <p class="text-danger" id="fail" ></p>
            </div>
            <div class="osahan-footer fixed-bottom p-3 text-center">
                <p><a href="sign-up.php" >New User ? Create Account</a></p>
                <a class="btn btn-lg w-100 shadow text-white" id="sin-but" style="background-color: #002d47;">Get OTP</a>
            </div>
        </div>
        <!-- Starts Code to display otp box -->
        <div class="p-5" id="verify_form" style="display: none">
            <div class="text-center">
                <h4 class="fw-bold">Verifying your Mobile</h4>
                <p class="text-muted">We have sent 6 digit code on<br> +91 <span id="ver_num" class="text-danger" ></span> <span id="edit_num" style="color: blue;">Edit</span>
            </div>
            <form class="my-5">
                <div class="d-flex justify-content-center">
                    <input class="form-control bg-light" style=" border: none; border-bottom: 2px solid  #200121;" id="sub-otp" inlength="1" maxlength="6" placeholder="Enter OTP"/>
                </div>
            </form>
            <div class="row">
                <p class="text-danger" id="otpFail" ></p>
            </div>
            <!-- <div class="text-center h6">
                <button style="color: #DDDADD" id="sub-otp">Resend in <span id="countdowntimer" class="text-danger" >30 </span></button>
            </div> -->
            <div class="osahan-footer fixed-bottom p-3 text-center">
                <p><a href="<?php echo $routes['signup']; ?>">Already have an account ? Sign Up here</a></p>
                <a class="btn btn-success btn-lg w-100 shadow" id="final_sub" >Continue</a>
            </div>
        </div>
        <!-- End Code to display otp box -->
        <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/sign-in-configuration.js" ></script>
        <script type="text/javascript" src="js/timer.js" ></script>
    </body>
</html>