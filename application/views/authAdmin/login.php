

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-8 col-md-6 py-y mt-5 ">

 
          <div class="card-body  p-0">
            <!-- Nested Row within Card Body -->
            
              <div class="col-lg-15 pl-3 pr-3 my-5 py-5  ">
                <div class="p-3">
                  <div class="text-center">
                      <h3 class="text-light">Login</h3>
                  </div>
         
                </div>
                  <?php if($this->session->flashdata('message')) : ?>
             <div class="alert alert-success" role="alert">
             <?php echo $this->session->flashdata('message'); ?> 
             </div>  
             <?php endif; ?> 

                  <form class="user" method="post" action="<?=base_url('authAdmin'); ?>">
                  <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

                    <div class="form-group">
                      <input type="text" name="username" value="<?php echo set_value('username'); ?>"class="form-control form-control-user" id="exampleInputUsername"  placeholder="Enter username...">
                       <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>     
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                         <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>     
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" href="#" class="btn btn-cyan text-white btn-user btn-block">
                      Login
                    </button>
                    <hr>

                      <h6 align="center" mt-5><a href="<?php echo site_url("landing/index");?>" style="color: #fa4b4e">< back to previous page</a></h6>
                      
            
                  </form>
                  <hr>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>

  </div>


