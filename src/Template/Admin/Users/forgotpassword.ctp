	<div class="cus-frm-wrapper">
	
    <div class="text-center">
        <a href="<?php echo $this->Url->build('/', true);?>">
			<?php //echo  $this->Html->image('admin/unnamed.png') ?>
            
                            <?php $filePathlo = WWW_ROOT . 'logo' .DS.$SiteSettings['site_logo']; ?>
                            <?php if ($SiteSettings['site_logo'] != "" && file_exists($filePathlo)) { ?>
                                <img src="<?php echo $this->Url->build('/logo/'.$SiteSettings['site_logo']); ?>" width="100px" height="100px"/>
                            <?php } else { ?> 
                                    <?php echo $this->Html->image('admin/unnamed.png', ['alt' => 'logo', 'height' => 75, 'width' => 75]); ?>
                            <?php } ?>            
            
            
                        
			</a>
    </div>
    <div class="tab-content">
		<h2> <i class="fa fa-lock"></i> Forgot Password</h2>
        <?php echo $this->Form->create('',['class' => 'form-signin', 'id' => '']);?> 
        <?php echo  $this->Flash->render() ?>
        <div id="login" class="tab-pane active">
            <form action="index.html" class="form-signin" id="adminlogin-validate">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your Email 
                </p>
                <input type="email" placeholder="Enter Email Address" name="email" id="email" class="form-control" required="" /><br>
                <button class="btn text-muted text-center btn-danger" type="submit">Forgot Password</button>
            </form>
        </div>
        </form>
        <!--
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 <input type="text" placeholder="First Name" class="form-control" />
                 <input type="text" placeholder="Last Name" class="form-control" />
                <input type="text" placeholder="Username" class="form-control" />
                <input type="email" placeholder="Your E-mail" class="form-control" />
                <input type="password" placeholder="password" class="form-control" />
                <input type="password" placeholder="Re type password" class="form-control" />
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
        -->
        
    </div>
    
    

</div>