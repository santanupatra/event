<section class="user-dashboard">
    <div class="container">
      <div class="row">      
        <?php echo $this->element('side_menu');?>
        <div class="col-lg-9 col-md-8">
          <div class="vendor-dashboard-top mb-3">
            <ul class="links d-flex list-unstyled p-3 mb-0">
              <li><a href=""><i class="ion-compose"></i> Update Status</a></li>
              <li><a href=""><i class="ion-camera"></i> Add Photos/Videos</a></li>
              <li><a href=""><i class="ion-image"></i> Create Photo Album</a></li>
            </ul>
            <div class="msg-body p-3">
              <textarea rows="3" class="form-control" placeholder="What’s on your mind"></textarea>
            </div>
            <div class="msg-bottom px-3 py-2">
              <ul class="d-flex list-unstyled mb-0">
                <li><a href=""><i class="ion-compose"></i></a></li>
                <li><a href=""><i class="ion-camera"></i></a></li>
                <li><a href=""><i class="ion-image"></i></a></li>
              </ul>
            </div>
          </div>
          
          <div class="recent-post-wrap">
            <h5 class="common-title mb-0 p-3">Recent Posts</h5>
            <div class="p-3">
              <div class="post-wrap d-flex mb-3">
                <div class="left-side mr-2">
                  <img src="<?php echo $this->request->webroot;?>images/user3.jpg" class="user-image rounded-circle" alt="">
                </div>
                <div class="right-side">
                  <p class="name mb-0">Mallika Singh <span>added a new photo</span></p>
                  <small class="grey-text d-block mb-2">5 minutes ago</small>
                  <div class="post-image mb-2">
                    <img src="<?php echo $this->request->webroot;?>images/post-image.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="like-comment text-right mb-2">
                    <a href="">23 <span class="grey-text">Likes</span>  </a> <span class="grey-text"> |</span>
                    <a href="">57 <span class="grey-text">Comment</span></a>
                  </p>
                  <ul class="posted-extra-links d-flex list-unstyled mb-0 py-1">
                    <li><a href=""><i class="ion-thumbsup"></i> Like</a></li>
                    <li><a href=""><i class="ion-android-share-alt"></i> Share</a></li>
                    <li><a href=""><i class="ion-ios-chatbubble-outline"></i> Comment</a></li>
                    <li><a href=""><i class="ion-ios-information"></i> Report</a></li>
                  </ul>
                </div>
              </div>
              <div class="post-wrap d-flex mb-3">
                <div class="left-side mr-2">
                  <img src="<?php echo $this->request->webroot;?>images/user.jpg" class="user-image rounded-circle" alt="">
                </div>
                <div class="right-side">
                  <p class="name mb-0">Mallika Singh <span>added a new photo</span></p>
                  <small class="grey-text d-block mb-2">5 minutes ago</small>
                  <div class="post-image mb-2">
                    <img src="<?php echo $this->request->webroot;?>images/post-image2.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="like-comment text-right mb-2">
                    <a href="">23 <span class="grey-text">Likes</span>  </a> <span class="grey-text"> |</span>
                    <a href="">57 <span class="grey-text">Comment</span></a>
                  </p>
                  <ul class="posted-extra-links d-flex list-unstyled mb-0 py-1">
                    <li><a href=""><i class="ion-thumbsup"></i> Like</a></li>
                    <li><a href=""><i class="ion-android-share-alt"></i> Share</a></li>
                    <li><a href=""><i class="ion-ios-chatbubble-outline"></i> Comment</a></li>
                    <li><a href=""><i class="ion-ios-information"></i> Report</a></li>
                  </ul>
                </div>
              </div>
              <div class="post-wrap d-flex mb-3">
                <div class="left-side mr-2">
                  <img src="<?php echo $this->request->webroot;?>images/user3.jpg" class="user-image rounded-circle" alt="">
                </div>
                <div class="right-side">
                  <p class="name mb-0">Mallika Singh <span>added a new photo</span></p>
                  <small class="grey-text d-block mb-2">5 minutes ago</small>
                  <div class="post-image mb-2">
                    <img src="<?php echo $this->request->webroot;?>images/news-1.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="like-comment text-right mb-2">
                    <a href="">23 <span class="grey-text">Likes</span>  </a> <span class="grey-text"> |</span>
                    <a href="">57 <span class="grey-text">Comment</span></a>
                  </p>
                  <ul class="posted-extra-links d-flex list-unstyled mb-0 py-1">
                    <li><a href=""><i class="ion-thumbsup"></i> Like</a></li>
                    <li><a href=""><i class="ion-android-share-alt"></i> Share</a></li>
                    <li><a href=""><i class="ion-ios-chatbubble-outline"></i> Comment</a></li>
                    <li><a href=""><i class="ion-ios-information"></i> Report</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>