<!-- <div class="edit-profil-leftdiv">
    <ul class="nav nav-pills nav-stacked">
        
        
        
        <?php  if($user_details['utype'] == 1){ ?>
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'dashboard'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "dashboard"]);?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'editprofile'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "editprofile"]);?>" ><i class="fa fa-user-o"></i> My Profile</a></li>
        
        <?php }else{ ?>
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'servicedashboard'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "servicedashboard"]);?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'serviceeditprofile'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "serviceeditprofile"]);?>" ><i class="fa fa-user-o"></i> My Profile</a></li>
        
        <?php } ?>
        
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'favouritelist'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "favouritelist"]);?>"><i class="fa fa-heart-o"></i> My Favourite</a></li>
        
        <li <?php if ($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'changepass'){?> class="actv" <?php } ?>><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "changepass"]);?>"><i class="fa fa-lock"></i> Change Password</a></li>
    </ul>
</div> -->

<div class="col-lg-3 col-md-4">
  <div class="left-bar mb-4">
    <div class="d-flex p-3 p-lg-4 align-items-center left-bar-top">
      <div class="user-image mr-2">
        <img src="<?php echo $this->request->webroot;?>images/user.jpg" alt="" class="rounded-circle">
      </div>
      <div class="user-info">
        <h6 class="mb-0">Samuel  Jones</h6>
        <p class="mb-0 location"><i class="ion-location"></i> California, CA, USA</p>
      </div>
    </div>
    <ul class="sidebar-menu list-unstyled mb-0">
      <li class="active"><a href=""><span><i class="ion-home"></i></span> Home</a></li>
      <li><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "serviceeditprofile"]);?>"><span><i class="ion-ios-person"></i></span> Profile</a></li>
      <li><a href="<?php echo $this->Url->build(["controller" => "Users","action" => "changepass"]);?>"><span><i class="ion-ios-person"></i></span> Change Password</a></li>
      <li><a href=""><span><i class="ion-plus"></i></span> Add Venue</a></li>
      <li><a href=""><span><i class="ion-heart"></i></span> Wishlist</a></li>
      <li><a href=""><span><i class="ion-ios-email"></i></span> Messages</a></li>
      <li><a href=""><span><i class="ion-android-calendar"></i></span> Bookings</a></li>
      <li><a href=""><span><i class="ion-star"></i></span> Reviews</a></li>
      <li><a href=""><span><i class="ion-ios-pricetag"></i></span> Subscriptions</a></li>
      <li><a href=""><span><i class="ion-log-out"></i></span> Log Out</a></li>
    </ul>
  </div>
</div>