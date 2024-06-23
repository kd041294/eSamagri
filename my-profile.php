<?php
    session_start();
    error_reporting(0);
    require './api/constant-links.php';
    require_once './api/important-functions.php';
    $CurrentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $_SESSION["USER"]["CURRENT_URL"] = $CurrentUrl;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta property="og:title" content="Vide" />
        <meta name="keywords" content="fast and safe offers" />
        <link rel="icon" href="img/logo.png" type="image/icon type">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="free home delivery, neat and clean delivery" />
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
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/loader.css" rel="stylesheet">
        <link href="vendor/sidebar/demo.css" rel="stylesheet" />
    </head>
   <body class="mb-5 pb-5">
        <?php include 'nav.php'; ?> 
        <div class="p-3 shadow-sm danger-nav osahan-home-header sticky-top" style="background-color: #002d47;">
            <div class="font-weight-normal mb-0 d-flex align-items-center">
                <h4 class="m-0 fw-bold text-warning">e<span class="text-white">Samagri</span></h4>
                <div class="ms-auto d-flex align-items-center"> 
                    <a class="toggle osahan-toggle fs-4 text-white ms-auto" href="#"><i class="bi-patch-check-fill" style="color:  <?php if($result["sta"] === "1"){
                                                                                                                                                echo "#0FE504";
                                                                                                                                            }else{
                                                                                                                                                echo "#FF0004";
                                                                                                                                                } ?>   ; "></i></a>
                </div>
            </div>
        </div>
        <div class="container rounded mb-2">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-3">
                        <form enctype="multipart/form-data" >
                            <div class="row text-center">
                                <h4 class="text-right">Edit Profile Details</h4>
                            </div>
                            <!-- Profile Details Starts -->
                            <div class="row">
                                <div class="col-12"><b>Upload Profile Image</b><input type="file" name="profileImage" id="profileImage" class="form-control" cvalue="upload profile image"></div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Full name</b>
                                <div class="col-12 mt-2"><input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" value="<?php echo $result["uName"]; ?>" readonly/></div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Mobile Number</b>
                                <div class="col-12"><input type="text" class="form-control" id="number" placeholder="Enter Mobile Number" value="<?php echo $result["uNumber"]; ?> " readonly/></div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Email ID</b>
                                <div class="col-12"><input type="email" class="form-control" id="email" placeholder="Enter Email" value="<?php echo $result["uEmail"]; ?>" readonly></div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Aadhar Card Number</b>
                                <div class="col-12"><input type="text" class="form-control" id="aadharNumber" placeholder="Enter Aadhar Number" value="<?php echo $result["aadharNumber"]; ?>"></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <b>Upload Aadhar Image</b><input type="file" name="aadharImage" id="aadharImage" class="form-control" value="upload license image">
                                </div>
                            </div>
                            <!-- Profile Details Ends -->
                            <hr>
                            <!--- Shop deatils Starts--->
                            <div class="row text-center">
                                <h4 class="text-right">Edit Shop Details</h4>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Shop Name</b>
                                <div class="col-12"><input type="text" class="form-control" placeholder="Enter Shop Name" value=""></div>
                            </div>
                            <div class="row mt-2">
                                <b>Select License Type</b>
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" value="GST">
                                    <label class="form-check-label" for="flexRadioDefault1" checked>GST</label>
                                </div>
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" value="GST">
                                    <label class="form-check-label" for="flexRadioDefault1">FASSAI</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter License Number</b>
                                <div class="col-12"><input type="text" class="form-control" placeholder="Enter License Number" value=""></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <b>Upload License Image</b><input type="file" class="form-control" value="upload license image">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <b>Enter Shop Address</b>
                                <div class="col-12"><textarea type="text" class="form-control" placeholder="Enter Full Shop Address" value=""></textarea></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6"><input type="text" class="form-control" placeholder="Pincode" value=""></div>
                                <div class="col-6"><input type="text" class="form-control" placeholder="state" value=""></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12"><input type="text" class="form-control" placeholder="country" value="India" readonly></div>
                            </div>
                            <!--- Shop deatils ends--->
                            <div class="mt-2 text-center"><button class="btn text-white" id="updateProfile" type="button" style="background-color: #002d47">Update Profile</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
      <div id="cover-spin"></div>
      <?php include 'fixed-bottom.php'; ?>
      </div>
    </div>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <script type="text/javascript" src="js/update-profile.js"></script>
   </body>
</html>