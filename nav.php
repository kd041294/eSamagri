<?php
session_start();
require_once './api/important-functions.php';
if(empty($_SESSION["USER"]["ID"])){
      echo "<script>window.open('sign-in.php', '_self')</script>";
} 
$userId = $_SESSION["USER"]["ID"];
$userName = $_SESSION["USER"]["USER_ID"];
$result = get_user_profile_info($userId);
?>
<nav id="main-nav">
    <ul class="second-nav">
        <li>
            <a href="#" class="sidebar-user d-flex align-items-center py-4 px-3 border-0 mb-0 overflow-auto" style="background-color: #002d47;">
                <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($result['profileImage']) ?>" class="rounded me-3" width="30%" height="25%"/>
                <div class="text-white">
                    <h6 class="mb-0"><?php echo $result['uName']; ?></h6>
                    <small>+91 <span><?php echo $result['uNumber']; ?></span></small><br>
                    <span class="f-10 text-white-50"><?php echo $result['uEmail']; ?></span>    
                    <div style="font-size: 100%;">ID : <?php echo $userName; ?> <i class="bi-patch-check-fill" style="color:  <?php if($result["sta"] === "1"){
                                                                                                                                                echo "#0FE504";
                                                                                                                                            }else{
                                                                                                                                                echo "#FF0004";
                                                                                                                                                } ?>   ; "></i></div>
                </div>
            </a>
        </li>
        <li><a href="<?php echo $routes['profile']; ?>"><i class="bi bi-person me-2"></i> Profile Settings</a></i></li>
        <li><a href="<?php echo $routes['home']; ?>"><i class="bi bi-house me-2"></i> Homepage</a></li>
        <li><a href="<?php echo $routes['bag']; ?>"><i class="bi bi-bag me-2"></i> Bag</a></li>  
        <li><a href="<?php echo $routes['address']; ?>"><i class="bi bi-pin-map-fill me-2"></i>My Address</a></li>
        <li><a href="<?php echo $routes['orders']; ?>"><i class="bi bi-bag me-2"></i>My Orders</a></li>
        <li><a href="<?php echo $routes['about']; ?>"><i class="bi bi-clipboard me-2"></i> About Us</a></li>
        <?php
            if($result['uReferByCode'] != ""){
                echo '<li><a href="#"><i class="bi bi-link-45deg me-2"></i>Refer By : '.$result['uReferByCode'].'</a></li>';
            }
        ?>
        <li><a href="#"><i class="bi bi-link-45deg me-2"></i> Share</a></li>
    </ul>
    <ul class="bottom-nav">
        <li class="email">
            <a class="text-success nav-item text-center" href="<?php echo $routes['home']; ?>" tabindex="0" role="menuitem">
                <p class="h5 m-0"><i class="icofont-ui-home text-success"></i></p>
                Home
            </a>
        </li>
        <li class="github">
            <a href="<?php echo $routes['offers']; ?>" class="nav-item text-center" tabindex="0" role="menuitem">
                <p class="h5 m-0"><i class="icofont-sale-discount"></i></p>
                Offer
            </a>
        </li>
        <li class="ko-fi">
            <a href="<?php echo $routes['support']; ?>" class="nav-item text-center" tabindex="0" role="menuitem">
                <p class="h5 m-0"><i class="icofont-support-faq"></i></p>
                Support
            </a>
        </li>
    </ul>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>