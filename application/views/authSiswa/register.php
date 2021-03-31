


  <div class="container">
        <div class="row justify-content-center ">
        
      
        <div class="col-xl-5 col-lg-8 col-md-6 py-5"> 

      <div class="card-body p-3">
        <!-- Nested Row within Card Body -->
        <div class="row">
   
          <div class="col-lg-15 pl-0 pr-0 my-0  ">
            <div class="p-5">
              <div class="text-center">
              <figure class="figure ">
                  <img src="<?php echo base_url('asset/img/logoweb3.png');?>" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
                 <figcaption class="figure-caption italic"><em>Get your comfy style.</em></figcaption>
                  </figure>
                <h1 class="h3 text-white-900 mb-5">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/register');?>">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                <div class="form-group ">
                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">  
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>     
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                   <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>     
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>     
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="repeat_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                     <?= form_error('repeat_password', '<small class="text-danger pl-3">', '</small>')?>     
                  </div>
                </div>
                <button type="submit" class="btn btn-info btn-user btn-block">
                  Register Account
                </button>
                <hr>
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small text-info" href="<?php echo site_url("auth/index"); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>





