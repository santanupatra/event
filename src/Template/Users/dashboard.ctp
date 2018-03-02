<section class="user-dashboard">
    <div class="container">
      <div class="row">
        <?php echo $this->element('side_menu');?>        
        <div class="col-lg-9 col-md-8">
          <div class="edit-pro p-3 p-lg-4">
            <h5 class="common-title mb-3 pb-2">Profile</h5>
            <div class="row">
              <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Full Name:</label>
                    <div class="col-sm-8">
                      <?php echo $user_info->full_name;?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Email Address:</label>
                    <div class="col-sm-8">
                       <?php echo $user_info->email;?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Phone:</label>
                    <div class="col-sm-8">
                       <?php echo $user_info->phone;?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Address:</label>
                    <div class="col-sm-8">
                       <?php echo $user_info->address;?>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>