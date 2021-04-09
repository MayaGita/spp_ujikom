<body id="page-top">
  <div class="container-login">
       <div class="img">
        <img src="">
         
       </div>
       <div class="login-container">
      

        <form class="form-login"  method="post" action="<?=base_url('authSiswa'); ?>">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <h2>Login siswa</h2>
          <?php if($this->session->flashdata('message')) : ?>
             <div class="alert alert-success" role="alert">
             <?php echo $this->session->flashdata('message'); ?> 
             </div>  
             <?php endif; ?> 
          <div class="input-div focus">
            <div class="i">
              <i class="fas fa-user">
                
              </i>
            </div>
            <div>
              <h5>username</h5>
              <input type="text" name="username" class="input" value="<?php echo set_value('username'); ?>"id="exampleInputUsername" >
               <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>     
            </div>
          </div>
              <div class="input-div focus">
            <div class="i">
              <i class="fas fa-lock">
                
              </i>
            </div>
            <div>
              <h5>password</h5>
              <input type="password" name="password" class="input" id="exampleInputUsername" >
               <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>     
            </div>
          </div>

            <button type="submit" class="btn btn-warning text-white py-2 px-3"  >login</button>
            <a class="btn btn-outline-light py-2 px-3 " href="<?php echo site_url("landing/index");?>">back</a>

             </form>

          </div>
        
         
       </div>
     